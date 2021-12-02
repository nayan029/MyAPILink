<?php
namespace App\Interfaces;

use Illuminate\Http\Request;

interface ManagerRepositoryInterface
{
    public function StoreProfile(Request $request);
    public function updateProfile(Request $request);
    
}