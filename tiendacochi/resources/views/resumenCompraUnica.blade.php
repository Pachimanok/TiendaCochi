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
                                <input type="hidden" 
                                    name="razon_social" value="compraUnica" required
                                   >
                                <input  type="hidden" 
                                    name="cuit" value="1111111111" required     >
                                <input name="cond_fiscal" type="hidden" class="form-control" value="compraUnica"
                                    style="border-left:none; border-right:none; border-top:none;" id="cond_fiscal" require>
                                   
                            </div>
                        </div>
                        
                    
                    
                               
                                <input  type="hidden" class="form-control email-login"
                                    placeholder="Av. San Martin" name="calle" value="compraUnica" 
                                    autocomplete="text">
                                <input id="hidden" type="hidden" class="form-control password" placeholder="3345"
                                    name="numero" value="11111"  autocomplete="numero">
                            
                                <input id="piso" type="hidden" class="form-control password" placeholder="8" name="piso"
                                    value="0000" autocomplete="piso">
                            
                                <input id="dpto" type="hidden" class="form-control password" placeholder="A" name="dpto"
                                    value="00" autocomplete="dpto">
                          
                                <input id="provincia" type="hidden" class="form-control email-login" placeholder="Mendoza"
                                    name="provincia" value="CompraUnica" 
                                    autocomplete="provincia">
                           
                                <input id="localidad" type="hidden" class="form-control email-login" placeholder="Maipú"
                                    name="localidad" value="CompraUnica" 
                                    autocomplete="localidad">
                        
                                <input id="codigoPostal" type="hidden" class="form-control email-login" placeholder="5515"
                                    name="codigoPostal" value="0000" 
                                    autocomplete="codigoPostal" >
                            
                       
                                <input id="referencia" type="hidden" class="form-control email-login"
                                    placeholder="Es el porton negro" name="referencia"
                                    value="CompraUnica" autocomplete="referencia">
                           
                        <div class="row mt-3">
                            <div class="col-sm-12 mx-auto" >
                                <h6 style="text-align: left; margin-bottom:
                                            0%; padding-left: 3%; color:##ff5765;">Algunas Observaciones:
                                </h6>
                                <input id="observaciones" type="text" class="form-control email-login"
                                    placeholder="" name="observaciones"
                                    value="{{ old('observaciones') }}" autocomplete="observaciones">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="select" style="color: ##ff5765;">Modo
                                de Pago:*</label>
                            <select class="form-control" id="pago" style="border-top: none !important;
                            border-right: none;
                            border-left: none;" name="pago[]" required>
                                <option value="">Elegir</option>
                                <option value="transferencia">Transferencia</option>
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

                <!--Funcion para avisar y validar que los input esten completos y volver atras-->
                <script>
                function volver_catalogo(){
                    window.history.back();
                }

                function valida_envia(){
   	
                    if (document.fvalida.razon_social.value.length==0){
                        swal('Tiene que escribir una razón social',' ','warning')
                        document.fvalida.razon_social.focus()
                        return 0;
                    }
                    if (document.fvalida.cuit.value.length==0){
                        swal('Tiene que escribir un cuit',' ','warning')
                        document.fvalida.cuit.focus()
                        return 0;
                    }
                    if (document.fvalida.cond_fiscal.value.length==0){
                        swal('Tiene que seleccionar una condición fiscal',' ','warning')
                        document.fvalida.cond_fiscal.focus()
                        return 0;
                    }
                    if (document.fvalida.pago.value.length==0){
                        swal('Tiene que seleccionar un método de pago',' ','warning')
                        document.fvalida.pago.focus()
                        return 0;
                    }else{
                        $('#modal-form').modal('show');
                    }
                }

                </script>
            </div>

            <!--modal detalles del pedido-->
            <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center">Detalle del pedido</h5>
                            <button type="button" class="btn-close text-reset " style="color:##ff5765 !important;" data-bs-dismiss="modal"
                            aria-label="Close" name="Close"></button>
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
                                    </ul>
                                    @if($retiroBodega == "retiroBodega")
                                    <div style="border: ##ff5765 2px solid;">
                                        <h5 style="text-align: left; margin-bottom:
                                            0%; padding-left: 3%; color:##ff5765;">Retirar en Bodega <br></h5>
                                        <p class="text-sm mt-0 mb-0" style="text-align: left; margin-bottom:
                                            0%; padding-left: 3%; color:#000;">Dirrecion: Pje. Scaramella 500, Russell, Mendoza</p>
                                    </div>
                                    @else
                                    <div style="border: ##ff5765 2px solid;">
                                        <h6 style="text-align: left; margin-bottom:
                                            0%; padding-left: 3%; color:##ff5765;">Envio a Coordinar</h6>
                                    </div>
                                    @endif
                                    <div class="text-center">
                                        <button type="submit" name="unica" value="unica" class="btn btn-danger mt-5"
                                            style="border-radius:50px; background: ##ff5765;">Pagar $ {{ $precio }},00 </button>
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
@extends('layouts.footer')

