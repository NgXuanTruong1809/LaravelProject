<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.header')
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>LUXURY</b>SHOP</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Đăng nhập để truy cập trang web</p>

      <form action="/admin/users/login/store" method="post">
        @include('admin.errormessage')
        <div class="input-group mb-3">
          <input type="email" name = "email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name = "password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" name = "remember" id="remember">
              <label for="remember">
                Ghi nhớ
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
         <!-- tokken sinh ra khi co mot form moi -->
        @csrf 
      </form>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

@include('admin.footer')
</body>
</html>
