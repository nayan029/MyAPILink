@extends('backend.master')
@section('css')
<!-- DataTables -->

<link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">
<!--
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
-->
@endsection
@section('content')
<!-- Main content -->
<div class="row">
		
			<div class="col-md-12">
                <form action="#" class="job_form">
				<div class="card">
					<div class="card-body">
						<div class="row">
                            
							<div class="col-md-3">
							  <div class="form-group">
								<label for="name">Job Title</label>
								<input class="form-control"  name="title" type="text" placeholder="Job Title" id="title">
							 </div>
							</div>
						
							<div class="col-md-3">
							  <div class="form-group">
								<label for="name">Type of Contract</label>
								<input class="form-control"  name="type_of_contract" type="text" placeholder="Type of Contract" id="type_of_contract">
							 </div>
							</div>
                            <!--
                            <div class="col-md-3">
							  <div class="form-group">
								<label for="name">Start Date</label>
								<input class="form-control"  name="contract_start_date" type="text" placeholder="Start Date" id="job_date">
							 </div>
							</div>
                            -->
                            <div class="col-md-3">
							  <div class="form-group">
								<label for="name">Min Experience</label>
								<input class="form-control"  name="minimum_experience" type="text" placeholder="Min Experience" id="minimum_experience">
							 </div>
							</div>

						</div>
						<div class="row">
							<div class="col-md-12">
								<button type="button" class="btn btn-primary" id="search_Id" >Filter</button>
								<!-- <input class="btn btn-warning" type="submit" name="Export" value="Export"> -->
								<a href="{{url('job')}}"> <button type="button" class="btn btn-default">Reset</button></a>
							</div>
						</div>
					</div>
				 </div>
                 </form>
			</div>
        
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            
            <!-- /.card-header -->
            <div class="card-body">
                <table id="job-table" class="table table-bordered table-hover" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Type of Contract</th>
                            <th>Start Date</th>
                            <th>Min. Experience</th>
                        </tr>
                    </thead>

                    <tbody>

                    </tbody>
                </table>
            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
@endsection
@section('script')
<!-- DataTables  & Plugins -->
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<!-- 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
-->
<script>
    $(document).ready(function() {
        /*
        $("#job_date").datepicker({
				dateFormat: "mm/dd/yyyy",
				defaultDate: new Date(),
		}).datepicker("setDate", '0');
        */
        loadData();
    });

    $(document).on('click','#search_Id',function() {
        $('#job-table').DataTable().destroy();
        loadData();
    });

    function loadData() {
        var formData = $('.job_form').serialize();
        $('#job-table').DataTable({
            "processing": true,
            "serverSide": true,
            "searching": false,
            "ajax": {
                url: "{{ route('job.data') }}?"+formData,
                method: "get"
            }
        });
    }
</script>
@endsection