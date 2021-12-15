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

    function loadData() {
        $('#widget-table').DataTable({
            "processing": false,
            "serverSide": true,
            "searching": false,
            "ajax": {
                url: "{{ route('widget.data') }}",
                method: "get"
            }
        });
    }
</script>
@endsection