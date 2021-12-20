<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

  <style>
    .card-primary.card-outline {
      border-top: 3px solid #74bfd4;
    }

    .btn-primary {
      color: #fff;
      background-color: #19c3f3;
      border-color: #19c3f3;
      box-shadow: none;
    }

    .btn-warning {
      color: #1f2d3d;
      background-color: #e9a523;
      border-color: #e9a523;
      box-shadow: none;
    }
  </style>
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="javascript:void(0);" class="h1"><img src="{{asset('/frontend/logo_dark.png')}}" style="max-width: 50%;height: auto;"></a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="{{route('admin.auth')}}" method="post" id="logindata">
          @csrf
          <div class="input-group mb-2">
            <input type="email" name="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-2">
            <input type="password" name="password"  id="password" class="form-control" placeholder="Password">
            <span class="input-group-btn" id="eyeSlash">
              <button class="btn btn-default reveal" onclick="visibility3()" type="button"><i class="fa fa-eye-slash" aria-hidden="true"></i></button>
            </span> <span class="input-group-btn" id="eyeShow" style="display: none;">
              <button class="btn btn-default reveal" onclick="visibility3()" type="button"><i class="fa fa-eye" aria-hidden="true"></i></button>
            </span>
            <div class="input-group-append">
            </div>
          </div>
          <!-- /.col -->
          <div class="row">
            <div class="col-md-6">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <div class="col-md-6">
              <a href="{{route('forgot.password')}}" class="btn btn-warning">Forgot Password ?</a>
            </div>
          </div>

          <!-- /.col -->
      </div>
      </form>


    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
  {!! $validator->selector('#logindata') !!}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

  <script>
    $(function() {

      @if(Session::has('success'))
      toastr.success("{{ Session::get('success') }}");
      @endif

      @if(Session::has('info'))
      toastr.info("{{ Session::get('info') }}");
      @endif

      @if(Session::has('warning'))
      toastr.warning("{{ Session::get('warning') }}");
      @endif

      @if(Session::has('error'))
      toastr.error("{{ Session::get('error') }}");
      @endif
    });
  </script>
<script>
  
function visibility3() {
  var x = document.getElementById('password');
  if (x.type === 'password') {
    x.type = "text";
    $('#eyeShow').show();
    $('#eyeSlash').hide();
  }else {
    x.type = "password";
    $('#eyeShow').hide();
    $('#eyeSlash').show();
  }
}
function myFunction() {
  var x = document.getElementById("*passwordbox-id*");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

</body>

</html>