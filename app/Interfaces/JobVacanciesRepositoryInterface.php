<?php


namespace App\Interfaces;

use Illuminate\Http\Request;

interface JobVacanciesRepositoryInterface{
    public function storePosts(Request $request);

    public function updatePosts(Request $request);

    public function deletePosts($id);

    public function getData(Request $request,$id);

    public function singlePostData($id);
}