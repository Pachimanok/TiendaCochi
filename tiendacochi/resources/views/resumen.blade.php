@extends('layouts.header')

<div class="container pl-3 mt-5" style="font-family: 'Montserrat', sans-serif;">
    <div class="row g-3">
        <div class="col mx-auto">
            <h2 class="text-center">Resumen del Pedido</h2>
            <h6 class="text-center" style="color:#a58f5c ">ID: #0000{{ $id }}</h6>
        </div>
    </div>
    <div class="row mt-5 mb-5">
        <div class="col-sm-5 mx-auto">
            <div class="card card-body p-0" style="border: none;">
                <ul class="list-group list-group-flush">
                    @foreach ($detalle as $articulo)
                        <li class="list-group-item">
                            <div class="d-flex align-items-center">
                                <div class="mx-auto">
                                    <p class="text-sm mt-0 mb-0">{{ $articulo->cantidad }}
                                        <small>{{ $articulo->producto }}</small></p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="col-auto mx-auto">
                                    <h6 style="color: ##ff5765;"> Subtotal:
                                        ${{ $articulo->precio }},00</h6>
                                </div>
                            </div>
                        </li>
                    @endforeach
                    <form action="/pedido/{{ $id }}" method="POST" name="fvalida">
                        @method('PUT')
                        @csrf
                        <div class="row mt-5">
                           
                            <input class="form-control" id="facturacion"
                                style="border-top: none !important;
                            border-right: none;
                            border-left: none;"
                                name="facturacion" type="hidden" value="General" required>
                                
                               
                        </div>
                        @if ($retiroBodega == 'retiroBodega')
                            <div class="row mt-3">
                                
                                    <input class="form-control" id="direccion"
                                    style="border-top: none !important;
                            border-right: none;
                            border-left: none;"
                                    name="direccion" type="hidden" value="aCoordinar" required>
                                   
                                
                            </div>
                            <div class="row mt-3 mb-3">
                                <div class="col-sm-12 mx-auto">
                                    <label style="color: ##ff5765;">Teléfono de Contacto:*</label>
                                    <input id="telContacto" type="text" class="form-control email-login"
                                        placeholder="(261)2128105" name="telContacto" value="{{ old('telContacto') }}"
                                        required autocomplete="telContacto">
                                </div>
                            </div>
                        @else
                            <div class="row mt-3">
                                
                                <input class="form-control" id="direccion"
                                    style="border-top: none !important;
                            border-right: none;
                            border-left: none;"
                                    name="direccion" value="aCoordinar" required>
                                    
                            </div>
                            <div class="row mt-3 mb-3">
                                <div class="col-sm-12 mx-auto">
                                    <label style="color: ##ff5765;">Teléfono de Contacto:*</label>
                                    <input id="telContacto" type="text" class="form-control email-login"
                                        placeholder="(261)2128105" name="telContacto" value="{{ old('telContacto') }}"
                                        required autocomplete="telContacto">
                                </div>
                            </div>
                            @if ($flete == 'ON')
                                <div class="row mt-3 mb-3">
                                    <div class="col-sm-12 mx-auto">
                                        <h6
                                            style="text-align: left; margin-bottom:
                                            0%; color:##ff5765;">
                                            Precio del envío:
                                            <b>{{ $precioflete }}$</b>
                                        </h6>
                                        <p>*Se incluye en el precio final</p>
                                    </div>
                                </div>
                            @endif
                        @endif
                        <div class="row mt-3">
                            <div class="col-sm-12 mx-auto">
                                <label style="color: ##ff5765;">Algunas Observaciones:</label>
                                <input id="observaciones" type="text" class="form-control email-login"
                                    placeholder="Información a tener en cuenta en el pedido" name="observaciones"
                                    value="{{ old('observaciones') }}" autocomplete="observaciones">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="select" style="color: ##ff5765;">Modo
                                de Pago:*</label>
                            <select class="form-control" id="pago"
                                style="border-top: none !important;
                            border-right: none;
                            border-left: none;"
                                name="pago[]" required>
                                <option value="">Elegir</option>
                                <option value="transferencia">Transferencia</option>
                               {{--  <option value="mercadoPago">MercadoPago</option> --}}
                                <option value="efectivo">Efectivo</option>
                            </select>
                        </div>
                        <input type="hidden" value="{{ $precio }}" name="total">
                </ul>
                <p>(*)Campos obligatorios</p>
            </div>
            <div class="d-grid gap-2">
                <button type="button" value="Enviar" onclick="valida_envia()" class="btn btn-danger mt-5"
                    style="border-radius:50px; background: ##ff5765;">Confirmar</button>

                <button class="btn btn-danger mt-2" onclick="volver_catalogo()"
                    style="border-radius:50px; background: ##ff5765;">Volver</button>
                <script>
                    function volver_catalogo() {
                        window.history.back();
                    }
                </script>
            </div>


            <script>
                function valida_envia() {

                    if (document.fvalida.facturacion.value.length == 0) {
                        swal('Tiene que seleccionar una facturación', ' ', 'warning')
                        document.fvalida.facturacion.focus()
                        return 0;
                    }
                    if (document.fvalida.direccion.value.length == 0) {
                        swal('Tiene que seleccionar una dirección', ' ', 'warning')
                        document.fvalida.direccion.focus()
                        return 0;
                    }
                    if (document.fvalida.telContacto.value.length == 0) {
                        swal('Tiene que escribir un teléfono de contacto', ' ', 'warning')
                        document.fvalida.telContacto.focus()
                        return 0;
                    }
                    if (document.fvalida.pago.value.length == 0) {
                        swal('Tiene que seleccionar un modo de pago', ' ', 'warning')
                        document.fvalida.pago.focus()
                        return 0;
                    } else {
                        $('#modal-form').modal('show');
                    }
                }
            </script>


            <!--modal detalles del pedido-->
            <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center">Detalle del pedido</h5>
                            <button type="button" class="btn-close text-reset " style="color:##ff5765 !important;"
                                data-bs-dismiss="modal" aria-label="Close" name="Close"></button>
                        </div>
                        <div class="modal-body p-0">
                            <div class="card card-plain">
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        @foreach ($detalle as $articulo)
                                            <li class="list-group-item">
                                                <div class="d-flex align-items-center">
                                                    <div class="mx-auto">
                                                        <p class="text-sm mt-0 mb-0">{{ $articulo->cantidad }}
                                                            <small>{{ $articulo->producto }}</small>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="col-auto mx-auto">
                                                        <h6 style="color: ##ff5765;"> Subtotal:
                                                            ${{ $articulo->precio }},00</h6>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                    @if ($retiroBodega == 'retiroBodega')
                                        <div style="border: ##ff5765 2px solid;">
                                            <h5
                                                style="text-align: left; margin-bottom:
                                            0%; padding-left: 3%; color:##ff5765;">
                                               A Coordianar Entregar<br></h5>
                                            {{-- <p class="text-sm mt-0 mb-0"
                                                style="text-align: left; margin-bottom:
                                            0%; padding-left: 3%; color:#000;">
                                                Dirección: Pje. Scaramella 500, Russell, Mendoza</p> --}}
                                        </div>
                                    @else
                                        <div style="border: ##ff5765 2px solid;">
                                            <h6
                                                style="text-align: left; margin-bottom:
                                            0%; padding-left: 3%; color:##ff5765;">
                                                El pedido se envía a domicilio</h6>
                                            @if ($flete == 'ON')
                                                <p
                                                    style="text-align: left; margin-bottom:
                                                0%; padding-left: 3%; color:#000;">
                                                    Precio del envío:
                                                    {{ $precioflete }}$
                                                </p>
                                            @endif
                                        </div>
                                    @endif
                                    <div class="text-center">
                                        <button type="submit" href="checkout.html" class="btn btn-danger mt-5"
                                            style="border-radius:50px; background: ##ff5765;">Pagar$
                                            {{ $precio }},00 </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
@extends('layouts.sidebar')
@extends('layouts.footer')
