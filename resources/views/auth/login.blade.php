<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ABC | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('/admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/admin/dist/css/adminlte.min.css') }}">
  <!-- Taostr style -->
  <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="{{ url('/') }}" class="h1"><b>ABC</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      {{-- <form action="{{ route('login.post') }}" method="post"> --}}
      <form action="" method="post">
        @csrf
        <div class="input-group mb-3">
          <input id="email" type="email" class="form-control" value="{{ old('email') }}" name="email" tabindex="1" required autofocus>
          @if($errors->has('email'))
              <div class="invalid-feedback">
                  {{ $errors->first('email') }}
              </div>
          @endif
          {{-- <input type="email" class="form-control" placeholder="Email"> --}}
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
          @if($errors->has('password'))
              <div class="invalid-feedback">
                  {{ $errors->first('password') }}
              </div>
          @endif
          {{-- <input type="password" class="form-control" placeholder="Password"> --}}
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" name="remember" class="form-control" tabindex="3" id="remember">
              <label for="remember">Remember Me</label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      {{-- <div class="social-auth-links text-center mt-2 mb-3">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> --}}
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="{{ url('/forgot-password') }}">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="{{ url('/register') }}" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('/admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/admin/dist/js/adminlte.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/toastr.min.js') }}"></script>
@include('partials.message')

</body>
</html>