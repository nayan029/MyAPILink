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
                <form action="#" method="post" id="partner_search_form">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                {!! Form::label('search_image', 'Image') !!}
                                    {!! Form::text('search_image', '', ['class' => 'form-control', 'placeholder' =>  'Search Image','id'=>'search_image']) !!}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                {!! Form::label('search_link', 'Link') !!}
                                    {!! Form::text('search_link', '', ['class' => 'form-control', 'placeholder' =>  'Search Link','id'=>'search_link']) !!}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mt-4">
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
                <h3 class="card-title float-left">{{__("messages.partnergroup.list")}}</h3>
                <a href="{{route('partner.create')}}" class="btn btn-block btn-success btn-flat btn-sm float-right" style="width: 14%;">{{__("messages.partnergroup.btnadd")}}</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="partner-table" class="table table-bordered table-hover" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>{{__("messages.partnergroup.image")}}</th>
                            <th>{{__("messages.partnergroup.link")}}</th>
                            <th>{{__("messages.partnergroup.actions")}}</th>
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
    //delete
    $(document).on('click', '.delete_partner', function(e) {
        e.preventDefault();
        var id = $(this).data('delete');
        var token = $("meta[name='csrf-token']").attr("content");
        var deleteUrl = '{{ url("partner/destroy") }}?id=' + id;

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
                                $('#partner-table').DataTable().destroy();
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
                $('#partner-table').DataTable().destroy();
                 loadData();
        });
    function loadData() {
        var formData = $('#partner_search_form').serialize();            
        $('#partner-table').DataTable({
            "processing": false,
            "serverSide": true,
            "searching": false,
            "ajax": {
                url: "{{ route('partner.data') }}?"+formData,
                columns: [{
                    data: 'image',
                    name: 'link',
                    action: 'action',
                }],
                method: "get"
            }
        });
    }
</script>

@endsection