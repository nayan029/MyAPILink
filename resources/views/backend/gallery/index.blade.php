@extends('backend.master')
@section('css')
<!-- DataTables -->
<style>
    td span.status {
        vertical-align: middle !important;
    }
</style>
<link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">
<!--
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
-->
@endsection
@section('content')
<!-- Main content -->

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
<!-- 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
-->
<script>
    $(document).ready(function() {
        loadData();
    });

    $(document).on('click', '#search_Id', function() {
        $('#job-table').DataTable().destroy();
        loadData();
    });

    function loadData() {

        $('#job-table').DataTable({
            "processing": false,
            "serverSide": true,
            "searching": false,
            "ajax": {
                url: "{{ route('gallery.data') }}?",
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