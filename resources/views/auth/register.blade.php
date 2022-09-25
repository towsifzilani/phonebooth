@extends("layouts.guest")
@section('title',__("Register"))

@section("content")

<div class="login-form-bg h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-75">
            <div class="col-xl-6">
                <div class="form-input-content">
                    <a href="{{ url('') }}" class="text-center"><img width="150" height="150" src="{{ asset('assets/project/images/logo.png') }}"></a>
                    <div class="card login-form mb-0">
                        <div class="card-body pt-5">
                            <!-- <a class="text-center" href="{{ url('') }}"> <h4>{{ config('app.name') }}</h4></a> -->
                            <form class="mt-3 mb-5 login-input" action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" name="email" id="email" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confrim Password" required>
                                </div>
                                <button class="btn login-form__btn submit w-100">{{ __("Sign up") }}</button>
                            </form>
                                <p class="mt-5 login-form__footer">Have account <a href="{{ route('login') }}" class="text-primary">Sign in </a> now</p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection