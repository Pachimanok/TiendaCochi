@include('admin.layouts.header')
<body class="g-sidenav-show  bg-gray-100">
    @include('admin.layouts.barraLateral')
    @include('admin.layouts.alerta')
    <div class="row ml-5">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Transportes</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="row m-5">
                        <div class="col-sm-5 mx-auto text-center">
                            <a href="/transporte/create" class="btn btn-primary">Crear Nuevo Transporte</a>
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
                                            seguimiento</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            email</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            email CC</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Creado:</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transportes as $transporte)
                                        <tr class="text-center">
                                            <td>
                                                <h6 class="mb-0 text-sm">{{ $transporte->id }}</h6>
                                            </td>
                                            <td class="align-middle text-truncate">{{ $transporte->title }}</td>
                                            <td class="align-middle text-truncate">{{ $transporte->link_seguimiento }}</td>
                                            <td class="align-middle text-truncate">{{ $transporte->email }}</td>
                                            <td class="align-middle text-truncate">{{ $transporte->email_cc }}</td>
                                            <td class="align-middle text-truncate">{{ $transporte->created_at }}</td>
                                            <td>
                                                <div class="btn-group" role="group"
                                                    aria-label="Basic outlined example">
                                                    <a href="transporte/{{ $transporte->id }}"
                                                        class="btn btn-outline-primary"><i
                                                            class="far fa-eye"></i></a>
                                                            <form action="transporte/{{ $transporte->id }}" method="post">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button type="submit" class="btn btn-outline-primary"
                                                                onclick="return confirm('¿Está seguro que quiere eliminar el transporte?')"
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
