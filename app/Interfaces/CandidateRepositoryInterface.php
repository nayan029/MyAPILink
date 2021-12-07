<?php
namespace App\Interfaces;

use Illuminate\Http\Request;

interface CandidateRepositoryInterface
{
   
    public function updateProfile(Request $request);
}