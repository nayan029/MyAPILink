<?php

namespace App\Repositories;

use App\Interfaces\PartnerRepositoryInterface;
use Illuminate\Http\Request;
use App\Models\Partner;

class PartnerRepository implements PartnerRepositoryInterface
{
    public function storePartner(Request $request)
    {
        $data = $request->all();
        return Partner::create($data);
    }

    public function getPartnerdata(Request $request)
    {
    }
}
