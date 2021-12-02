<?php
namespace App\Interfaces;

use Illuminate\Http\Request;

interface EstablishmentRepositoryInterface
{
    public function store(Request $request);
    public function update(Request $request);
    
}