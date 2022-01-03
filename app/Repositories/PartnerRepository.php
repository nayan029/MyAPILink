<?php

namespace App\Repositories;

use App\Interfaces\PartnerRepositoryInterface;
use Illuminate\Http\Request;
use App\Models\Partner;
use App\Http\Traits\ImageuploadTrait;

use function PHPUnit\Framework\isNull;

class PartnerRepository implements PartnerRepositoryInterface
{
    use ImageuploadTrait;

    public function storePartner(Request $request)
    {
        $image = "";
        if ($request->hasFile('image')) {
            $image = $this->uploadImage($request->file('image'), 'partner');
        }
        $data = $request->all();
        $data['image'] = $image;
        return Partner::create($data);
    }

    public function getPartnerData(Request $request)
    {
        $searchImage = $request->query('search_image');
        $searchLastLink = $request->query('search_link');

        $draw = $request->query('draw', 0);
        $start = $request->query('start', 0);
        $length = $request->query('length', 25);
        $order = $request->query('order', array(1, 'asc'));


        $sortcolumns = array(
            0 => 'partner.image',
            1 => 'partner.link',

        );

        $query = Partner::select('*');
        if (!empty($searchImage)) {
            $query->where('image', 'like', '%' . $searchImage . '%');
        }
        if (!empty($searchLastLink)) {
            $query->where('link', $searchLastLink);
        }
        $recordstotal = $query->count();
        $sortColumnName = $sortcolumns[$order[0]['column']];
        $query->orderBy($sortColumnName, $order[0]['dir'])
            ->take($length)
            ->skip($start);

        $json = array(
            'draw' => $draw,
            'recordsTotal' => $recordstotal,
            'recordsFiltered' => $recordstotal,
            'data' => [],
        );

        $partners = $query->orderBy('created_at', 'desc')->get();
        foreach ($partners as $partner) {
            $url = route("partner.show", $partner->id);
            $Image = "<img src='" . url($partner->image) . "' height='50px' width='50px'>";
            $action = "<a href='" . route("partner.edit", $partner->id)   . "'>" . "<i class='fas fa-edit' title='Edit'></i>" . "</a>" . '&nbsp;&nbsp;' .
                "<a href='javascript:void(0);' data-delete='" . $partner->id . "' class='delete_partner' title='Delete'><i class='fa fa-trash text-danger'></i></a>";

            $json['data'][] = [
                $Image,
                $partner->link,
                $action,
            ];
        }
        return $json;
    }


    public function getSinglePartner($id)
    {
        return Partner::findorfail($id);
    }

    public function deletePartner($id)
    {
        $deletes = $this->getSinglePartner($id);
        $deletes->delete();
        return $deletes;
    }


    public function updatePartner(Request $request, $id)
    {
        $old = $this->getSinglePartner($id);

        $image = "";
        if ($request->hasFile('image')) {
            $image = $this->uploadImage($request->file('image'), 'partner');
            $data = $request->all();
            $data['image'] = $image;
            return $old->update($data);
        } else if (isNull($request->image)) {

            return $old->update($request->all());
        } else if (isNull($request->image) && isNull($old->image)) {
            return false;
        }
    }
}
