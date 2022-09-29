@include('admin.layouts.header')
<body class="g-sidenav-show  bg-gray-100">
  @include('admin.layouts.barraLateral')
  @include('admin.layouts.alerta')
    <div class="row ml-5">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Pedidos Nuevos</h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr class="text-center">
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ID</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">User</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Detalle</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Medio de Pago</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Opciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($pedidosNuevos as $pedidoN)
                    <tr class="text-center">
                        <th>
                          <h6 class="mb-0 text-sm">{{ $pedidoN->id }}</h6>
                        </th>
                        <td><p class="text-xs font-weight-bold mb-0">{{ $pedidoN->user }}</p></td>
                        <td style="text-truncate">
                          <p class="text-xs text-secondary mb-0">
                            @foreach ($detalles as $detalle)
                                @if ($pedidoN->id == $detalle->id_pedido)
                                    {{ $detalle->cantidad . ' - ' . $detalle->producto }}
                                @endif
                            @endforeach
                          </p>
                        </td>
                        <td><p class="text-xs font-weight-bold mb-0">{{ $pedidoN->modo_pago }} @if($pedidoN->estado_pago == 'pagado')<span class="badge badge-sm bg-gradient-success">Pagado</span> @else <span class="badge badge-sm bg-gradient-secondary">No Pagado</span>@endif</p></td>
                        <td><p class="text-xs font-weight-bold mb-0">{{ $pedidoN->created_at }}</p></td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic outlined example">
                                <a href="adminPedido/{{ $pedidoN->id }}" class="btn btn-outline-primary" style="border:none;"><i
                                        class="far fa-eye"></i></a>
                                <a href="adminPedido/{{ $pedidoN->id }}/edit" class="btn btn-outline-primary" style="border:none;"><i
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
          <div class="col-sm-5 mx-auto text-center mt-3 mb-3">
            <a class="btn bg-gradient-dark mb-0" href="/nuevos">Ver los {{ $qnuevos }} pedidos nuevos</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Pedidos Facturados</h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7 ps-2">ID</th>
                    <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7 ps-2">User</th>
                    <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7 ps-2">Detalle</th>
                    <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7 ps-2">Medio de Pago</th>
                    <th class="text-center text-uppercase text-secondary  text-xxs font-weight-bolder opacity-7">Fecha</th>
                    <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7 ps-2">Opciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($pedidosFacturados as $pedidoF)
                    <tr class="text-center">
                        <th>
                          <h6 class="mb-0 text-sm">{{ $pedidoF->id }}</h6>
                        </th>
                        <td><p class="text-xs font-weight-bold mb-0">{{ $pedidoF->user }}</p></td>
                        <td style="text-truncate">
                          <p class="text-xs text-secondary mb-0">
                            @foreach ($detalles as $detalle)
                                @if ($pedidoF->id == $detalle->id_pedido)
                                    {{ $detalle->cantidad . ' - ' . $detalle->producto }}
                                @endif
                            @endforeach
                          </p>
                        </td>
                        <td><p class="text-xs font-weight-bold mb-0">{{ $pedidoF->modo_pago }} @if($pedidoF->estado_pago == 'pagado')<span class="badge badge-sm bg-gradient-success">Pagado</span> @else <span class="badge badge-sm bg-gradient-secondary">No Pagado</span>@endif</p></td>
                        <td><p class="text-xs font-weight-bold mb-0">{{ $pedidoF->created_at }}</p></td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic outlined example">
                                <a href="adminPedido/{{ $pedidoF->id }}" class="btn btn-outline-primary" style="border:none;"><i
                                        class="far fa-eye"></i></a>
                                <a href="adminPedido/{{ $pedidoF->id }}/edit" class="btn btn-outline-primary" style="border:none;"><i
                                        class="fas fa-pencil-alt"></i></a>
                                        <form action="adminPedido/{{ $pedidoF->id }}" method="post">
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
          <div class="col-sm-5 mx-auto text-center mt-1 mb-2">
            <a class="btn bg-gradient-dark mb-0" href="/facturados">Ver los {{ $qfacturados }} pedidos facturados</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Pedidos Solicitados Despacho</h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ID</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">User</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Detalle</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Medio de Pago</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($pedidosDespacho as $pedidoD)
                    <tr>
                        <th>
                          <h6 class="mb-0 text-sm">{{ $pedidoD->id }}</h6>
                        </th>
                        <td><p class="text-xs font-weight-bold mb-0">{{ $pedidoD->user }}</p></td>
                        <td style="text-truncate">
                          <p class="text-xs text-secondary mb-0">
                            @foreach ($detalles as $detalle)
                                @if ($pedidoD->id == $detalle->id_pedido)
                                    {{ $detalle->cantidad . ' - ' . $detalle->producto }}
                                @endif
                            @endforeach
                          </p>
                        </td>
                        <td><p class="text-xs font-weight-bold mb-0">{{ $pedidoD->modo_pago }} @if($pedidoD->estado_pago == 'pagado')<span class="badge badge-sm bg-gradient-success">Pagado</span> @else <span class="badge badge-sm bg-gradient-secondary">No Pagado</span>@endif</p></td>
                        <td><p class="text-xs font-weight-bold mb-0">{{ $pedidoD->created_at }}</p></td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic outlined example">
                                <a href="adminPedido/{{ $pedidoD->id }}" class="btn btn-outline-primary" style="border:none;"><i
                                        class="far fa-eye"></i></a>
                                <a href="adminPedido/{{ $pedidoD->id }}/edit" class="btn btn-outline-primary" style="border:none;"><i
                                        class="fas fa-pencil-alt"></i></a>
                                        <form action="adminPedido/{{ $pedidoD->id }}" method="post">
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
          <div class="col-sm-5 mx-auto text-center mt-1 mb-2">
            <a class="btn bg-gradient-dark mb-0" href="/despacho">Ver los {{ $qdespacho }} pedidos despacho</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Pedidos Enviados</h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ID</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">User</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Detalle</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Medio de Pago</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($pedidosEnviados as $pedidoE)
                    <tr>
                        <th>
                          <h6 class="mb-0 text-sm">{{ $pedidoE->id }}</h6>
                        </th>
                        <td><p class="text-xs font-weight-bold mb-0">{{ $pedidoE->user }}</p></td>
                        <td style="text-truncate">
                          <p class="text-xs text-secondary mb-0">
                            @foreach ($detalles as $detalle)
                                @if ($pedidoE->id == $detalle->id_pedido)
                                    {{ $detalle->cantidad . ' - ' . $detalle->producto }}
                                @endif
                            @endforeach
                          </p>
                        </td>
                        <td><p class="text-xs font-weight-bold mb-0">{{ $pedidoE->modo_pago }} @if($pedidoE->estado_pago == 'pagado')<span class="badge badge-sm bg-gradient-success">Pagado</span> @else <span class="badge badge-sm bg-gradient-secondary">No Pagado</span>@endif</p></td>
                        <td><p class="text-xs font-weight-bold mb-0">{{ $pedidoE->created_at }}</p></td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic outlined example">
                                <a href="adminPedido/{{ $pedidoE->id }}" class="btn btn-outline-primary" style="border:none;"><i
                                        class="far fa-eye"></i></a>
                                <a href="adminPedido/{{ $pedidoE->id }}/edit" class="btn btn-outline-primary" style="border:none;"><i
                                        class="fas fa-pencil-alt"></i></a>
                                        <form action="adminPedido/{{ $pedidoE->id }}" method="post">
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
          <div class="col-sm-5 mx-auto text-center mt-1 mb-2">
            <a class="btn bg-gradient-dark mb-0" href="/enviados">Ver los {{ $qenviados }} pedidos enviados</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Pedidos Incompletos</h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ID</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">User</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Detalle</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Medio de Pago</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($pedidosComprando as $pedidoC)
                    <tr>
                        <th>
                          <h6 class="mb-0 text-sm">{{ $pedidoC->id }}</h6>
                        </th>
                        <td><p class="text-xs font-weight-bold mb-0">{{ $pedidoC->user }}</p></td>
                        <td style="text-truncate">
                          <p class="text-xs text-secondary mb-0">
                            @foreach ($detalles as $detalle)
                                @if ($pedidoC->id == $detalle->id_pedido)
                                    {{ $detalle->cantidad . ' - ' . $detalle->producto }}
                                @endif
                            @endforeach
                          </p>
                        </td>
                        <td><p class="text-xs font-weight-bold mb-0">{{ $pedidoC->modo_pago }} @if($pedidoC->estado_pago == 'pagado')<span class="badge badge-sm bg-gradient-success">Pagado</span> @else <span class="badge badge-sm bg-gradient-secondary">No Pagado</span>@endif</p></td>
                        <td><p class="text-xs font-weight-bold mb-0">{{ $pedidoC->created_at }}</p></td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic outlined example">
                                <a href="adminPedido/{{ $pedidoC->id }}" class="btn btn-outline-primary" style="border:none;"><i
                                        class="far fa-eye"></i></a>
                                <a href="adminPedido/{{ $pedidoC->id }}/edit" class="btn btn-outline-primary" style="border:none;"><i
                                        class="fas fa-pencil-alt"></i></a>
                                <form action="adminPedido/{{ $pedidoC->id }}" method="post">
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
          <div class="col-sm-5 mx-auto text-center mt-1 mb-2">
            <a class="btn bg-gradient-dark mb-0" href="/incompletos">Ver los {{ $qcomprando }} pedidos comprando</a>
          </div>
        </div>
      </div>
    </div>
</div>
@include('admin.layouts.footer')
