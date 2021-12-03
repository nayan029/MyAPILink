<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface ContactRepositoryInterface
{
    public function editContact($id);

    public function updateContact(Request $request, $id);

    public function getAjaxData(Request $request);
}
