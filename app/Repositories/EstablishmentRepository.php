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

        // $storeData = [
        //     'type_of_establishment' => $request->type_of_establishment,
        //     'own_of_our_structure' => $request->own_of_our_structure,
        //     'opening_date' => $request->opening_date,
        //     'year' => $request->year,
        //     'direction' => $request->direction,
        //     'effective' => $request->effective,
        //     'number_of_groups_and_age_groups' => $request->number_of_groups_and_age_groups,
        //     'accommodation_capacity' => $request->accommodation_capacity,
        //     'surface_area_of_the_establishment' => $request->surface_area_of_the_establishment,
        //     'garden' => $request->garden,
        //     'applied_pedagogy' => $request->applied_pedagogy,
        //     'our_values' => $request->our_values,
        //     'document' => $request->document,
        //     'more_infomation' => $request->more_infomation,
        //     'created_by' => auth()->guard('web')->user()->id,
            
        // ];

        return Establishment::create($storeData);
      
    }
    public function update(Request $request)
    {
        
    }
  
}
