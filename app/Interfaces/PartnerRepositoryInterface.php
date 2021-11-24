<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface PartnerRepositoryInterface
{
    public function storePartner(Request $request);

    public function getPartnerdata(Request $request);
}
