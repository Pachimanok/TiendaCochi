@extends('layouts.header')

<div class="container mt-5">
    <div class="row mt-5 mb-5 text-center">
        <div class="col-sm-6 mx-auto mt-5">
            <img src="{{ asset('assets/img/delivery.svg') }}" class="img-fluid" style="width: 20rem;" alt="">
            <div class="col-sm-2 mx-auto" style="width: 30%">
                <div class="progress mt-5" style="height: 5px; ">
                    <div class="progress-bar bg-white" role="progressbar"
                        style="width: 33%; background: #80808026 !important;" aria-valuenow="15" aria-valuemin="0"
                        aria-valuemax="100"></div>
                    <div class="progress-bar bg-warning" role="progressbar"
                        style="width: 33%;  background: #80808026 !important;" aria-valuenow="30" aria-valuemin="0"
                        aria-valuemax="100"></div>
                    <div class="progress-bar bg-white" role="progressbar"
                        style="width: 33% ;background: #af3636 !important;" aria-valuenow="20" aria-valuemin="0"
                        aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>


    <h3 class="text-center text-success">¡Razón Social cargada con exito!</h3>
    <p class="text-center text-secondary pl-5 pr-5">Indicanos los datos tu domicilio:</p>
    <form method="POST" action="direccion">
        @csrf
        <div class="row">
            <div class="col-sm-8 mx-auto" style="padding-left: 4rem; padding-right:
                            4rem;">
                <h6 style="text-align: left; margin-bottom:
                                0%; padding-left: 3%; color:#af3636;">Calle:
                </h6>
                <input id="text" type="text" class="form-control email-login" placeholder="Av. San Martin" name="calle"
                    value="{{ old('text') }}" required autocomplete="text">
            </div>
        </div>
        <div class="d-flex mt-3">
            <div class="col-sm-4 text-center"  style="padding-left: 4rem; padding-right: 1rem; ">
                <h6 style="text-align: left; margin-bottom:
                                0%; padding-left: 3%; color:#af3636;">número:
                </h6>
                <input id="numero" type="number" class="form-control password" placeholder="3345" name="numero"
                    value="{{ old('numero') }}" required autocomplete="numero">
            </div>
            <div class="col-sm-4 text-center" style="padding-right: 1rem;" >
                <h6 style="text-align: left; margin-bottom:
                                0%; padding-left: 3%; color:#af3636;">Piso:
                </h6>
                <input id="piso" type="text" class="form-control password" placeholder="8" name="piso"
                    value="{{ old('piso') }}" autocomplete="piso">
            </div>
            <div class="col-sm-4 text-center" style="padding-right:
                            4rem;">
                <h6 style="text-align: left; margin-bottom:
                                0%; padding-left: 3%; color:#af3636;">Dpto:
                </h6>
                <input id="dpto" type="text" class="form-control password" placeholder="A" name="dpto"
                    value="{{ old('dpto') }}" autocomplete="dpto">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-8 mx-auto" style="padding-left: 4rem; padding-right:
                            4rem;">
                <h6 style="text-align: left; margin-bottom:
                                0%; padding-left: 3%; color:#af3636;">Provincia:
                </h6>
                <input id="provincia" type="text" class="form-control email-login" placeholder="Mendoza" name="provincia"
                    value="{{ old('provincia') }}" required autocomplete="provincia">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-8 mx-auto" style="padding-left: 4rem; padding-right:
                            4rem;">
                <h6 style="text-align: left; margin-bottom:
                                0%; padding-left: 3%; color:#af3636;">Localidad:
                </h6>
                <input id="localidad" type="text" class="form-control email-login" placeholder="Maipú" name="localidad"
                    value="{{ old('localidad') }}" required autocomplete="localidad">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-8 mx-auto" style="padding-left: 4rem; padding-right:
                            4rem;">
                <h6 style="text-align: left; margin-bottom:
                                0%; padding-left: 3%; color:#af3636;">Código Postal:
                </h6>
                <input id="codigoPostal" type="text" class="form-control email-login" placeholder="5515" name="codigoPostal"
                    value="{{ old('codigoPostal') }}" required autocomplete="codigoPostal">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-8 mx-auto" style="padding-left: 4rem; padding-right:
                            4rem;">
                <h6 style="text-align: left; margin-bottom:
                                0%; padding-left: 3%; color:#af3636;">Teléfono de Contacto:
                </h6>
                <input id="telContacto" type="text" class="form-control email-login" placeholder="(261)2128105" name="telContacto"
                    value="{{ old('telContacto') }}" required autocomplete="telContacto">
            </div>
        </div>
        <div class="row mt-3 mb-3">
            <div class="col-sm-8 mx-auto" style="padding-left: 4rem; padding-right:
                            4rem;">
                <h6 style="text-align: left; margin-bottom:
                                0%; padding-left: 3%; color:#af3636;">Alguna referencia:
                </h6>
                <input id="referencia" type="text" class="form-control email-login" placeholder="Es el porton negro" name="referencia"
                    value="{{ old('referencia') }}"  autocomplete="referencia">
            </div>
        </div>
        <div class="row mt-3 text-center">
            <div class="col-md-8 mx-auto">
                <button type="submit" name="unica" class="btn btn-primary btn-login" style="border-radius:50px;width: 75%; background: #af3636;
                    color: white;">
                    Continuar
                </button>
            </div>
        </div>
    </form>
</div>
@extends('layouts.footer')
