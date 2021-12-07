@extends('backend.master')
@section('title') 
<title>ApiLink | Job Details</title>
@section('css')
<style>
  span.widget-section {
    padding-left: 15px;
}
</style>
@endsection
@endsection
@section('content')
<section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Job Detail</h3>

          
        </div>
        <div class="card-body" style="display: block;">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-12 order-2 order-md-1">
              <div class="row">
              
                <div class="col-12 col-sm-6">
                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>Title</b> <span class="widget-section">{{ucfirst($job->title)}}</span>
                    </li>
                    <li class="list-group-item">
                    <b>Address</b> <span class="widget-section">{{$job->address != "" ? $job->address : '---'}}</span>
                    </li>
                    <li class="list-group-item">
                      <b>ZipCode</b> <span class="widget-section">{{$job->zip_code !="" ? $job->zip_code : '---'}}</span>
                    </li>
                    
                    <li class="list-group-item">
                      <b>Type of Contract</b> <span class="widget-section">{{$job->type_of_contract != "" ? $job->type_of_contract : '---'}}</span>
                    </li>
                    <li class="list-group-item">
                      <b>Contract Length</b> <span class="widget-section">{{$job->contract_length != "" ? $job->contract_length : '---'}}</span>
                    </li>
                    <li class="list-group-item">
                      <b>Type of employment</b> <span class="widget-section">{{$job->type_of_employment != "" ? $job->type_of_employment : '---'}}</span>
                    </li>
                    <li class="list-group-item">
                      <b>Start Date</b> <span class="widget-section">{{$job->contract_start_date != "" ? date("m/d/Y",strtotime($job->contract_start_date)) : '---'}}</span>
                    </li>
                    <li class="list-group-item">
                      <b>Minimum Gross Salary</b> <span class="widget-section">{{$job->minimum_gross_salary != "" ? $job->minimum_gross_salary : '---'}}</span>
                    </li>
                    <li class="list-group-item">
                      <b>Maximum Gross Salary</b> <span class="widget-section">{{$job->maximum_gross_salary != "" ? $job->maximum_gross_salary : '---'}}</span>
                    </li>
                    <li class="list-group-item">
                      <b>Min. Experience</b> <span class="widget-section">{{$job->minimum_experience != "" ? $job->minimum_experience : '---'}}</span>
                    </li>
                    
                    
                  </ul>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
@endsection
@section('script')
<script type="text/javascript">

    $('#delete').click(function(event) {
        var form =  $("#deleteForm").closest("form");
        event.preventDefault();
        swal({
            title: 'Are you sure you want to delete this record?',
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
            form.submit();
            }
        });
    });

</script>
@endsection