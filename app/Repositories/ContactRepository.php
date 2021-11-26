<?php

namespace App\Repositories;

use App\Interfaces\ContactRepositoryInterface;
use Illuminate\Http\Request;
use App\Models\Contact;

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
}
