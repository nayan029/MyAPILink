@extends('backend.master')
@section('title') 
<title>ApiLink | Widget Details</title>
@section('css')
<style>
  span.widget-section {
    padding-left: 15px;
}
</style>
@endsection
@endsection
@section('content')
<section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">{{__("messages.widgetgroup.show")}}</h3>

          <div class="card-tools">
            <div class="text-center mt-0 mb-3">
              <a href="{{route('widget.edit',$widget->id)}}" class="btn btn-sm btn-primary" title="Edit">{{__("messages.widgetgroup.btnedit")}}</a>
              <a id="delete" href="javascript:void(0);" class="btn btn-sm btn-danger" title="Delete">{{__("messages.widgetgroup.btndelete")}}</a>
              <form action="{{ route('widget.destroy', $widget->id)}}" method="POST" id="deleteForm">
                  @csrf
                  <input name="_method" type="hidden" value="DELETE">           
              </form>
            </div>
          </div>
        </div>
        <div class="card-body" style="display: block;">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-12 order-2 order-md-1">
              <div class="row">
              
                <div class="col-12 col-sm-6">
                  <ul class="list-group list-group-unbordered">
                    <li class="list-group-item" >
                      <b>Title</b><span class="widget-section ml-3">{{$widget->title !="" ? $widget->title : 'N/A'}}</span>
                    </li>
                    <li class="list-group-item">
                    <b>Image</b><span class="widget-section"><img src="{{url($widget->image)}}" class="img-fluid" style="padding-right:7px" width="30px"></span>
                    </li>
                    <li class="list-group-item">
                      <b>Description</b><span class="widget-section">{!! $widget->description !!}</span>
                    </li>
                
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
@endsection
@section('script')
<!-- <script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css"> -->
<script type="text/javascript">

    $('#delete').click(function(event) {
        var form =  $("#deleteForm").closest("form");
        event.preventDefault();
        swal({
            title: 'Are you sure you want to delete this record?',
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
            form.submit();
            }
        });
    });

</script>
@endsection