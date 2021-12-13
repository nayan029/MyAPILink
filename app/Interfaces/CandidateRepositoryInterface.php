<?php
namespace App\Interfaces;

use Illuminate\Http\Request;

interface CandidateRepositoryInterface
{
   
    public function updateProfile(Request $request);

    public function getAllMessage($id);

    public function insertMessage(Request $request);
}