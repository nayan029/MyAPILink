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
<script>
    $(document).ready(function() {
        loadData();
    });

    function loadData() {
        $('#job-table').DataTable({
            "processing": true,
            "serverSide": true,
            "searching": false,
            "ajax": {
                url: "{{ route('job.data') }}",
                method: "get"
            }
        });
    }
</script>
@endsection