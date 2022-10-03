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
                <h4>{{ __("Hello! let's get started") }}</h4>
                <h6 class="font-weight-light">{{ __("Sign in to continue.") }}</h6>
                <form class="pt-3" action="{{ route('login') }}" method="POST">
                  @csrf
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg" name="email" placeholder="Email" value="{{ old('email') }}">
                    @if($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
                    @if($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                  </div>

                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input">
                        {{ __("Keep me signed in") }}
                      </label>
                    </div>
                    <a href="#" class="auth-link text-black">{{ __("Forgot password?") }}</a>
                  </div>

                  <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">{{ __("SIGN IN") }}</button>
                  </div>
                </form>

                <div class="my-2">
                  <button type="button" class="btn btn-block btn-facebook p-3">
                    <i class="fab fa-facebook-f mr-2"></i>{{ __("Connect using facebook") }}
                  </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  {{ __("Don't have an account?") }} <a href="{{ route('register') }}" class="text-primary">{{ __("Create") }}</a>
                </div>  
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

@endsection