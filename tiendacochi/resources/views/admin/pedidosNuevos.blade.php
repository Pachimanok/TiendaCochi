@include('admin.layouts.header')
<div class="container bg-light pt-5">

    <nav class="navbar fixed-top navbar-light bg-light">
        <div class="container-fluid">
            <div class="col-sm-3">
                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    Menu
                </button>
            </div>
            <div class="col-sm-7">
                <h1 class="text-center">Pedidos Nuevos</h1>
            </div>
        </div>
    </nav>
    <div class="card mt-5">
        <div class="col-sm-5 text-center text-primary mt-3 mx-auto">
            <h3>Pedidos Nuevos</h3>
        </div>
        <table class="table table-striped table-hover mx-auto ml-5 text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">User</th>
                    <th scope="col">Detalle</th>
                    <th scope="col">Medio de Pago</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pedidosNuevos as $pedidoN)
                <tr>
                    
                    <th scope="row">{{ $pedidoN->id}}</th>
                    <td>{{ $pedidoN->user}}</td>
                    <td style="text-truncate"> @foreach($detalles as $detalle)
                            @if( $pedidoN->id == $detalle->id_pedido )
                                {{ $detalle->cantidad .' - '. $detalle->producto}}
                            @endif
                        @endforeach
                    </td>
                    <td>{{ $pedidoN->modo_pago}}</td>
                    <td>{{ $pedidoN->created_at}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                            <button type="button" class="btn btn-outline-primary"><i class="far fa-eye"></i></button>
                            <button type="button" class="btn btn-outline-primary"><i class="fas fa-pencil-alt"></i></button>
                            <button type="button" class="btn btn-outline-primary"><i class="far fa-trash-alt"></i></button>
                          </div>
                    </td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    {{-- Navegacion --}}
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
                Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images,
                lists, etc.
            </div>
            <div class="dropdown mt-3">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-bs-toggle="dropdown">
                    Dropdown button
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
    </div>
    {{-- Navegacion --}}
</div>
@include('admin.layouts.footer')
