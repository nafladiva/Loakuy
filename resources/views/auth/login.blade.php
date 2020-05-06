@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-3 card-login">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <legend class="text-center legend-login">Login</legend>

                        <div class="form-group">
                            <label for="email" class="col-md-8 col-form-label ml-3 text-center">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6" style="margin: 0 auto;">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror input-login" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-8 col-form-label text-center">{{ __('Password') }}</label>

                            <div class="col-md-6" style="margin: 0 auto;">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror input-login" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-lg-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <br>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-lg-7">
                                <button type="submit" class="btn btn-primary btn-login">
                                    {{ __('Login') }}
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
