<?php

namespace App\Repositories;

use App\Interfaces\PartnerRepositoryInterface;
use Illuminate\Http\Request;
use App\Models\Partner;
use App\Http\Traits\ImageUploadTrait;

class PartnerRepository implements PartnerRepositoryInterface
{
    use ImageUploadTrait;

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

    public function getPartnerdata(Request $request)
    {
        $draw = $request->query('draw', 0);
        $start = $request->query('start', 0);
        $length = $request->query('length', 25);
        $order = $request->query('order', array(1, 'asc'));


        $sortcolumns = array(
            0 => 'partner.image',
            1 => 'partner.link',

        );

        $query = Partner::select('*');
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
            $action = "<a href='" . $url . "'>" . "<i class='fas fa-user-edit'></i>" . "</a>" . '&nbsp;&nbsp;' . "<a href='" . $url . "'>" . "<i class='fas fa-trash-alt'></i>" . "</a>";
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
    }

    public function updatePartner(Request $request, $id)
    {
        echo "&nbsp;&nbsp;";
    }

    public function deletePartner($id)
    {
    }
}
