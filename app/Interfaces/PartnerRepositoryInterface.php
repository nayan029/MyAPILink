<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface PartnerRepositoryInterface
{

    public function getPartnerdata(Request $request);

    public function storePartner(Request $request);

    public function getSinglePartner($id);

    public function updatePartner(Request $request, $id);

    public function deletePartner($id);
}
