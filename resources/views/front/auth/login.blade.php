{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
@extends('layouts.front.auth')
@section('account')
    <div class="tab-content" id="tab-login">
        <div class="card mb-0">
            <div class="card-body" style="padding: 40px;">
                <form id="login-form" name="login-form" class="mb-0" action="{{ route('login') }}" method="POST">
                    @csrf
                    <h3>Login to your Account</h3>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul style="padding: 0 25px;">
                                @foreach ($errors->all() as $error)
                                <li>
                                    {{ $error }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-12 form-group">
                            <label for="login-form-username">Email:</label>
                            <input type="text" id="login-form-username" name="email" value="" class="form-control" />
                        </div>

                        <div class="col-12 form-group">
                            <label for="login-form-password">Password:</label>
                            <input type="password" id="login-form-password" name="password" value="" class="form-control" />
                        </div>

                        <div class="col-12 form-group">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                        <div class="col-12 form-group">
                            <button class="button button-3d button-black m-0" id="login-form-submit" name="submit" value="login" >Login</button>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link float-end" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                        <hr>
                        <div class="col-12 form-group">
                            <a style="border: 2px solid #111;
                            background-color: #111;
                            padding: 8px 22px;
                            color: #fff;
                            /* margin: 0 auto; */
                            /* width: auto; */
                            /* width: 198px; */
                            display: flex;
                            justify-content: center;
                            align-items: center;" href="{{ route('register') }}">Create New Account</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection