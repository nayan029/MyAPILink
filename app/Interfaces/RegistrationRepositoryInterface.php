<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface RegistrationRepositoryInterface
{
    public function createRegistration(Request $request);

    public function verifyEmail($email);

    public function updateCandidateProfileStep(Request $request,$id);

    public function downalodStepResume($id);

    public function directCandidateLogin($userid);
}
