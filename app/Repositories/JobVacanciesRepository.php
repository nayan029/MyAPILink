<?php

namespace App\Repositories;

use App\Interfaces\JobVacanciesRepositoryInterface;
use App\Models\JobVacancy;
use Illuminate\Http\Request;

class JobVacanciesRepository implements JobVacanciesRepositoryInterface
{
    public function storePosts(Request $request)
    {
        
        $request->merge([ 
            'contract_through' => implode(',', (array) $request->get('contract_through'))
        ]);
        $data = $request->all();

        return  JobVacancy::create($data);
    }

    public function updatePosts(Request $request)
    {
        
    }
    public function deletePosts($id)
    {
        
    }
    public function getData(Request $request,$id)
    {
        
    }

    public function singlePostData($id)
    {
        return JobVacancy::findorfail($id);
    }

}