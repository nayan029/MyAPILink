<?php

namespace App\Repositories;

use Exception;
use Carbon\Carbon;
use App\Models\Job;
use App\Models\CandidateCv;
use Illuminate\Http\Request;
use App\Models\Establishment;
use App\Models\EstablishmentGallery;
use App\Http\Traits\ImageuploadTrait;
use App\Interfaces\EstablishmentRepositoryInterface;

class EstablishmentRepository implements EstablishmentRepositoryInterface
{
    use ImageuploadTrait;

    public function store(Request $request)
    {
        $documents = array();

        if ($request->hasFile('document')) {
            $files = $request->file('document');
            foreach ($files as $file) {
                $documents[] = $this->uploadImage($file, 'Establishment/document');
            }
        }
        $applied_pedagogy = implode(",",$request->applied_pedagogy);
        $document = implode(",", $documents);
        $storeData = $request->all();
        $storeData['applied_pedagogy'] = $applied_pedagogy;
        $storeData['document'] = $document;
        //  $storeData['more_infomation'] = $more_infomation;
        $storeData['user_id'] = auth()->guard('web')->user()->id;

        $establishment = Establishment::create($storeData);
        //     $more_infomation = "";
        //     if ($request->hasFile('more_infomation')) {
        //         $files = $request->file('more_infomation');
        //         foreach ($files as $file) {
        //             $more_infomation  = $this->uploadImage($file, 'Establishment/gallery');;
        //             $storeData['image'] = $more_infomation;
        //             $storeData['establishment_id'] = $establishment->id;
        //             $storeData['user_id'] = auth()->guard('web')->user()->id;
        //  EstablishmentGallery::create($storeData);
        //         }
        //     }

        return $establishment;
    }
    public function getSingleEstablishment($id)
    {
        return Establishment::where('user_id', auth()->guard('web')->user()->id)->where('id', $id)->firstOrFail();
    }

    public function getJobPostsData($id)
    {
        return Job::where('user_id', $id)->get();
    }

    public function update(Request $request, $id)
    {
        $applied_pedagogy = implode(",", $request->applied_pedagogy);

        $updateData = [
            'type_of_establishment' => $request->type_of_establishment,
            'own_of_our_structure' => $request->own_of_our_structure,
            'opening_date' => $request->opening_date,
            'year' => $request->year,
            'direction' => $request->direction,
            'effective' => $request->effective,
            'number_of_groups_and_age_groups' => $request->number_of_groups_and_age_groups,
            'accommodation_capacity' => $request->accommodation_capacity,
            'surface_area_of_the_establishment' => $request->surface_area_of_the_establishment,
            'garden' => $request->garden,
            'applied_pedagogy' => $applied_pedagogy,
            'our_values' => $request->our_values,


        ];

        if ($request->hasFile('document')) {
            $files = $request->file('document');
            foreach ($files as $file) {
                $documents[] = $this->uploadImage($file, 'Establishment/document');
            }
            $document = implode(",", $documents);
            $updateData['document'] = $document;
        }

        // if ($request->hasFile('more_infomation')) {
        //     $images = $this->getEstablishmentGallery($id);
        //     if (count($images) != 0) {
        //         foreach ($images as $image) {
        //             $galleryId = EstablishmentGallery::find($image->id);
        //             $galleryId->delete();
        //         }
        //     }

        //     $files = $request->file('more_infomation');
        //     foreach ($files as $file) {
        //         $more_infomation  = $this->uploadImage($file, 'Establishment/gallery');;
        //         $storeData['image'] = $more_infomation;
        //         $storeData['establishment_id'] = $id;
        //         $storeData['user_id'] = auth()->guard('web')->user()->id;
        //         EstablishmentGallery::create($storeData);
        //     }
        // }

        return Establishment::where('id', $id)->update($updateData);
    }
    public function uploadEstablishmentImage(Request $request)
    {
        $image = "";
        if ($request->hasFile('image')) {
            $image = $this->uploadImage($request->file('image'), 'Establishment/gallery');
        }

        $storeData['image'] = $image;
        $storeData['establishment_id'] = auth()->guard('web')->user()->id;


        return EstablishmentGallery::create($storeData);
    }
    public function uploadCv(Request $request)
    {
        $image = "";
        if ($request->hasFile('cv')) {
            $image = $this->uploadImage($request->file('cv'), 'candidate/cv');
        }

        $storeData['cv'] = $image;
        $storeData['user_id'] = auth()->guard('web')->user()->id;


        return CandidateCv::insert($storeData);
    }
    
    public function getEstablishmentGallery($id)
    {
        return EstablishmentGallery::where('establishment_id', $id)->where('deleted_at', NULL)->get();
    }

    public function getCandidateGallery()
    {
        $query = EstablishmentGallery::where('deleted_at', NULL)->where('created_by', auth()->guard('web')->user()->id)->get();
        return  $query;
    }
    public function deleteImage($id)
    {
        $id = EstablishmentGallery::find($id);
        $id->delete();
        return $id;
    }

    public function getPostsData($id)
    {
        $data['jobListing'] = Job::where('user_id', $id)->paginate(10);
        $data['remaining'] = Job::where('created_at', '>=', Carbon::now())->where('user_id', $id)->get();
        $data['deleted'] = Job::onlyTrashed()->where('user_id', $id)->get();
        return $data;
    }
}
