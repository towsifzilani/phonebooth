@extends("layouts.guest")
@section('title',__("Login"))

@section("content")
    <div class="login-form-bg h-75">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <a href="{{ url('') }}" class="text-center"><img width="150" height="150" src="{{ asset('assets/project/images/logo.png') }}"></a>
                        <div class="card login-form mb-0">
                            <div class="card-body">
                                <!-- <a class="text-center" href="index.html"> <h4>{{ config('app.name') }}</h4></a> -->
        
                                <form class="mt-3 mb-5 login-input" action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                    <button class="btn login-form__btn submit w-100">{{ __("Sign In") }}</button>
                                </form>
                                <p class="mt-5 login-form__footer">{{ __('Dont have account?') }} <a href="{{ route('register') }}" class="text-primary">{{ __("Sign Up") }}</a> now</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection