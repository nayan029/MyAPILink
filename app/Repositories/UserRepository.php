<?php

namespace App\Repositories;

use App\Http\Traits\ImageuploadTrait;
use App\Interfaces\UserRepositoryInterface;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class UserRepository implements UserRepositoryInterface
{
    use ImageuploadTrait;



    public function getUserdata(Request $request)
    {

        $draw = $request->query('draw', 0);
        $start = $request->query('start', 0);
        $length = $request->query('length', 25);
        $order = $request->query('order', array(1, 'asc'));


        $sortcolumns = array(
            0 => 'users.first_name',
            1 => 'users.email',
            2 => 'users.phone',
            3 => 'users.user_type',

        );

        $query = User::select('*')->whereNotNull('user_type');
        if ($request->query('name') != '') {
            $query->whereRaw('first_name LIKE "%' . $request->query('name') . '%"');
            $query->orWhereRaw('civility LIKE "%' . $request->query('name') . '%"');
            $query->orWhereRaw('last_name LIKE "%' . $request->query('name') . '%"');
        }

        if ($request->query('email') != '') {
            $query->whereRaw('email LIKE "%' . $request->query('email') . '%"');
        }

        if ($request->query('mobile') != '') {
            $query->whereRaw('phone LIKE "%' . $request->query('mobile') . '%"');
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

        $Users = $query->orderBy('created_at', 'desc')->get();
        foreach ($Users as $user) {
            $url = route("user.show", $user->id);
            $userName = ucfirst($user->civility) . ' ' . ucfirst($user->first_name) . ' ' . ucfirst($user->last_name);
            $nameAction = "<a href='" . $url . "'>" . $userName . "</a>";

            $userType = '-';
            $labelClass = '';
            if ($user->user_type == 1) {
                $userType = 'User';
                $labelClass = 'btn btn-block btn-success  btn-sm';
            } else if ($user->user_type == 2) {
                $userType = 'Manager';
                $labelClass = 'btn btn-block btn-primary btn-sm';
            }
            $type = "<label class='" . $labelClass . "'>" . $userType . "</label>";
            $json['data'][] = [
                $nameAction,
                $user->email,
                $user->phone,
                $type,
            ];
        }
        return $json;
    }

    public function getSingleUserData($id)
    {
        return User::findorfail($id);
    }
}
