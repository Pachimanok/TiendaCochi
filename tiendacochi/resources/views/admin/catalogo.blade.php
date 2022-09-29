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
                    <div class="row m-5">
                        <div class="col-sm-5 mx-auto text-center">
                            <a href="/catalogo/create" class="btn btn-primary">Crear Nuevo Producto</a>
                        </div>
                    </div>
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr class="text-center">
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        ID</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Imagin</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Titulo</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Sub Titulo</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Detalle</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Precio</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        stock</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($productos as $producto)
                                    <tr class="text-center">
                                        <th>
                                            <h6 class="mb-0 text-sm">{{ $producto->id }}</h6>
                                        </th>
                                        <td class="align-middle"><img alt="Image placeholder"
                                                src="{{ asset('assets/img/' . $producto->imagen) }}"
                                                class="img-fluid"
                                                style="border-radius:20px; min-height: 3.5rem; height: 6rem;"></td>
                                        <td class="align-middle">{{ $producto->titulo }}</td>
                                        <td class="align-middle">{{ $producto->sub_titulo }}</td>
                                        <td class="align-middle">{{ $producto->detalle }}</td>
                                        <td class="align-middle">{{ $producto->precio }}</td>
                                        <td class="align-middle">{{ $producto->stock }}</td>
                                        </td>

                                        <td>
                                            <div class="btn-group" role="group"
                                                aria-label="Basic outlined example">
                                                <a href="catalogo/{{ $producto->id }}"
                                                    class="btn btn-outline-primary"><i class="far fa-eye"></i></a>
                                                <a href="catalogo/{{ $producto->id }}/edit"
                                                    class="btn btn-outline-primary"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                                <form action="catalogo/{{ $producto->id }}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-outline-primary"
                                                    onclick="return confirm('¿Está seguro que quiere eliminar el producto?')"
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
                
            @include('admin.layouts.footer')
