@extends('backend.master')
@section('css')
<!-- DataTables -->
<link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection
@section('content')
<!-- Main content -->
<div class="row">
		
			<div class="col-12">
                <form action="#" class="user_form">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-4">
							  <div class="form-group">
								<label for="name">{{__("messages.usergroup.name")}}</label>
								<input class="form-control" value="" name="name" type="text" placeholder="Name" id="name">
							 </div>
							</div>
						
							<div class="col-md-4">
							  <div class="form-group">
								<label for="name">{{__("messages.usergroup.email")}}</label>
								<input class="form-control" value="" name="email" type="text" placeholder="Email" id="email">
							 </div>
							</div>
						
							<div class="col-md-4">
							  <div class="form-group">
								<label for="name">{{__("messages.usergroup.phone")}}</label>
								<input class="form-control" value="" name="mobile" type="text" placeholder="Mobile" id="phone">
							 </div>
							</div>

						</div>
						<div class="row">
							<div class="col-md-12">
								<button type="button" class="btn btn-primary" id="search_Id" >	{{__("messages.usergroup.filter")}}</button>
								<!-- <input class="btn btn-warning" type="submit" name="Export" value="Export"> -->
								<a href="{{url('user')}}"> <button type="button" class="btn btn-default">{{__("messages.usergroup.reset")}}</button></a>
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
        <div class="card-header">
                <h3 class="card-title float-left">{{__("messages.users")}}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="User-table" class="table table-bordered table-hover" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>{{__("messages.usergroup.name")}}</th>
                            <th>{{__("messages.usergroup.email")}}</th>
                            <th>{{__("messages.usergroup.phone")}}</th>
                            <th>{{__("messages.usergroup.type")}}</th>
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
<script>
    $(document).ready(function() {
        loadData();
    });

    $(document).on('click','#search_Id',function() {
        $('#User-table').DataTable().destroy();
        loadData();
    });
    function loadData() {
        var formData = $('.user_form').serialize();
        $('#User-table').DataTable({
            "processing": false,
            "serverSide": true,
            "searching": false,
            "ajax": {
                url: "{{ url('getUserData') }}?"+formData,
                method: "get"
            }
        });
    }

    function filterData(){
        loadData();
    }
</script>
@endsection