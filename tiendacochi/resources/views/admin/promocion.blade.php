@include('admin.layouts.header')
<body class="g-sidenav-show  bg-gray-100">
    @include('admin.layouts.barraLateral')
    @include('admin.layouts.alerta')
    <div class="row ml-5">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Codigos de descuento</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="row m-5">
                        <div class="col-sm-5 mx-auto text-center">
                            <a href="/promocion/create" class="btn btn-primary">Crear Nuevo codigo</a>
                        </div>
                    </div>
                    <div class="row m-5">
                        <div class="table-responsive p-0 fixed-table-body">
                            <table class="table table-sm align-items-center mb-0" >
                                <thead>
                                    <tr class="text-center">
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            ID</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Titulo</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Descuento %</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Estado</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Flete</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Creado:</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($promocionesnormales as $promocionnormal)
                                        @if($promocionnormal->seller == '')
                                        <tr class="text-center">
                                            <td>
                                                <h6 class="mb-0 text-sm">{{ $promocionnormal->id }}</h6>
                                            </td>
                                            <td class="align-middle text-truncate">{{ $promocionnormal->titulo }}</td>
                                            <td class="align-middle text-truncate">{{ $promocionnormal->descuento }}%</td>
                                            <td class="align-middle text-truncate">{{ $promocionnormal->estado }}</td>
                                            <td class="align-middle text-truncate">
                                                @if($promocionnormal->flete == 'ON')
                                                    Activo
                                                @else
                                                    No Activo
                                                @endif
                                            </td>
                                            <td class="align-middle text-truncate">{{ $promocionnormal->created_at }}</td>
                                            <td>
                                                <div class="btn-group" role="group"
                                                    aria-label="Basic outlined example">
                                                    <a href="promocion/{{ $promocionnormal->id }}"
                                                        class="btn btn-outline-primary"><i
                                                            class="far fa-eye"></i></a>
                                                            <form action="promocion/{{ $promocionnormal->id }}" method="post">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button type="submit" class="btn btn-outline-primary"
                                                                onclick="return confirm('¿Está seguro que quiere eliminar el codigo?')"
                                                                    style="border:none;"><i class="far fa-trash-alt"></i></button>
                                                            </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!--Codigos de vendedores -->
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Codigos de descuento asignados a vendedores</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="row m-5">
                        <div class="table-responsive p-0 fixed-table-body">
                            <table class="table table-sm align-items-center mb-0" >
                                <thead>
                                    <tr class="text-center">
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            ID</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Titulo</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Descuento %</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Vendedor</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Estado</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Flete</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Creado:</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($promociones as $promocion)
                                        <tr class="text-center">
                                            <td>
                                                <h6 class="mb-0 text-sm">{{ $promocion->id }}</h6>
                                            </td>
                                            <td class="align-middle text-truncate">{{ $promocion->titulo }}</td>
                                            <td class="align-middle text-truncate">{{ $promocion->descuento }}%</td>
                                            <td class="align-middle text-truncate">{{ $promocion->name }}</td>
                                            <td class="align-middle text-truncate">{{ $promocion->estado }}</td>
                                            <td class="align-middle text-truncate">
                                                @if($promocion->flete == 'ON')
                                                    Activo
                                                @else
                                                    No Activo
                                                @endif
                                            </td>
                                            <td class="align-middle text-truncate">{{ $promocion->created_at }}</td>
                                            <td>
                                                <div class="btn-group" role="group"
                                                    aria-label="Basic outlined example">
                                                    <a href="promocion/{{ $promocion->id }}"
                                                        class="btn btn-outline-primary"><i
                                                            class="far fa-eye"></i></a>
                                                            <form action="promocion/{{ $promocion->id }}" method="post">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button type="submit" class="btn btn-outline-primary"
                                                                onclick="return confirm('¿Está seguro que quiere eliminar el codigo?')"
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
    </div>
        @include('admin.layouts.footer')
