<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface RegistrationRepositoryInterface
{
    public function createRegistration(Request $request);

    public function verifyEmail($email);
}
