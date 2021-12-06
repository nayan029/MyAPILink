@extends('backend.master')
@section('title') 
<title>ApiLink | User Details</title>
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
          <h3 class="card-title">User Detail</h3>

          
        </div>
        <div class="card-body" style="display: block;">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-12 order-2 order-md-1">
              <div class="row">
              
                <div class="col-12 col-sm-6">
                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>Name</b> <span class="widget-section">{{ucfirst($user->civility)}} {{ucfirst($user->first_name)}} {{ucfirst($user->last_name)}}</span>
                    </li>
                    <li class="list-group-item">
                    <b>Email</b> <span class="widget-section">{{$user->email != "" ? $user->email : '---'}}</span>
                    </li>
                    <li class="list-group-item">
                      <b>Phone</b> <span class="widget-section">{{$user->phone !="" ? $user->phone : '---'}}</span>
                    </li>
                    @if($user->user_type == 2)
                    <li class="list-group-item">
                      <b>Phone</b> <span class="widget-section">{{$user->establishment_management != "" ? $user->establishment_management : '---'}}</span>
                    </li>
                    <li class="list-group-item">
                      <b>Represent</b> <span class="widget-section">{{$user->represent != "" ? $user->represent : '---'}}</span>
                    </li>
                    <li class="list-group-item">
                      <b>Organization</b> <span class="widget-section">{{$user->organization != "" ? $user->organization : '---'}}</span>
                    </li>
                    <li class="list-group-item">
                      <b>No. of Establishments</b> <span class="widget-section">{{$user->number_of_establishments != "" ? $user->number_of_establishments : '---'}}</span>
                    </li>
                    <li class="list-group-item">
                      <b>Address</b> <span class="widget-section">{{$user->address != "" ? $user->address : '---'}}</span>
                    </li>
                    <li class="list-group-item">
                      <b>Postcode</b> <span class="widget-section">{{$user->postal_code != "" ? $user->postal_code : '---'}}</span>
                    </li>
                    <li class="list-group-item">
                      <b>City</b> <span class="widget-section">{{$user->city != "" ? $user->city : '---'}}</span>
                    </li>
                    
                    @endif
                  </ul>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
@endsection
@section('script')
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