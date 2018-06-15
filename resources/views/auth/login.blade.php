@extends('layouts.app')
@section('content')

<section class="material-half-bg">
    <div class="cover"></div>
  </section>
  <section class="login-content">
    <div class="logo">
      <h1>Vali</h1>
    </div>
    <div class="login-box">
        <form class="login-form" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
            @csrf
        <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
        <div class="form-group">
          <label class="control-label">{{ __('E-Mail Address') }}</label>
          <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
          @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
          @endif
        </div>
        <div class="form-group">
          <label class="control-label">{{ __('Password') }}</label>
          <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
        </div>
        <div class="form-group">
          <div class="utility">
            <div class="animated-checkbox">
                <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                </label>
            </div>
            <p class="semibold-text mb-2"><a href="{{ route('password.request') }}" data-toggle="flip">{{ __('Forgot Your Password?') }}</a></p>
          </div>
        </div>
        <div class="form-group btn-container">
                <button type="submit" class="btn btn-primary btn-block">
                        <i class="fa fa-sign-in fa-lg fa-fw"></i>
                        {{ __('Login') }}
                    </button>
        </div>
      </form>
    </div>
  </section>
@endsection
