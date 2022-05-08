@extends('layouts.app')

@section('content')

<div class="container mt-3" >
    <div class="row d-flex justify-content-center">
        <div class="col-md-8" >
            <div class="card border-0 pt-3 pb-5" >
                <div class="card text-center border-0 align-items-center">
                    <h4 class="font-weight-bold text-info">{{ __('LOGIN') }}</h4>
                    <img class="card-img-top w-25 h-25 text-center" src="https://dpilaser.com/wp-content/uploads/2017/01/Bienvenido.png" alt="Card image cap">
                
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">

                            <label for="email" class="col-md-4 col-form-label text-md-end text-lg-right">{{ __('Correo') }}</label>

                            <div class="col-md-6">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="22" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                                          </svg>
                                      </div>
                                    </div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>
                        </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 ">
                            <label for="password" class="col-md-4 col-form-label text-md-end text-lg-right">{{ __('Password') }}</label>

                            <div class="col-md-6">

                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="22" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                          </svg>
                                      </div>
                                    </div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row w-100">
                            <div class="row w-100 d-flex flex-column align-items-center">
                                <div class="row mb-3 flex-column">
                                    <div class="col offset-md-4">
                                        <div class="form-check w-100">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row mb-0">
                                    <div class="col offset-md-4 w-100">
                                        <button type="submit" class="btn btn-primary w-100">
                                            {{ __('Login') }}
                                        </button>
        
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link w-100" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
    
                        </div>
                        

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection