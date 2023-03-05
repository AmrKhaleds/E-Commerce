{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
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
    <div class="tab-scontent" id="tab-sregister">
        <div class="card mb-0">
            <div class="card-body" style="padding: 40px;">
                <h3>{{ __('Register for an Account') }}</h3>
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
                <form id="register-form" name="register-form" class="row mb-0" action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="col-12 form-group">
                        <label for="register-form-name">{{ __('First Name:') }}</label>
                        <input type="text" id="register-form-name" name="firstName" value="" class="form-control" />
                    </div>

                    <div class="col-12 form-group">
                        <label for="register-form-name">{{ __('Last Name:') }}</label>
                        <input type="text" id="register-form-name" name="lastName" value="" class="form-control" />
                    </div>

                    <div class="col-12 form-group">
                        <label for="register-form-email">{{ __('Email Address:') }}</label>
                        <input type="text" id="register-form-email" name="email" value="" class="form-control" />
                    </div>

                    {{-- <div class="col-12 form-group">
                        <label for="register-form-username">Choose a Username:</label>
                        <input type="text" id="register-form-username" name="register-form-username" value="" class="form-control" />
                    </div> --}}

                    <div class="col-12 form-group">
                        <label for="register-form-phone">{{ __('Phone:') }}</label>
                        <input type="number" id="register-form-phone" name="phone" value="" class="form-control" />
                    </div>

                    <div class="col-12 form-group">
                        <label for="register-form-password">{{ __('Choose Password:') }}</label>
                        <input type="password" id="register-form-password" name="password" value="" class="form-control" />
                    </div>

                    <div class="col-12 form-group">
                        <label for="register-form-repassword">{{ __('Re-enter Password:') }}</label>
                        <input type="password" id="register-form-repassword" name="password_confirmation" value="" class="form-control" />
                    </div>

                    <div class="col-12 form-group">
                        <button class="button button-3d button-black m-0" id="register-form-submit" name="submit" value="register">{{ __('Register Now') }}</button>
                        <a style="" href="{{ route('login') }}">{{ __('Or Login') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection