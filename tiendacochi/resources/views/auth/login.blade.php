@extends('layouts.header')
<div class="container">
    <div class="d-flex">
        <div class="col-sm-5 mx-auto">
            <div class="card" style="border:none; text-align: center;">
                <div class="row">
                    <div class="col-sm-5 mx-auto mt-5 mb-3">
                        <img src="assets/img/5s.png" class="card-img-top
                                    img-fluid mb-5 mt-5" style="width: 12rem;" alt="..."><br>
                    </div>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row">
                        <div class="col-sm-8 mx-auto" style="padding-left: 4rem; padding-right:
                                    4rem;">
                            <h6 style="text-align: left; margin-bottom:
                                        0%; padding-left: 3%; color:#af3636;">Email
                            </h6>
                            <input id="email" type="email" class="form-control email-login
                                        @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                                required autocomplete="email" >
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-8 mx-auto" style="padding-left: 4rem; padding-right:
                                    4rem;">
                            <h6 style="text-align: left; margin-bottom:
                                        0%; padding-left: 3%; color:#af3636;">
                                Password</h6>
                            <input id="password" type="password" class="form-control password @error('password')
                                        is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mx-auto ">
                        <div class="form-check d-flex check-group mt-2">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember" style="font-size: small; margin-left: 1rem;">
                                {{ __('Recordarme') }}
                            </label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-8 mx-auto">
                            <button type="submit" class="btn btn-primary btn-login" style="border-radius:50px;width: 75%; background: #af3636;
                            color: white;">
                                {{ __('Ingresar') }}
                            </button>
                                <a class="btn btn-link btn-forgot-password" href="{{ route('password.request') }}">
                                    {{ __('Olvidaste la contraseña?') }}
                                </a>
                                <br>
                               {{--  <a href="/" class="btn btn-dark btn-block" style="border-radius: 50px;">Inicio</a>
                        </div> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@extends('layouts.header')
