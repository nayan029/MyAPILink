<?php

namespace App\Repositories;

use App\Interfaces\HomeRepositoryInterface;
use Illuminate\Http\Request;
use App\Models\Contact;

class HomeRepository implements HomeRepositoryInterface
{
    public function contactFooter()
    {
        $contact = Contact::first();
    }
}
