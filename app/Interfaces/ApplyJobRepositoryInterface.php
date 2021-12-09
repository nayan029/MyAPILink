<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface ApplyJobRepositoryInterface
{
    public function getCandidateData();
    public function store(Request $request);
    public function getDocumentName(Request $request);
}
