<?php 

namespace App\Interfaces;

use Illuminate\Http\Request;

interface UserRepositoryInterface
{
    public function getUserdata(Request $request);
    
    public function getSingleUserData($id);
}