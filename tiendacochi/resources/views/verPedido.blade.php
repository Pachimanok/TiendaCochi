@extends('layouts.header')

<body class="g-sidenav-show mt-2 bg-gray-100">
    <div class="container">
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
                    </li>
                </ul>
            </div>
        </div>
        <div class="card h-50 mb-4 mt-2">
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
    </div>
    <button class="btn btn-danger mt-2 ms-5" onclick="volver_catalogo()"
                    style="border-radius:50px; background: #af3636;">Volver</button>
                    <script>function volver_catalogo(){
                        window.history.back();
                    }</script>
    
    @extends('layouts.sidebar')
    @extends('layouts.footer')

