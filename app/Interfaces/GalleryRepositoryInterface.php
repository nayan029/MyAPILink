<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface GalleryRepositoryInterface
{
    public function getGallerydata(Request $request);
    public function getUpdatedStatus(Request $request);
}
