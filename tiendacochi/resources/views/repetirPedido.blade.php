
@extends('layouts.header')
    <div class="container pl-3"  >
        <div class="row g-3">
            <div class="col mx-auto">
                <h2 class="text-center">Resumen del Pedido a Repetir:</h2>
                    @if($pedidosNo != null)
                       
                    <script>
                        window.onload = info;
                        function info(){
                          
                            swal({
                                title: "Productos sin Stock",
                                text: '¡alguno de los productos solicitados no se encuentran actualemente en stock!',
                                icon: "warning",
                                buttons: true,
                                warningMode: true,
                                })
                                                                       
                        };
                    </script>
                    <div class="alert alert-danger text-center" role="alert">
                        Productos que no hemos incluido en tu pedido: <br>
                        @foreach($pedidosNo as $faltante)
                          -  {{$faltante}} <br>
                        </ul>
                        @endforeach
                      </div>
                     
                    
                @endif 
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-sm-5 mx-auto">
                <div class="card card-body p-0" style="border: none;">
                    <ul class="list-group list-group-flush">
                        @foreach ($pedidos as $pedido)
                        <li class="list-group-item">
                            <div class="d-flex align-items-center">
                                <div class="mx-auto">
                                    <p class="text-sm mt-0 mb-0">{{ $pedido->cantidad}} <small>{{ $pedido->titulo}} - {{ $pedido->sub_titulo}}</small></p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="col-auto mx-auto">
                                    <h6 style="color: #af3636;"> Subtotal:
                                        $ {{  $pedido->precio * $dto * $pedido->cantidad }}.00</h6>
                                </div>
                            </div>
                        </li>
                        @endforeach
                        <form action="/pedido/{{$id}}" method="POST">
                            @method('PUT')
                            @csrf
                                <div class="row mt-5">
                                    <label for="select" style="color: #af3636;">Datos
                                        de facturacion:</label>
                                    <select class="form-control" id="campo"
                                        style="border-top: none !important;
                                        border-right: none;
                                        border-left: none;" name="facturacion[]">
                                        <option value="">Elegir</option>
                                        @foreach($facturacion as $facturacion)
                                            <option value="{{ $facturacion->id }}">{{ $facturacion->titulo}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row mt-3">
                                    <label for="select" style="color: #af3636;">Datos
                                        de Entrega:</label>
                                    <select class="form-control" id="campo"
                                        style="border-top: none !important;
                                        border-right: none;
                                        border-left: none;" name="direccion[]">
                                        <option value="">Elegir</option>
                                        @foreach($direccion as $direccion)
                                            <option value="{{ $direccion->id }}">{{ $direccion->calle}} {{ $direccion->numero}} - {{ $direccion->localidad}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row mt-3">
                                    <label for="select" style="color: #af3636;">Modo
                                        de Pago:</label>
                                    <select class="form-control" id="campo"
                                        style="border-top: none !important;
                                        border-right: none;
                                        border-left: none;" name="pago[]">
                                        <option value="">Elegir</option>
                                        <option value="transferencia">Transferencia</option>
                                        <option value="mercadoPago">Mercado Pago</option>
                                    </select>
                                </div>
                                <input type="hidden" value="{{$total}}" name="total">
                            
            

                    </ul>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-danger mt-5"
                        style="border-radius:50px; background: #af3636;">Pagar
                        $ {{ $total }},00 </button>
                </div>
            </form>

            </div>
        </div>
    </div>
</div>

@extends('layouts.sidebar')
@extends('layouts.footer')
