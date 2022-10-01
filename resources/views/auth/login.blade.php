@extends("layouts.guest")
@section('title',__("Login"))

@section("content")
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="{{ asset('assets/theme/images/logo.svg') }}" alt="logo">
                  <!-- <img width="40" height="40" src="{{ asset('assets/project/images/logo.png') }}" alt="logo"> -->
                </div>
                <h4>Hello! let's get started</h4>
                <h6 class="font-weight-light">Sign in to continue.</h6>
                <form class="pt-3" action="{{ route('login') }}" method="POST">
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg" name="email" placeholder="Email" value="{{ old('email') }}">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
                  </div>

                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input">
                        Keep me signed in
                      </label>
                    </div>
                    <a href="#" class="auth-link text-black">Forgot password?</a>
                  </div>

                  <div class="mt-3">
                    <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../../index-2.html">SIGN IN</a>
                  </div>

                  <div class="my-2">
                    <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                      <i class="fab fa-facebook-f mr-2"></i>Connect using facebook
                    </button>
                  </div>
                  <div class="text-center mt-4 font-weight-light">
                    Don't have an account? <a href="{{ route('register') }}" class="text-primary">Create</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

@endsection