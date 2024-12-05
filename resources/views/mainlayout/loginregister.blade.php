@extends('mainlayout.loginregistationMain')

@section('headTitle')
 Create your new account or Login
@endsection

@section('createAccount')
<br/><br/><br/><br/><br/>

  <div class="bg" style="background-image:url('/images/create2.jpg');">
   
   <div class="row">
      <div class="col-12">
        <div class="card-body">
          <div class="row create">

          <div class="col-1">
          </div>

          <div class="col-5">
             <i class="fas fa-users icon"></i>
           <h4>Job Seekers</h4>
          <div>Sign in or create your account to manage your profile</div>
         
        </div>

        <div class="col-5">
           <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <h3 class="text-primary">Log In Your Account</h3>
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

                                <a class=" text-center btn btn-link " href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                <a href="{{url('register')}}">Create new account</a>
                        </div>
                    </form>
        </div>

     <div class="col-1">
          </div>
      </div>
        </div>  
      </div>
      </div>
    </div>
<br/><br/>
 <div class="bg" style="background-image:url('/images/create1.jpg');">
<div class="row">
      <div class="col-12">
        <div class="card-body">
          <div class="row create">

          <div class="col-1">
          </div>

          <div class="col-5">
             <i class="fas fa-user-tie icon"></i>
           <h4>Companys</h4>
          <div>Sign in or create account to find the best candidates in the fastest way</div>
          
        </div>

        <div class="col-5">
           <form method="POST" action="{{ route('company.login') }}">
                        @csrf
                    <h3 class="text-primary">Log In Your Account company</h3>
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



                                <a href="{{url('company/register')}}">Create new account</a>
                        </div>
                    </form>
        </div>

     <div class="col-1">
          </div>
      </div>
        </div>  
      </div>
      </div>
    </div>
     
    <br/><br/>

@endsection
               