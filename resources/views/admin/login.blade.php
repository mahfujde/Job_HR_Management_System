@extends('mainlayout.loginregistationMain')

@section('headTitle')
 Create your new account or Login
@endsection

@section('createAccount')
<div class="bg1" style="background-image:url('/images/bg3.jpg');">
    <div class="row justify-content-center">
        <div class="col-12 col-md-12">
            <div class="login-form">

                <form method="POST" action="{{ route('admin.login') }}">
                        @csrf
                    <h3 class="text-primary">Admin Login</h3>
                    <hr/>

                    
                          <div class="form-group">
                            <label for="email">{{ __('Email') }}</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                        <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>


                        <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Login') }}
                                </button>

                                <a class=" text-center btn btn-link " href="">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                <a href="{{url('admin/register')}}">Create new account</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
