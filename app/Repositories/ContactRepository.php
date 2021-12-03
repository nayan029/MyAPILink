<?php

namespace App\Repositories;

use App\Interfaces\ContactRepositoryInterface;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\ContactUs;

class ContactRepository implements ContactRepositoryInterface
{
    public function editContact($id)
    {
        return Contact::findorfail($id);
    }

    public function updateContact($request, $id)
    {
        $contact = $this->editContact($id);
        return $contact->update($request->all());
    }
    
    public function getAjaxData(Request $request)
    {
        $draw = $request->query('draw', 0);
        $start = $request->query('start', 0);
        $length = $request->query('length', 25);
        $order = $request->query('order', array(1, 'asc'));


        $sortcolumns = array(
            0 => 'contact_us.firstname',
            1 => 'contact_us.lastname',

        );

        $query = ContactUs::select('*');
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

        $contactus = $query->orderBy('created_at', 'desc')->get();
        foreach ($contactus as $contact) {
                "<a href='javascript:void(0);' data-delete='" . $contact->id . "' class='delete_partner'><i class='fa fa-trash text-danger'></i></a>";

            $json['data'][] = [
                $contact->firstname,
                $contact->lastname,
                $contact->description,
            ];
        }
        return $json;
    }
   
    }

