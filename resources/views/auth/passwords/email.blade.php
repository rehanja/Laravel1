@extends('layouts.app')

@section('header')



<section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(http://127.0.0.1:8000/img/email.jpg);width:100%;height:950px;">
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

                                        <div class="card" style="background-image: url(http://127.0.0.1:8000/img/registernew.png);width:700px;height:400px;opacity: 0.8;filter: alpha(opacity=80);margin-top:0%;font-weight:bold">

                                        <div class="card-header">{{ __('Reset Password') }}</div>

                                        <div class="card-body">
                                            @if (session('status'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ session('status') }}
                                                </div>
                                            @endif
                                            <br><br>
                                            <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
                                                @csrf

                                                <div class="form-group row">
                                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                                        @if ($errors->has('email'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-0">
                                                    <div class="col-md-6 offset-md-4">
                                                        <button type="submit" class="btn btn-primary">
                                                            {{ __('Send Password Reset Link') }}
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
</section>



@endsection
