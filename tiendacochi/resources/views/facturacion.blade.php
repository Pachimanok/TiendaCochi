@extends('layouts.header')

<div class="container mt-5">
    <div class="row mt-5 mb-5 text-center">
        <div class="col-sm-6 mx-auto mt-5">
            <img src="{{ asset('assets/img/invoice.svg') }}" class="img-fluid" style="width: 20rem;" alt="">
            <div class="col-sm-2 mx-auto" style="width: 30%">
                <div class="progress mt-5" style="height: 5px; ">
                    <div class="progress-bar bg-white" role="progressbar"
                        style="width: 33%; background: #80808026 !important;" aria-valuenow="15" aria-valuemin="0"
                        aria-valuemax="100"></div>
                    <div class="progress-bar bg-warning" role="progressbar"
                        style="width: 33%;  background: ##ff5765 !important;" aria-valuenow="30" aria-valuemin="0"
                        aria-valuemax="100"></div>
                    <div class="progress-bar bg-white" role="progressbar"
                        style="width: 33% ;background: #80808026 !important;" aria-valuenow="20" aria-valuemin="0"
                        aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>


    <h3 class="text-center" style="color: ##ff5765">¡Bienvenido {{ $user }}!</h3>
    <p class="text-center text-secondary pl-5 pr-5">Por favor, necesitamos que nos indiques los siguientes datos para
        facturar:</p>
    <form method="POST" action="facturacion">
        @csrf
        <div class="row">
            <div class="col-sm-8 mx-auto" style="padding-left: 4rem; padding-right:
                            4rem;">
                <h6 style="text-align: left; margin-bottom:
                                0%; padding-left: 3%; color:##ff5765;">Razón Social:
                </h6>
                <input id="text" type="text" class="form-control email-login" placeholder="Mi Empresa SA" name="razon_social"
                    value="{{ old('text') }}" required autocomplete="text">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-8 mx-auto" style="padding-left: 4rem; padding-right:
                            4rem;">
                <h6 style="text-align: left; margin-bottom:
                                0%; padding-left: 3%; color:##ff5765;">CUIT:
                </h6>
                <input id="cuit" type="number" class="form-control password" placeholder="30715400220" name="cuit" value="{{ old('cuit') }}"
                    required autocomplete="cuit">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-8 mx-auto" style="padding-left: 4rem; padding-right:
                            4rem;">
                <h6 style="text-align: left; margin-bottom:
                                0%; padding-left: 3%; color:##ff5765;">Condicion Fiscal:
                </h6>
                <select name="cond_fiscal[]" class="form-control" style="border-left:none; border-right:none; border-top:none;"id="">
                    <option value="" style="color:gray;">-.seleccionar.-</option>
                    <option value="Exento">Exento</option>
                    <option value="Presupuesto">Presupuesto</option>
                    <option value="Consumidor Final">Consumidor Final</option>
                    <option value="Responsable Inscripto">Responsable Inscripto</option>
                    <option value="Responsable Monotributo">Responsable Monotributo</option>
                </select>
            </div>
        </div>

        <div class="row mt-3 text-center">
            <div class="col-md-8 mx-auto">
                <button type="submit" class="btn btn-primary btn-login" style="border-radius:50px;width: 75%; background: ##ff5765;
                    color: white;">
                    Continuar
                </button>
            </div>
        </div>
    </form>
</div>
@extends('layouts.footer')
