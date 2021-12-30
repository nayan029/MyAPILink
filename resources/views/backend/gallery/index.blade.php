@extends('backend.master')
@section('css')
<!-- DataTables -->
<style>
    td span.status {
        vertical-align: middle !important;
    }
</style>
<link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">

<link rel="stylesheet" href="{{asset('admin/plugins/daterangepicker/daterangepicker.css')}}">
<!--
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
-->
@endsection
@section('content')
<!-- Main content -->
<div class="row">
		
			<div class="col-12">
                <form action="#" class="gallery_form">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<!-- <div class="col-md-4">
							  <div class="form-group">
								<label for="name">{{__("messages.gallerygroup.datetime")}}</label>
								<input class="form-control" value="" name="datetime" type="text" placeholder="Name" id="name">
							 </div>
							</div> -->

                            <div class="col-md-4">
                                <label for="name">{{__("messages.gallerygroup.datetime")}}</label>
                                <input type="text" class="form-control float-right" id="datetime" name="datetime" placeholder="DD/MM/YYYY - DD/MM/YYYY">
                            </div>
						
							<div class="col-md-4">
							  <div class="form-group">
								<label for="name">{{__("messages.gallerygroup.status")}}</label>
                                <select name="gallerystatus" id="gallerystatus" class="form-control">
                                    <option value="">Select Status</option>
                                    <option value="accept">Accept</option>
                                    <option value="pending">Pending</option>
                                    <option value="reject">Reject</option>                                
                                </select>
							</div>
							</div>
                            <div class="col-md-4">
							  <div class="form-group" style="margin-bottom: 0px;margin-top: 32px;">
                              <button type="button" class="btn btn-primary" id="search_Id">	{{__("messages.gallerygroup.filter")}}</button>
                              <a href="{{url('gallery')}}"> <button type="button" class="btn btn-default">{{__("messages.gallerygroup.reset")}}</button></a>
							 </div>
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
                <h3 class="card-title float-left">{{__("messages.gallerygroup.list")}}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="job-table" class="table table-bordered table-hover" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>{{__("messages.gallerygroup.image")}}</th>
                            <th>{{__("messages.gallerygroup.status")}}</th>
                            <th>{{__("messages.gallerygroup.datetime")}}</th>
                            <th>{{__("messages.gallerygroup.uploadby")}}</th>
                            <th>{{__("messages.gallerygroup.action")}}</th>
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
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="{{asset('admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
-->

<script type="text/javascript">
     $('#datetime').daterangepicker({
        autoUpdateInput: false,
        maxDate: new Date(),
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
            format: 'MM/DD/YYYY',
            cancelLabel: 'Clear'
      },
    });
    $('input[name="datetime"]').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));
            $("#date_start").val(picker.startDate.format('DD/MM/YYYY'));
            $("#date_end").val(picker.endDate.format('DD/MM/YYYY'));
        });
    $('#datetime').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
    });

</script>
<script>
    $(document).ready(function() {
        loadData();
    });

    $(document).on('click', '#search_Id', function() {
        $('#job-table').DataTable().destroy();
        loadData();
    });

    function loadData() {
        var formData = $('.gallery_form').serialize();
        $('#job-table').DataTable({
            "columnDefs": [{
                "targets": [0,3,4], //first column / numbering column
                "orderable": false, //set not orderable
                "bSortable": true //set not orderable
            }, ],
            "processing": false,
            "serverSide": true,
            "searching": false,
            "ajax": {
                url: "{{ url('getGalleryData') }}?"+formData,
                method: "get"
            }
        });
    }

    function openSwal(status, id) {
        if (status == 1) {
            var message = "Are you want to Approve?";
        } else if (status == 2) {
            var message = "Are you want to Reject?";
        }
        Swal.fire({
            title: message,
            showDenyButton: true,
            confirmButtonText: 'Yes',
            denyButtonText: 'No',

        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "{{ route('gallery.update-status') }}",
                    method: "GET",
                    data: {
                        id: id,
                        status: status,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        if (response) {
                            toastr.success('Successfully Updated');
                            location.reload();
                        }
                    }
                });
            }
        });
    }
</script>
@endsection