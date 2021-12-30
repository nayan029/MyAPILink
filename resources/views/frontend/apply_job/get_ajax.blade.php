@foreach($showJobs as $data)

@php
$isApplyed = $data->applyJob!="" ? "disabled":"";
$createDate = date('d-m-Y',strtotime($data->created_at));
$now = date('d-m-Y');
$diff = strtotime($createDate) - strtotime($now);
$finalDays = abs(round($diff / 86400));
$saveJob = $data->savedJob!=null && count($data->savedJob)>0 ? $data->savedJob[0]->job_save : '';
@endphp
<div class="job-card">
    <div class="job-listing-flex">
        <h5 class="ml-2 mb-0 linkcolor">{{$data->title}}</h5>

        <button class="btn fav-btn mb-fav-btn save-fav" type="button" data-job="{{$data->id}}" data-user="{{$data->user_id}}" data-rowid="{{$data->id}}">
            <img id="saveicon{{$data->id}}" src="{{$saveJob=='1' ? asset('frontend/images/imgs-svg/book-mark-yellow.svg') : asset('frontend/images/bookmark.svg')}}" alt="bookmark image " class="b1 bookmark-img">
        </button>
    </div>


    <div class="row mr-minus9 mb-2">
        <div class="col-md-12">
            <div>
                <ul class="job-border-ul">
                    <li>
                        <p class="mb-0">Nom du poste : Directrice – Directeur de crèche
                        </p>
                    </li>
                    <li>
                        <p class="mb-0">Experience : {{$data->minimum_experience}}</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-8">
            <ul class="job-image-ul">
                <li>
                    <img src="{{asset('frontend/images/map.svg')}}" width="12px">
                    <p class="mb-0">46 rue La Martine 06400 NIce</p>
                </li>
                <li>
                    <img src="{{asset('frontend/images/icon1.svg')}}" width="12px">
                    <p class="mb-0">{{$data->minimum_gross_salary}} par an</p>
                </li>
                <li>
                    <img src="{{asset('frontend/images/calendar.svg')}}" width="12px">
                    <p class="mb-0">Publié il y a {{$finalDays}} jours</p>
                </li>
            </ul>
        </div>
        <div class="col-md-4 d-flex align-items-end">
            <div class="d-flex justify-content-end align-items-center resbtn-flex">
                <a href="{{route('job-details',$data->id)}}" class="btn btn-viewjob listviewjob">Voir l’offre</a>
                <button class="btn btn-apply listapply" data-toggle="modal" data-target="#establishment" onclick="openJobModal('{{$data->id}}','{{$data->user_id}}')" {{$isApplyed}}>Postuler</button>
            </div>
        </div>
    </div>
</div>
@endforeach

<input type="hidden" name="save_val" class="save_val" value="{{count($data->savedJob) > 0 ? $data->savedJob[0]->job_save:''}}">
<div class="custom-pagination pt-5 pb-4">
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            {{ $showJobs->appends(request()->except('page'))->links("pagination::bootstrap-4") }}
        </ul>
    </nav>
</div>