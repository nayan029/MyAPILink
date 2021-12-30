<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface ForgotPasswordRepositoryInterface
{

    public function storePassword(Request $request);

    public function resetPassword(Request $request);
}
