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
            <div class="card-body">
                <form action="#" method="post" id="contact-us_search_form">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                {!! Form::label('search_firstname', 'FirstName') !!}
                                    {!! Form::text('search_firstname', '', ['class' => 'form-control', 'placeholder' =>  'Search FirstName','id'=>'search_firstname']) !!}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                {!! Form::label('search_lastname', 'LastName') !!}
                                    {!! Form::text('search_lastname', '', ['class' => 'form-control', 'placeholder' =>  'Search Widget','id'=>'search_lastname']) !!}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                            {!! Form::label('search_email', 'Email') !!}
                                    {!! Form::text('search_email', '', ['class' => 'form-control', 'placeholder' =>  'Search Email','id'=>'search_email']) !!}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                            {!! Form::label('search_description','Description') !!}
                            {!! Form::text('search_description','', ['class' => 'form-control', 'multiple' => false,'placeholder' => 'Search Description']) !!}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mt-2">
                                <button type="button" id="searchData" class="btn btn-success">{{__("messages.search")}}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="col-12">
        <div class="card">
            <div class="card-header">
            <h3 class="card-title float-left">{{__("messages.list")}}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="contact-us-table" class="table table-bordered table-hover" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>{{__("messages.firstname")}}</th>
                            <th>{{__("messages.lastname")}}</th>
                            <th>{{__("messages.email")}}</th>
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
    $(document).on('click','#searchData',function(){
                $('#contact-us-table').DataTable().destroy();
                 loadData();
        });

    function loadData() {
        var formData = $('#contact-us_search_form').serialize();            
        $('#contact-us-table').DataTable({
            "processing": false,
            "serverSide": true,
            "searching": false,
            "ajax": {
                url: "{{ route('contact.data')}}?"+formData,
                method: "get"
            }
        });
    }
</script>
@endsection