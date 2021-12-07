<?php

namespace App\Repositories;

use App\Http\Traits\ImageuploadTrait;
use App\Interfaces\JobRepositoryInterface;
use App\Models\Job;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class JobRepository implements JobRepositoryInterface
{
    use ImageuploadTrait;

    

    public function getJobdata(Request $request)
    {

        $draw = $request->query('draw', 0);
        $start = $request->query('start', 0);
        $length = $request->query('length', 25);
        $order = $request->query('order', array(1, 'asc'));


        $sortcolumns = array(
            0 => 'job.title',
            1 => 'job.type_of_contract',
            2 => 'job.contract_start_date',
            3 => 'job.minimum_experience',

        );

        $query = Job::select('*');
        if($request->query('title') != ''){
            $query->whereRaw('title LIKE "%'.$request->query('title').'%"');
        }

        if($request->query('type_of_contract') != ''){
            $query->whereRaw('type_of_contract LIKE "%'.$request->query('type_of_contract').'%"');
        }
        /*
        if($request->query('contract_start_date') != ''){
            $query->where('contract_start_date',date('Y-m-d',strtotime($request->query('contract_start_date'))));
        }
        */
        if($request->query('minimum_experience') != ''){
            $query->whereRaw('minimum_experience LIKE "%'.$request->query('minimum_experience').'%"');
        }

        $recordstotal = $query->count();
        $sortColumnName = $sortcolumns[$order[0]['column']];

        $query->orderBy($sortColumnName, $order[0]['dir'])
            ->take($length)
            ->skip($start);

        $json = array(
            'draw' => $draw,
            'recordsTotal' => $recordstotal,
            'recordsFiltered' => $recordstotal,
            'data' => [],
        );

        $jobs = $query->orderBy('created_at', 'desc')->get();
        foreach ($jobs as $job) {
            $url = route("job.show", $job->id);
            $titleAction = "<a href='" . $url . "'>" . $job->title . "</a>";
            
            $json['data'][] = [
                $titleAction,
                $job->type_of_contract,
                date('m/d/Y',strtotime($job->contract_start_date)),
                $job->minimum_experience,
            ];
        }
        return $json;
    }

    public function getSingleJobData($id)
    {
        return Job::findorfail($id);
    }
}