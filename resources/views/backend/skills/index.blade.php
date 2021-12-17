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
                <form action="#" method="post" id="skill_search_form">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                {!! Form::label('search_name', 'Name') !!}
                                    {!! Form::text('search_name', '', ['class' => 'form-control', 'placeholder' =>  'Search Name','id'=>'search_name']) !!}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                {!! Form::label('search_image', 'Image') !!}
                                    {!! Form::text('search_image', '', ['class' => 'form-control', 'placeholder' =>  'Search Image','id'=>'search_image']) !!}
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
                <h3 class="card-title float-left">{{__("messages.skillgroup.list")}}</h3>
                <a href="{{route('skill.create')}}" class="btn btn-block btn-success btn-flat btn-sm float-right" style="width: 14%;">{{__("messages.skillgroup.btnadd")}}</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="skill-table" class="table table-bordered table-hover" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>{{__("messages.name")}}</th>
                            <th>{{__("messages.image")}}</th>
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
    $(document).on('click','#searchData',function(){
                $('#skill-table').DataTable().destroy();
                 loadData();
        });

    function loadData() {
        var formData = $('#skill_search_form').serialize();     
        $('#skill-table').DataTable({
            "processing": false,
            "serverSide": true,
            "searching": false,
            "ajax": {   
                url: "{{ route('skill.data') }}?"+formData,
                method: "get"
            }
        });
    }

    
</script>



@endsection