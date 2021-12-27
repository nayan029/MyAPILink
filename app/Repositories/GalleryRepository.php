<?php

namespace App\Repositories;

use App\Http\Traits\ImageuploadTrait;
use App\Interfaces\GalleryRepositoryInterface;
use App\Models\ChatMaster;
use App\Models\Job;
use App\Models\EstablishmentGallery;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class GalleryRepository implements GalleryRepositoryInterface
{

    public function getGallerydata(Request $request)
    {

        $draw = $request->query('draw', 0);
        $start = $request->query('start', 0);
        $length = $request->query('length', 25);
        $order = $request->query('order', array(1, 'asc'));


        $sortcolumns = array(
            0 => 'establishment_gallery.image',
            1 => 'establishment_gallery.status',
            2 => 'establishment_gallery.status',
        );
        // dd($request->gallerystatus);

        $query = EstablishmentGallery::with('establishment')->select('*');
        /*  if ($request->query('title') != '') {
            $query->whereRaw('title LIKE "%' . $request->query('title') . '%"');
        }

        if ($request->query('type_of_contract') != '') {
            $query->whereRaw('type_of_contract LIKE "%' . $request->query('type_of_contract') . '%"');
        }
        if ($request->query('minimum_experience') != '') {
            $query->whereRaw('minimum_experience LIKE "%' . $request->query('minimum_experience') . '%"');
        } */
        $query = EstablishmentGallery::with('establishment')->select('*');;
        if ($request->gallerystatus !='') {
            $query->where('status',$request->gallerystatus);
        }


        $recordstotal = $query->count();
        // dd($recordstotal);
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

        $gallery = $query->orderBy('created_at', 'desc')->get();
        // dd($gallery);
        
        foreach ($gallery as $data) {
            $image = "<img src='" . $data->image . "' height='30px' width='30px'></img>";
            $dateTime = date('d-m-Y H:i A',strtotime($data->created_at));
            $action = "<i class='fa fa-check' style='color:green' title='Approve' onclick='openSwal(1," . $data->id . ")'></i>&nbsp;&nbsp;<i class='fa fa-times' title='Reject' style='color:red' onclick='openSwal(2," . $data->id . ")'></i>";
            if ($data->status == "accept") {
                $class = 'success';
            } elseif ($data->status == "reject") {
                $class = 'danger';
            } else {
                $class = 'primary';
            }
         
            $userName=!empty($data->establishment->getUserList) ? $data->establishment->getUserList["first_name"].' '.$data->establishment->getUserList["last_name"]: 'N/A';
            $status = "<span class='badge badge-" . $class . " status' id=".$data->id.">" . ucfirst($data->status) . "</span>";
            $json['data'][] = [
                $image,
                $status,
                $dateTime,
                $userName,
                $action,

            ];
        }
        return $json;
    }
}
