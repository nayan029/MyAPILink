<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface HomeRepositoryInterface
{
    public function contactFooter();

    public function partnerFooter();

    public function storePassword(Request $request);

    public function updatePassword(Request $request);
}
