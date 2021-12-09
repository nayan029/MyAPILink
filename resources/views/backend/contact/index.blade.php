@extends('backend.master')
@section('css')
<!-- DataTables -->
<link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection
@section('content')
<!-- Main content -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">

            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="contact-us-table" class="table table-bordered table-hover" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>
                                {{__("messages.id")}}
                            </th>
                            <th>{{__("messages.firstname")}}</th>
                            <th>{{__("messages.lastname")}}</th>
                            <th>{{__("messages.description")}}</th>
                            <th>{{__("messages.actions")}}</th>
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
    $(document).on('click', '.delete_contact', function(e) {
        e.preventDefault();
        var id = $(this).data('delete');
        var token = $("meta[name='csrf-token']").attr("content");
        var deleteUrl = '{{ url("contact/destroy") }}?id=' + id;

        swal({
                title: 'Are you sure you want to delete this record?',
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        type: "DELETE",
                        url: deleteUrl,
                        data: {
                            "_token": token,
                        },
                        success: function(response) {
                            if (response.status == true) {
                                $('#contact-us-table').DataTable().destroy();
                                loadData();
                                toastr.success(response.msg);
                            }
                        }
                    });
                }
            });
    });
    $(document).ready(function() {
        loadData();
    });

    function loadData() {
        $('#contact-us-table').DataTable({
            "processing": true,
            "serverSide": true,
            "searching": false,
            "ajax": {
                url: "{{ route('contact.data') }}",
                method: "get"
            }
        });
    }
</script>
@endsection