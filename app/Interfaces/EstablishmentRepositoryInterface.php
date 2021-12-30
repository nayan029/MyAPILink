<?php
namespace App\Interfaces;

use Illuminate\Http\Request;

interface EstablishmentRepositoryInterface
{
    public function store(Request $request);
    public function update(Request $request,$id);
    public function getSingleEstablishment($id);
    public function uploadEstablishmentImage(Request $request);
    public function getEstablishmentGallery($id);
    public function deleteImage($id);
    public function getPostsData($id);
    public function getCandidateGallery();
}