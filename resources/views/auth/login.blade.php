<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title> Admin - Galaxy Coupon</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('backend/assets/css/app.min.css')}}">
  <link rel="stylesheet" href="{{ asset('backend/assets/bundles/bootstrap-social/bootstrap-social.css')}}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('backend/assets/css/components.css')}}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{ asset('backend/assets/css/custom.css')}}">
  <link rel='shortcut icon' type='image/x-icon'  href='{{ asset('backend/images/uploads/' . $site_content->favicon_logo) }}' />
</head>

<body>
    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">

        <div class="row">
           
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header d-flex justify-content-center  ">
               <img alt="image" width="210px"  src="{{ asset('backend/assets/img/backend_logo.png')}}"
                             />
              </div>
              <div class="card-body">
                <form method="POST" action="{{ url('/admin/login') }}" class="needs-validation" novalidate="">
                       @csrf
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>
               <div class="form-group">
  <div class="d-block">
    <label for="password" class="control-label">Password</label>
  </div>
  <div class="input-group">
    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
    <div class="input-group-append">
      <button class="btn btn-primary" type="button" id="togglePassword">
        <i class="fas fa-eye"></i>
      </button>
    </div>
  </div>
  <div class="invalid-feedback">
    please fill in your password
  </div>
</div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

<script>
  const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#password');

  togglePassword.addEventListener('click', function () {
    // toggle type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);

    // toggle eye / eye-slash icon
    this.querySelector('i').classList.toggle('fa-eye');
    this.querySelector('i').classList.toggle('fa-eye-slash');
  });
</script>
  <!-- General JS Scripts -->
  <script src="{{ asset('backend/assets/js/app.min.js')}}"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="{{ asset('backend/assets/js/scripts.js')}}"></script>
  <!-- Custom JS File -->
  <script src="{{ asset('backend/assets/js/custom.js')}}"></script>
</body>

</html>