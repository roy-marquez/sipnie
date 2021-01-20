{{--@extends('adminlte::auth.register')--}}
@extends('layouts.app')

@section('title', __('Register'))

{{--@section('adminlte_css')--}}
{{--    <link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
{{--@endsection--}}

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body py-4">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="input-group col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                <div class="input-group-append">
                                    <div class="input-group-text rounded-right">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="apellido1" class="col-md-4 col-form-label text-md-right">Primer Apellido</label>

                            <div class="input-group col-md-6">
                                <input id="apellido1" type="text" class="form-control @error('apellido1') is-invalid @enderror"
                                       name="apellido1" value="{{ old('apellido1') }}" required autocomplete="apellido1" autofocus>

                                <div class="input-group-append">
                                    <div class="input-group-text rounded-right">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>

                                @error('apellido1')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">
                                {{ __('E-Mail Address') }}</label>

                            <div class="input-group col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email">

                                <div class="input-group-append">
                                    <div class="input-group-text rounded-right">
                                        <span class="fas fa-envelope"> </span>
                                    </div>
                                </div>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="input-group col-md-6">
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       name="password" required autocomplete="new-password">

                                <div class="input-group-append">
                                    <div class="input-group-text rounded-right">
                                        <span class="fas fa-lock-open"> </span>
                                    </div>
                                </div>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="input-group col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" required autocomplete="new-password">
                                <div class="input-group-append">
                                    <div class="input-group-text rounded-right">
                                        <span class="fas fa-lock"> </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-block">
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
@endsection
