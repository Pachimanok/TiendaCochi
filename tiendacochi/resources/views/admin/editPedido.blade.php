@include('admin.layouts.header')

<body class="g-sidenav-show  bg-gray-100">
    @include('admin.layouts.barraLateral')
    <div class="card">
        <div class="card-header pb-0 px-3">
            <h6 class="mb-0">Editar Pedido #{{ $pedido->id }}</h6>
        </div>
        <div class="card-body pt-4 p-3">
            <form action="/adminPedido/{{ $pedido->id }}" method="post">
                @method('PUT')
                @csrf
                <ul class="list-group">
                    <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                        <div class="d-flex flex-column">
                            <h6 class="mb-3 text-sm"><strong>User:</strong> {{ $pedido->user }}</h6>
                            <span class="mb-2 text-xs">Seguimiento: <span
                                    class="text-dark font-weight-bold ms-sm-2"><input type="text"
                                        class="form-control border-primary" value="{{ $pedido->seguimiento }}"
                                        name="seguimiento" placeholder="9518335590"></span></span>
                            <span class="mb-2 text-xs">Modo de Pago: <span
                                    class="text-dark ms-sm-2 font-weight-bold">{{ $pedido->modo_pago }}</span></span>
                            <p @if ($pedido->estado_pago == 'por cobrar') class="text-danger" @else class="text-success" @endif><strong>Total: </strong> $ {{ $pedido->total }}.00</p>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="estado_pago"
                                    id="flexSwitchCheckChecked" @if ($pedido->estado_pago == 'por cobrar') @else checked @endif>
                                <label class="form-check-label" for="flexSwitchCheckDefault">pagado</label>
                            </div>
                        </div>
                    </li>
                </ul>
        </div>
    </div>
    <div class="card mt-4 h-100 mb-4">
        <div class="card-header pb-0 px-3">
            <div class="row">
                <div class="col-md-6">
                    <h6 class="mb-0">Detalle del pedido</h6>
                </div>
                <div class="col-md-6 d-flex justify-content-end align-items-center">
                    <i class="far fa-calendar-alt me-2"></i>
                    <small>{{ $pedido->created_at }}</small>
                </div>
            </div>
        </div>
        <div class="card-body pt-4 p-3">
            <h6 class="text-uppercase text-body text-xs font-weight-bolder mb-3">Pedido Realizado</h6>
            <ul class="list-group">
                @foreach ($detalles as $detalle)
                    @if ($pedido->id == $detalle->id_pedido)
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex align-items-center">
                              <h5><i style="    border-radius: 50px;
                                padding: 0.5rem;
                                margin: 0.5rem;
                                font-size: small;
                                border-style: solid;
                                border-width: 1px;
                                color: chocolate;"class="ni ni-cart"></i></h5>
                                        
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark text-sm">
                                        {{ $detalle->cantidad . ' - ' . $detalle->producto . ' - ' . $detalle->sub_titulo }}
                                    </h6>

                                </div>
                            </div>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-sm-6">
            <div class="card h-100 mb-4">
                <div class="card-header pb-0 px-3">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="mb-0">Detalle del Facturacion:</h6>
                        </div>

                    </div>
                </div>
                <div class="card-body pt-4 p-3">
                    <h6 class="text-uppercase text-body text-xs font-weight-bolder mb-3">Datos:</h6>
                    <ul class="list-group">
                        @foreach ($facturacion as $facturacion)
                            @if ($pedido->id_fact == $facturacion->id)
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <h5><i style="    border-radius: 50px;
                                            padding: 0.5rem;
                                            margin: 0.5rem;
                                            font-size: small;
                                            border-style: solid;
                                            border-width: 1px;
                                            color: chocolate;"class="ni ni-money-coins"></i></h5>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm"><strong>Factura:</strong><input
                                                    type="text" class="form-control border-primary"
                                                    value="{{ $pedido->factura }}" name="factura" placeholder=""></h6>
                                        </div>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <h5><i style="    border-radius: 50px;
                                            padding: 0.5rem;
                                            margin: 0.5rem;
                                            font-size: small;
                                            border-style: solid;
                                            border-width: 1px;
                                            color: chocolate;"class="ni ni-money-coins"></i></h5>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm"><strong>Tipo Contribuyente:
                                                </strong>{{ $facturacion->condicion_fiscal }}</h6>
                                        </div>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <h5><i style="    border-radius: 50px;
                                            padding: 0.5rem;
                                            margin: 0.5rem;
                                            font-size: small;
                                            border-style: solid;
                                            border-width: 1px;
                                            color: chocolate;"class="ni ni-money-coins"></i></h5>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm"><strong>Razon Social:
                                                </strong>{{ $facturacion->razon_social }}</h6>
                                        </div>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <h5><i style="    border-radius: 50px;
                                            padding: 0.5rem;
                                            margin: 0.5rem;
                                            font-size: small;
                                            border-style: solid;
                                            border-width: 1px;
                                            color: chocolate;"class="ni ni-money-coins"></i></h5>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm"><strong>CUIT:
                                                </strong>{{ $facturacion->cuit }}</h6>
                                        </div>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <h5><i style="    border-radius: 50px;
                                            padding: 0.5rem;
                                            margin: 0.5rem;
                                            font-size: small;
                                            border-style: solid;
                                            border-width: 1px;
                                            color: chocolate;"class="ni ni-money-coins"></i></h5>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm"><strong>Persona de Contacto:
                                                </strong>{{ $pedido->user }}</h6>
                                        </div>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <h5><i style="    border-radius: 50px;
                                            padding: 0.5rem;
                                            margin: 0.5rem;
                                            font-size: small;
                                            border-style: solid;
                                            border-width: 1px;
                                            color: chocolate;"class="ni ni-money-coins"></i></h5>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm"><strong>Telefono Contacto:
                                                </strong>{{ $pedido->telContacto }}</h6>
                                        </div>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <h5><i style="    border-radius: 50px;
                                            padding: 0.5rem;
                                            margin: 0.5rem;
                                            font-size: small;
                                            border-style: solid;
                                            border-width: 1px;
                                            color: chocolate;"class="ni ni-money-coins"></i></h5>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm"><strong>E-mail: </strong>{{ $pedido->email }}</h6>
                                        </div>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <h5><i style="    border-radius: 50px;
                                            padding: 0.5rem;
                                            margin: 0.5rem;
                                            font-size: small;
                                            border-style: solid;
                                            border-width: 1px;
                                            color: chocolate;"class="ni ni-money-coins"></i></h5>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm"><strong>Vendedor: </strong>{{ $pedido->seller }}</h6>
                                        </div>
                                    </div>
                                </li>
                                @if($user->role == "admin")
                                        <button type="button" class="btn btn-primary" 
                                            data-bs-toggle="modal" data-bs-target="#modal-form-asigSeller"><i class="fas fa-pencil-alt"></i> Asignar Vendedor
                                        </button>
                                @elseif($pedido->seller =="")
                                <a href="/adminPedido/{{ $pedido->id }}/asignarSeller" class="btn btn-primary" >
                                        <i class="bi bi-plus-circle"></i> Asignar Vendedor</a>
                                @endif
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card h-100 mb-4">
                <div class="card-header pb-0 px-3">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="mb-0">Detalle del Envio:</h6>
                        </div>

                    </div>
                </div>
                <div class="card-body pt-4 p-3">
                    <h6 class="text-uppercase text-body text-xs font-weight-bolder mb-3">Datos:</h6>
                    @if ($pedido->id_dir != 'retiroBodega' )
                    @foreach ($direccion as $direccion)
                        @if ($pedido->id_dir == $direccion->id)
                            <ul class="list-group">
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <h5><i style="    border-radius: 50px;
                                            padding: 0.5rem;
                                            margin: 0.5rem;
                                            font-size: small;
                                            border-style: solid;
                                            border-width: 1px;
                                            color: chocolate;"class="ni ni-delivery-fast"></i></h5>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm"><strong>Transporte: </strong>
                                                <select name="transporte[]" class="form-control border-primary">
                                                    <option value="{{ $pedido->transporte }}">-.Seleccionar
                                                        Transporte</option>
                                                        @foreach ($transportes as $transporte)
                                                            <option value="{{$transporte->title}}">{{$transporte->title}}</option>
                                                            
                                                        @endforeach
                                                    
                                                </select>
                                            </h6>
                                        </div>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <h5><i style="    border-radius: 50px;
                                            padding: 0.5rem;
                                            margin: 0.5rem;
                                            font-size: small;
                                            border-style: solid;
                                            border-width: 1px;
                                            color: chocolate;"class="ni ni-delivery-fast"></i></h5>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm"><strong>Remito:</strong><input
                                                    type="text" class="form-control border-primary"
                                                    value="{{ $pedido->remito }}" name="remito" placeholder=""></h6>
                                        </div>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-center ps-0 mb-2 border-radius-lg">
                                    <button type="submit" class="btn btn-primary"name="enviarMail" value="enviar" @if($pedido->factura == null) disabled @endif>Enviar Mail Transporte</button>
                                   
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-center ps-0 mb-2 border-radius-lg" style="padding-top: 0;
                                    margin-top: -2rem;
                                    font-size: small;
                                    color: gray;">
                                @if($pedido->factura == null)<small>¡Antes de enviar debe facturar!</small> @endif
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <h5><i style="    border-radius: 50px;
                                            padding: 0.5rem;
                                            margin: 0.5rem;
                                            font-size: small;
                                            border-style: solid;
                                            border-width: 1px;
                                            color: chocolate;"class="ni ni-delivery-fast"></i></h5>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm"><strong>Domicilio:
                                                </strong>{{ $direccion->calle . ' ' . $direccion->numero . ' Piso: ' . $direccion->piso . ' Dpto: ' . $direccion->dpto }}
                                            </h6>
                                        </div>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <h5><i style="    border-radius: 50px;
                                            padding: 0.5rem;
                                            margin: 0.5rem;
                                            font-size: small;
                                            border-style: solid;
                                            border-width: 1px;
                                            color: chocolate;"class="ni ni-delivery-fast"></i></h5>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm"><strong>Codigo Postal:
                                                </strong>{{ $direccion->codigoPostal }}
                                        </div>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <h5><i style="    border-radius: 50px;
                                            padding: 0.5rem;
                                            margin: 0.5rem;
                                            font-size: small;
                                            border-style: solid;
                                            border-width: 1px;
                                            color: chocolate;"class="ni ni-delivery-fast"></i></h5>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm"><strong>Provincia:
                                                </strong>{{ $direccion->provincia }}</p>
                                            </h6>
                                        </div>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <h5><i style="    border-radius: 50px;
                                            padding: 0.5rem;
                                            margin: 0.5rem;
                                            font-size: small;
                                            border-style: solid;
                                            border-width: 1px;
                                            color: chocolate;"class="ni ni-delivery-fast"></i></h5>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm"><strong>Localidad:
                                                </strong>{{ $direccion->localidad }}</h6>
                                        </div>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <h5><i style="    border-radius: 50px;
                                            padding: 0.5rem;
                                            margin: 0.5rem;
                                            font-size: small;
                                            border-style: solid;
                                            border-width: 1px;
                                            color: chocolate;"class="ni ni-delivery-fast"></i></h5>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm"><strong><strong>Telefono:
                                                    </strong>{{ $direccion->telContacto }}</h6>
                                        </div>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <h5><i style="    border-radius: 50px;
                                            padding: 0.5rem;
                                            margin: 0.5rem;
                                            font-size: small;
                                            border-style: solid;
                                            border-width: 1px;
                                            color: chocolate;"class="ni ni-delivery-fast"></i></h5>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm"><strong><strong>Horario:
                                                    </strong>#agregar al pedido</h6>
                                        </div>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <h5><i style="    border-radius: 50px;
                                            padding: 0.5rem;
                                            margin: 0.5rem;
                                            font-size: small;
                                            border-style: solid;
                                            border-width: 1px;
                                            color: chocolate;"class="ni ni-delivery-fast"></i></h5>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm"><strong>Observaciones:
                                                </strong>{{ $direccion->referencia }}</h6>
                                        </div>
                                    </div>
                                </li>
                        @endif
                    @endforeach
                    @else
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="fas fa-arrow-down"></i></button>
                                                <div class="d-flex flex-column">
                                                    <h6 class="mb-1 text-dark text-sm"><strong>Se retira el pedido en la bodega
                                                        </strong>
                                                    </h6>
                                                </div>
                                            </div>
                        </li>
                    @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-5 mx-auto text-center mb-5">
            <button type="submit" class="btn btn-outline-primary">Guardar Cambios</button>
        </div>
    </div>
    </form>

    <!--modal editar email user-->
    <div class="modal fade" id="modal-form-asigSeller" tabindex="-1" role="dialog" aria-labelledby="modal-form"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card card-plain">
                        <div class="card-header pb-0 text-left">
                            <h3 class="font-weight-bolder text-info text-gradient">Asignar Vendedor</h3>
                        </div>
                        <div class="card-body">
                            <form action="/adminPedido/asignarSellerAdmin/{{ $pedido->id }}" method="post"  role="form text-left" enctype="multipart/form-data">
                                @method('post')
                                @csrf
                                <label>Vendedor:</label>
                                <div class="input-group mb-3">
                                <select class="form-control" id="seller"
                                    style="border-top: none !important;
                                    border-right: none;
                                    border-left: none;" name="seller[]" >
                                    <option value="">Elegir</option>
                                    @foreach($sellers as $seller)
                                    <option value="{{ $seller->id }}">{{ $seller->name}} ({{ $seller->email}})</option>
                                    @endforeach
                        </select>
                                </div>
                                <div class="text-center">
                                    <button type="submit"
                                        class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Asignar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.layouts.footer')
