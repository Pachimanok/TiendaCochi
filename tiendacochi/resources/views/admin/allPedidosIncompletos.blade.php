@include('admin.layouts.header')

<body class="g-sidenav-show  bg-gray-100">
    @include('admin.layouts.barraLateral')
    @include('admin.layouts.alerta')
    <div class="row ml-5">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Pedidos Incompletos</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr class="text-center">
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        ID</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        User</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Detalle</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Medio de Pago</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Fecha</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pedidosComprando as $pedidoN)
                                    <tr class="text-center">
                                        <th>
                                            <h6 class="mb-0 text-sm">{{ $pedidoN->id }}</h6>
                                        </th>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $pedidoN->user }}</p>
                                        </td>
                                        <td style="text-truncate">
                                            <p class="text-xs text-secondary mb-0">
                                                @foreach ($detalles as $detalle)
                                                    @if ($pedidoN->id == $detalle->id_pedido)
                                                        {{ $detalle->cantidad . ' - ' . $detalle->producto }}
                                                    @endif
                                                @endforeach
                                            </p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $pedidoN->modo_pago }}
                                                @if ($pedidoN->estado_pago == 'pagado')<span class="badge badge-sm bg-gradient-success">Pagado</span> @else <span class="badge badge-sm bg-gradient-secondary">No Pagado</span>@endif</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $pedidoN->created_at }}</p>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group"
                                                aria-label="Basic outlined example">
                                                <a href="adminPedido/{{ $pedidoN->id }}"
                                                    class="btn btn-outline-primary" style="border:none;"><i
                                                        class="far fa-eye"></i></a>
                                                <a href="adminPedido/{{ $pedidoN->id }}/edit"
                                                    class="btn btn-outline-primary" style="border:none;"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                                <form action="adminPedido/{{ $pedidoN->id }}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-outline-primary"
                                                    onclick="return confirm('¿Está seguro que quiere eliminar el pedido?')"
                                                        style="border:none;"><i class="far fa-trash-alt"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.layouts.footer')
