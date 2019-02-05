@extends('layouts.app')



@section('header')

<section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(http://127.0.0.1:8000/img/register.jpg);width:100%;height:950px;">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-12 col-md-10">
                <div class="hero-content">

                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <br><br>
                                        <div class="card" style="background-image: url(http://127.0.0.1:8000/img/registernew.png);width:700px;height:750px;opacity: 0.7;filter: alpha(opacity=70);margin-top:20%">

            
                                            <div class="card-header">{{ __('Reset Password') }}</div>

                                            <div class="card-body">
                                                <form method="POST" action="{{ route('password.request') }}" aria-label="{{ __('Reset Password') }}">
                                                 @csrf

                                                    <input type="hidden" name="token" value="{{ $token }}">

                                                        <div class="form-group row">
                                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                                            <div class="col-md-6">
                                                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                                                                @if ($errors->has('email'))
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('email') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                                            <div class="col-md-6">
                                                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                                                @if ($errors->has('password'))
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('password') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                                            <div class="col-md-6">
                                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row mb-0">
                                                            <div class="col-md-6 offset-md-4">
                                                                <button type="submit" class="btn btn-primary">
                                                                    {{ __('Reset Password') }}
                                                                </button>
                                                            </div>
                                                        </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
