@extends("layouts.guest")
@section('title',__("Register"))

@section("content") 

<div class="container-scroller">
  <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth">
      <div class="row w-100">
        <div class="col-lg-4 mx-auto">
          <div class="auth-form-light text-left p-5">
            <div class="brand-logo">
              <img src="{{ asset('assets/theme/images/logo.svg') }}" alt="logo">
            </div>
            <h4>New here?</h4>
            <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
            <form class="pt-3" action="{{ route('register') }}" method="POST">
              <div class="form-group">
                <input type="text" class="form-control form-control-lg" name="name" id="name" placeholder="Name" required>
              </div>
              <div class="form-group">
                <input type="email" class="form-control form-control-lg" placeholder="Email" name="email" id="email" required>
              </div>
              <div class="form-group">
                <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="Password" required>
              </div>
              <div class="form-group">
                <input type="password" class="form-control form-control-lg" name="password_confirmation" id="password_confirmation" placeholder="Confrim Password" required>
              </div>
              <div class="mb-4">
                <div class="form-check">
                  <label class="form-check-label text-muted">
                    <input type="checkbox" class="form-check-input">
                    I agree to all Terms & Conditions
                  </label>
                </div>
              </div>
              <div class="mt-3">
                <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../../index-2.html">SIGN UP</a>
              </div>
              <div class="text-center mt-4 font-weight-light">
                Already have an account? <a href="{{ route('login') }}" class="text-primary">Login</a>
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