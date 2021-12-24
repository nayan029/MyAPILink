<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface CandidateRepositoryInterface
{

    public function updateProfile(Request $request);

    public function getAllMessage($id, $reciverId);

    public function insertMessage(Request $request);

    public function getLastMessage(Request $request);

    public function getCandidateDetails($id);

    public function getCandidateApprovedImages($id);

    public function getReciverData($id);
}
