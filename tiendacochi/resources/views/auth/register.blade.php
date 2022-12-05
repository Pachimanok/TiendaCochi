@extends('layouts.header')
<div class="container">
    <div class="d-flex">
        <div class="col-sm-5 mx-auto">
            <div class="card" style="border:none; text-align: center;">
                <div class="row">
                    <div class="col-sm-5 mx-auto mt-5 ">
                        <img src="assets/img/bbc.png" class="card-img-top
                                    img-fluid mb-5 mt-5" style="width: 12rem;" alt="..."><br>
                    </div>
                </div>
                <form method="POST" action="{{ route('register') }}">
                @csrf
                    <div class="row">
                        <div class="col-sm-8 mx-auto" style="padding-left: 4rem; padding-right:
                                    4rem;">
                            <h6 class="register">Nombre
                            </h6>
                            <input id="name" type="text"
                                class="form-control register @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" placeholder="Juan Martinez" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-sm-8 mx-auto" style="padding-left: 4rem; padding-right:
                                        4rem;">
                            <h6 class="register">Email
                            </h6>
                            <input id="email" type="email"
                                class="form-control register @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" placeholder="juanm@gmail.com">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-sm-8 mx-auto" style="padding-left: 4rem; padding-right:
                                4rem;">
                            <h6 class="register">Password
                            </h6>
                            <input id="password" type="password"  class="form-control register @error('password') 
                                        is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Malbec2021"  required>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-8 mx-auto" style="padding-left: 4rem; padding-right:
                                                    4rem;">
                            <h6 class="register">Repetir Password
                            </h6>
                            <input id="password-confirm" type="password" class="form-control register"
                                required autocomplete="new-password" name="password_confirmation"  placeholder="Malbec2021">
                        </div>
                    </div>
                    <div class="row mt-4 mb-5">
                        <div class="col-md-8 mx-auto">
                            <button type="submit" class="btn btn-primary btn-login" style="border-radius:50px;width: 75%; background: ##ff5765;
                            color: white;">
                                {{ __('Registrarme') }}
                            </button>
                            <br>
                            <br>
                             {{--    <a href="/" class="btn btn-primary btn-block" style="border-radius: 50px;">Volver</a> --}}
                        </div>
                    </div>
            </form>
    </div>
</div>
</div>
</div>
</div>
