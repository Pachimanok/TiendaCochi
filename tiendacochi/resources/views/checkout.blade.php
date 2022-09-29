@extends('layouts.header')

<div class="container pl-3 mt-5">

<div class="row mt-5">
    <div class="col-sm-5 mx-auto mt">
        <h1 class="display-1 text-center text-success"
            style="font-size: xxx-large;"><i class="far
                fa-check-circle"></i></h1>
        <h2 class="text-center text-success">Tu pedido se ha
            procesado correctamente: </h2>
        <p class="text-center mb-0">Se ha aplicado un descuento del
            20% </p>
        <p class="text-center mb-0">Para cancelar por Transferencia:</p>
        <p class="text-center mb-0">Monto: $ 33.360,00</p>
        <p class="text-center mb-0">Beneficiario: Finca Algarve S.A</p>
        <p class="text-center mb-0">CUIT 30-70815093-3</p>
        <p class="text-center mb-0">CBU: 0720068720000001574472</p>
        <p class="text-center mb-0">Banco Santander Rio</p>


        <div class="d-grid gap-2">
            <a href="principal.html" class="btn btn-danger mt-5"
                style="border-radius:50px; background: #af3636;">Inicio</a>
        </div>


    </div>

</div>
<div class="offcanvas offcanvas-start" tabindex="-1"
    style="max-width:
    60%;" id="offcanvasExample"
    aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">

        <button type="button" class="btn-close text-reset"
            style="color:#af3636 !important;"
            data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="row">
            <div class="col-sm-5 mx-auto">
                <div class="text-center">
                    <img src="assets/img/avatar.png" class="rounded
                        img-fluid" style="border-radius: 50%
                        !important;
                        height:
                        4rem;">
                    <h6 class="mb-0"
                        style="color:#af3636;margin-top:
                        4px;"> Juanjo Diaz</h6>
                    <p class="text-secondary" style="font-size:
                        small;">juanjo@gmail.com</p>
                </div>
            </div>
        </div>
        <div>
            <div class="list-group mt-5">
                <a href="principal.html" class="list-group-item
                    list-group-item-action list-group-item-light"
                    style="border:none; display: flex; text-align:
                    center;">
                    <i class="fas fa-home" style="margin-right:
                        2rem;"></i>
                    <p>Inicio</p>
                </a>
                <a href="#" class="list-group-item
                    list-group-item-action list-group-item-light"
                    style="border:none; display: flex; text-align:
                    center;">
                    <i class="fas fa-file-invoice"
                        style="margin-right:
                        2rem;"></i>
                    <p>Datos</p>
                </a>
                <a href="#" class="list-group-item
                    list-group-item-action list-group-item-light"
                    style="border:none; display: flex; text-align:
                    center;">
                    <i class="fas fa-bullhorn" style="margin-right:
                        2rem;"></i>
                    <p>Recomendar</p>
                </a>

            </div>
        </div>
    </div>
</div>
@extends('layouts.footer')

