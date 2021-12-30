<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\GalleryRepositoryInterface;
use App\Models\EstablishmentGallery;

class GalleryController extends Controller
{
    protected $galleryRepository = "";

    public function __construct(GalleryRepositoryInterface $galleryRepository)
    {
        $this->galleryRepository = $galleryRepository;
    }
    public function index(Request $request)
    {
        return view('backend.gallery.index');
    }
    public function getAjaxData(Request $request)
    {
        return $this->galleryRepository->getGallerydata($request);
    }
    public function getUpdateStatus(Request $request)
    {
        return $this->galleryRepository->getUpdatedStatus($request);
    }
}
