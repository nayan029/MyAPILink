<?php
namespace App\Interfaces;

use Illuminate\Http\Request;

interface ManagerRepositoryInterface
{
    public function StoreProfile(Request $request);
   
    public function updateProfile(Request $request);

    public function changePassword(Request $request);

    public function changeEmail(Request $request);

    public function getSingleUser($id);

    
    

    
    
}