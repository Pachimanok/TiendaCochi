@extends('layouts.header')
<div class="container mt-5">
    <div class="row mt-5 mb-5 text-center">
        <h2 style="color:##ff5765;">Agregar un nuevo domicilio al usuario: </h2>
        <h4>{{ $user->name }}</h4>
    </div>

    <p class="text-center text-secondary pl-5 pr-5">Indicanos los datos tu domicilio:</p>
    <form method="POST" action="/direccion">
        @csrf
        <div class="row">
            <div class="col-sm-8 mx-auto" style="padding-left: 4rem; padding-right:
                            4rem;">
                <h6 style="text-align: left; margin-bottom:
                                0%; padding-left: 3%; color:##ff5765;">Calle:
                </h6>
                <input id="text" type="text" class="form-control email-login" placeholder="Av. San Martin" name="calle"
                    value="{{ old('text') }}" required autocomplete="text">
            </div>
        </div>
        <div class="d-flex mt-3">
            <div class="col-sm-4 text-center"  style="padding-left: 4rem; padding-right: 1rem; ">
                <h6 style="text-align: left; margin-bottom:
                                0%; padding-left: 3%; color:##ff5765;">número:
                </h6>
                <input id="numero" type="number" class="form-control password" placeholder="3345" name="numero"
                    value="{{ old('numero') }}" required autocomplete="numero">
            </div>
            <div class="col-sm-4 text-center" style="padding-right: 1rem;" >
                <h6 style="text-align: left; margin-bottom:
                                0%; padding-left: 3%; color:##ff5765;">Piso:
                </h6>
                <input id="piso" type="text" class="form-control password" placeholder="8" name="piso"
                    value="{{ old('piso') }}" autocomplete="piso">
            </div>
            <div class="col-sm-4 text-center" style="padding-right:
                            4rem;">
                <h6 style="text-align: left; margin-bottom:
                                0%; padding-left: 3%; color:##ff5765;">Dpto:
                </h6>
                <input id="dpto" type="text" class="form-control password" placeholder="A" name="dpto"
                    value="{{ old('dpto') }}" autocomplete="dpto">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-8 mx-auto" style="padding-left: 4rem; padding-right:
                            4rem;">
                <h6 style="text-align: left; margin-bottom:
                                0%; padding-left: 3%; color:##ff5765;">Provincia:
                </h6>
                <input id="provincia" type="text" class="form-control email-login" placeholder="Mendoza" name="provincia"
                    value="{{ old('provincia') }}" required autocomplete="provincia">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-8 mx-auto" style="padding-left: 4rem; padding-right:
                            4rem;">
                <h6 style="text-align: left; margin-bottom:
                                0%; padding-left: 3%; color:##ff5765;">Localidad:
                </h6>
                <input id="localidad" type="text" class="form-control email-login" placeholder="Maipú" name="localidad"
                    value="{{ old('localidad') }}" required autocomplete="localidad">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-8 mx-auto" style="padding-left: 4rem; padding-right:
                            4rem;">
                <h6 style="text-align: left; margin-bottom:
                                0%; padding-left: 3%; color:##ff5765;">Código Postal:
                </h6>
                <input id="codigoPostal" type="text" class="form-control email-login" placeholder="5515" name="codigoPostal"
                    value="{{ old('codigoPostal') }}" required autocomplete="codigoPostal">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-8 mx-auto" style="padding-left: 4rem; padding-right:
                            4rem;">
                <h6 style="text-align: left; margin-bottom:
                                0%; padding-left: 3%; color:##ff5765;">Teléfono de Contacto:
                </h6>
                <input id="telContacto" type="text" class="form-control email-login" placeholder="(261)2128105" name="telContacto"
                    value="{{ old('telContacto') }}" required autocomplete="telContacto">
            </div>
        </div>
        <div class="row mt-3 mb-3">
            <div class="col-sm-8 mx-auto" style="padding-left: 4rem; padding-right:
                            4rem;">
                <h6 style="text-align: left; margin-bottom:
                                0%; padding-left: 3%; color:##ff5765;">Alguna referencia:
                </h6>
                <input id="referencia" type="text" class="form-control email-login" placeholder="Es el porton negro" name="referencia"
                    value="{{ old('referencia') }}"  autocomplete="referencia">
            </div>
        </div>
        <div class="row mt-3 text-center">
            <div class="col-md-8 mx-auto">
                <button type="submit" name="unica" class="btn btn-primary btn-login" style="border-radius:50px;width: 75%; background: ##ff5765;
                    color: white;">
                    Continuar
                </button>
            </div>
        </div>
    </form>
</div>
@extends('layouts.sidebar')
@extends('layouts.footer')
