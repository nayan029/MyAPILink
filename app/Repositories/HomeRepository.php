<?php

namespace App\Repositories;

use App\Interfaces\HomeRepositoryInterface;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Partner;


class HomeRepository implements HomeRepositoryInterface
{
    public function contactFooter()
    {
        return Contact::first();
    }

    public function partnerFooter()
    {
        return Partner::get();
    }
}
