<?php

namespace App\Repositories;

use App\Interfaces\EstablishmentRepositoryInterface;
use App\Models\EmailTemplate;
use App\Models\Establishment;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Http\Traits\ImageUploadTrait;


class EstablishmentRepository implements EstablishmentRepositoryInterface
{
    use ImageUploadTrait;

    public function store(Request $request)
    {
        $document = "";
        if ($request->hasFile('document')) {
            $document = $this->uploadImage($request->file('document'), 'Establishment/document');
        }
        $more_infomation = "";
        if ($request->hasFile('more_infomation')) {
            $more_infomation = $this->uploadImage($request->file('more_infomation'), 'Establishment/more_infomation');
        }
        $storeData = $request->all();
        $storeData['document'] = $document;
        $storeData['more_infomation'] = $more_infomation;
        $storeData['created_by'] =auth()->guard('web')->user()->id;


        return Establishment::create($storeData);
      
    }
    public function update(Request $request)
    {
        
    }
  
}
