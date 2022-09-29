@include('admin.layouts.header')
<body class="g-sidenav-show  bg-gray-100">
    @include('admin.layouts.barraLateral')
    @include('admin.layouts.alerta')
    <div class="row ml-5">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Usuarios</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr class="text-center">
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        ID</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Nombre</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        rol</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        email</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Codigo de Descuento</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Creado:</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($usuarios as $usuario)
                                    <tr class="text-center">
                                        <th>
                                            <h6 class="mb-0 text-sm">{{ $usuario->id }}</h6>
                                        </th>
                                        <td class="align-middle">{{ $usuario->name }}</td>
                                        <td class="align-middle">{{ $usuario->role }}</td>
                                        <td class="align-middle">{{ $usuario->email }}</td>
                                        <td class="align-middle">{{ $usuario->codigoDescuento }}</td>
                                        <td class="align-middle">{{ $usuario->created_at }}</td>
                                        
                                        </td>

                                        <td>
                                            <div class="btn-group" role="group"
                                                aria-label="Basic outlined example">
                                                <a href="usuarios/{{ $usuario->id }}"
                                                    class="btn btn-outline-primary"><i class="far fa-eye"></i></a>
                                                <form action="usuarios/{{ $usuario->id }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button  onclick="return confirm('¿Quieres eliminar este usuario?')"  class="btn btn-outline-primary"><i
                                                        class="far fa-trash-alt"></i></button>
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
