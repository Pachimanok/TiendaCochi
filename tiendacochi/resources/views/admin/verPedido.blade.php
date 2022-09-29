@include('admin.layouts.header')

<body class="g-sidenav-show  bg-gray-100">
    @include('admin.layouts.barraLateral')
    <div class="card">
        <div class="card-header pb-0 px-3">
            <h6 class="mb-0">Pedido # {{ $pedido->id }}</h6>
        </div>
        <div class="card-body pt-4 p-3">
            <ul class="list-group">
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                    <div class="d-flex flex-column">
                        <h6 class="mb-3 text-sm">{{ $pedido->user }}</h6>
                        <span class="mb-2 text-xs">Seguimiento: <span
                                class="text-dark font-weight-bold ms-sm-2">{{ $pedido->seguimiento }}</span></span>
                        <span class="mb-2 text-xs">Modo de Pago: <span
                                class="text-dark ms-sm-2 font-weight-bold">{{ $pedido->modo_pago }}</span></span>
                        <p @if ($pedido->estado_pago == 'por cobrar') class="text-danger" @else class="text-success" @endif><strong>Total: </strong> $ {{ $pedido->total }}.00</p>
                    </div>
                    <div class="ms-auto text-end d-flex">
                        <form action="/adminPedido/{{ $pedido->id }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-link text-danger text-gradient px-3 mb-0"
                            onclick="return confirm('¿Está seguro que quiere eliminar el pedido?')"
                                style="border:none;"><i class="far fa-trash-alt me-2"></i> Delete</button>
                        </form>
                        <a class="btn btn-link text-dark px-3 mb-0" href="/adminPedido/{{ $pedido->id }}/edit"><i
                                class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="card h-100 mb-4">
        <div class="card-header pb-0 px-3">
            <div class="row">
                <div class="col-md-6">
                    <h6 class="mb-0">Detalle del pedido</h6>
                </div>
                <div class="col-md-6 d-flex justify-content-end align-items-center">
                    <i class="far fa-calendar-alt me-2"></i>
                    <small>23 - 30 March 2020</small>
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
                                <button
                                    class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i
                                        class="fas fa-arrow-down"></i></button>
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
                                <ul class="list-group">
                                    <li
                                        class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                        <div class="d-flex align-items-center">
                                            <button
                                                class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                    class="fas fa-arrow-down"></i></button>
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-1 text-dark text-sm"><strong>Tipo Contribuyente:
                                                    </strong>{{ $facturacion->condicion_fiscal }}</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                        <div class="d-flex align-items-center">
                                            <button
                                                class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                    class="fas fa-arrow-down"></i></button>
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-1 text-dark text-sm"><strong>Razon Social:
                                                    </strong>{{ $facturacion->razon_social }}</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                        <div class="d-flex align-items-center">
                                            <button
                                                class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                    class="fas fa-arrow-down"></i></button>
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-1 text-dark text-sm"><strong>CUIT:
                                                    </strong>{{ $facturacion->cuit }}</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                        <div class="d-flex align-items-center">
                                            <button
                                                class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                    class="fas fa-arrow-down"></i></button>
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-1 text-dark text-sm"><strong>Persona de Contacto:
                                                    </strong>{{ $pedido->user }}</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                        <div class="d-flex align-items-center">
                                            <button
                                                class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                    class="fas fa-arrow-down"></i></button>
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-1 text-dark text-sm"><strong>Telefono Contacto:
                                                    </strong>{{ $pedido->telContacto }}</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                        <div class="d-flex align-items-center">
                                            <button
                                                class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                    class="fas fa-arrow-down"></i></button>
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-1 text-dark text-sm"><strong>E-mail: </strong>{{ $pedido->email }}</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                        <div class="d-flex align-items-center">
                                            <button
                                                class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                    class="fas fa-arrow-down"></i></button>
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-1 text-dark text-sm"><strong>Vendedor: </strong>{{ $pedido->seller }}</h6>
                                            </div>
                                        </div>
                                    </li>
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
                            <h6 class="mb-0">Detalle del Facturacion:</h6>
                        </div>

                    </div>
                </div>
                <div class="card-body pt-4 p-3">
                    <h6 class="text-uppercase text-body text-xs font-weight-bolder mb-3">Datos:</h6>
                    <ul class="list-group">
                    @if ($pedido->id_dir != 'retiroBodega' )
                        @foreach ($direccion as $direccion)
                                @if ($pedido->id_dir == $direccion->id)
                                    <ul class="list-group">
                                        <li
                                            class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="fas fa-arrow-down"></i></button>
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
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="fas fa-arrow-down"></i></button>
                                                <div class="d-flex flex-column">
                                                    <h6 class="mb-1 text-dark text-sm"><strong>Codigo Postal:
                                                        </strong>{{ $direccion->codigoPostal }}
                                                </div>
                                            </div>
                                        </li>
                                        <li
                                            class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="fas fa-arrow-down"></i></button>
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
                                            <button
                                                class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                    class="fas fa-arrow-down"></i></button>
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-1 text-dark text-sm"><strong>Localidad:
                                                    </strong>{{ $direccion->localidad }}</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                        <div class="d-flex align-items-center">
                                            <button
                                                class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                    class="fas fa-arrow-down"></i></button>
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-1 text-dark text-sm"><strong><strong>Telefono:
                                                        </strong>{{ $direccion->telContacto }}</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                        <div class="d-flex align-items-center">
                                            <button
                                                class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                    class="fas fa-arrow-down"></i></button>
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-1 text-dark text-sm"><strong><strong>Horario:
                                                        </strong>#agregar al pedido</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                        <div class="d-flex align-items-center">
                                            <button
                                                class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                    class="fas fa-arrow-down"></i></button>
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
    @include('admin.layouts.footer')
