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
                <form action="#" method="post" id="widgets_search_form">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                {!! Form::label('search_title', 'Title') !!}
                                    {!! Form::text('search_title', '', ['class' => 'form-control', 'placeholder' =>  'Search Title','id'=>'search_title']) !!}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                {!! Form::label('search_slug', 'Widget') !!}
                                    {!! Form::text('search_slug', '', ['class' => 'form-control', 'placeholder' =>  'Search Widget','id'=>'search_slug']) !!}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                            {!! Form::label('search_image', 'Image') !!}
                                    {!! Form::text('search_image', '', ['class' => 'form-control', 'placeholder' =>  'Search Image','id'=>'search_image']) !!}
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
                <h3 class="card-title float-left">{{__("messages.widgetgroup.list")}}</h3>
                <a href="{{route('widget.create')}}" class="btn btn-block btn-success btn-flat btn-sm float-right" style="width: 12%;">{{__("messages.widgetgroup.btnadd")}}</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="widget-table" class="table table-bordered table-hover" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>{{__("messages.widgetgroup.title")}}</th>
                            <th>{{__("messages.widgetgroup.widget")}}</th>
                            <th>{{__("messages.widgetgroup.image")}}</th>
                            <th>{{__("messages.widgetgroup.description")}}</th>
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
                $('#widget-table').DataTable().destroy();
                 loadData();
        });
    function loadData() {
        var formData = $('#widgets_search_form').serialize();            
        $('#widget-table').DataTable({
            "processing": false,
            "serverSide": true,
            "searching": false,
            "ajax": {
                url: "{{route('widget.data')}}?"+formData,
                method: "get"
            }
        });
    }
</script>
@endsection