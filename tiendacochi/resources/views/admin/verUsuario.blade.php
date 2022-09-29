@include('admin.layouts.header')

<body class="g-sidenav-show  bg-gray-100">
    @include('admin.layouts.barraLateral')
    <div class="container-fluid">
        <div class="page-header min-height-300 border-radius-xl mt-4"
            style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
        <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
            <div class="row gx-4">
                <div class="col-auto">

                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            Nombre: {{ $usuario->name }}
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                            Rol: {{ $usuario->role }}
                        </p>
                        <p class="mb-0 font-weight-bold text-sm">
                            email: {{ $usuario->email }}
                        </p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <h4 class="mb-1">
                        Descuento: {{ $promocion->descuento}} % <br>
                        <small>Role: {{ $usuario->role }}</small>
                    </h4>
                    @if($userActual->role == "admin")
                    <button type="button" class="btn btn-outline-primary" style="border:none;"
                            data-bs-toggle="modal" data-bs-target="#modal-form"><i class="fas fa-pencil-alt"> Editar</i>
                    </button>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6 mt-2 mb-5">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-md-8 d-flex align-items-center">
                            <h6 class="mb-0">Facturacion:</h6>
                        </div>
                        <div class="col-md-4 text-end">
                        </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    @foreach ($facturacions as $facturacion)
                        <ul class="list-group">
                            <li class="list-group-item border-0 ps-0 pt-0"><strong
                                    class="text-dark">{{ $facturacion->titulo }}</strong></li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Razon
                                    Social:</strong> &nbsp; {{ $facturacion->razon_social }}</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong
                                    class="text-dark">CUIT:</strong> &nbsp; {{ $facturacion->cuit }}</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Condicion
                                    Fiscal:</strong> &nbsp; {{ $facturacion->condicion_fiscal }}</li>
                            <li class="list-group-item border-0 ps-0 pb-0 text-sm">
                                <strong class="text-dark text-sm">Creado:</strong>
                                &nbsp; {{ $facturacion->created_at }}
                            </li>
                        </ul>
                        <hr class="horizontal gray-light my-4">
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-6  mt-2 mb-5">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-md-8 d-flex align-items-center">
                            <h6 class="mb-0">Direccion:</h6>
                        </div>
                        <div class="col-md-4 text-end">

                        </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    @foreach ($direccions as $direccion)
                        <ul class="list-group">
                            <li class="list-group-item border-0 ps-0 pt-0"><strong
                                    class="text-dark">{{ $direccion->titulo }}</strong></li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong
                                    class="text-dark">direccion:</strong> &nbsp; {{ $direccion->calle }}
                                {{ $direccion->numero }} @if ($direccion->piso != null) piso: {{ $direccion->piso }} @endif @if ($direccion->dpto != null) depo: {{ $direccion->dpto }} @endif</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Codigo
                                    Postal:</strong> &nbsp; {{ $direccion->codigoPostal }}</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong
                                    class="text-dark">Localidad:</strong> &nbsp; {{ $direccion->localidad }}
                            </li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong
                                    class="text-dark">Provincia:</strong> &nbsp; {{ $direccion->provincia }}
                            </li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Telefono de
                                    Contacto:</strong> &nbsp; {{ $direccion->telContacto }}</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong
                                    class="text-dark">Referencia:</strong> &nbsp; {{ $direccion->referencia }}
                            </li>
                            <li class="list-group-item border-0 ps-0 pb-0 text-sm">
                                <strong class="text-dark text-sm">Creado:</strong>
                                &nbsp; {{ $direccion->created_at }}
                            </li>
                        </ul>
                        <hr class="horizontal gray-light my-4">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card card-plain">
                        <div class="card-header pb-0 text-left">
                            <h3 class="font-weight-bolder text-info text-gradient">Editar Descuento/Role</h3>
                        </div>
                        <div class="card-body">
                            <form action="/usuarios/{{$usuario->id}}" method="post"  role="form text-left" enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <label>Role:</label>
                                <div class="input-group mb-3">
                                    <select name="role[]" class="form-control">
                                            <option value="{{$usuario->role }}">{{$usuario->role }}</option>
                                            <option value="admin">admin</option>
                                            <option value="seller">seller</option>
                                            <option value="user">user</option>
                                    </select>
                                </div>
                                <label>Codigo de descuento:</label>
                                <div class="input-group mb-3">
                                    <select name="codDesc[]" class="form-control">
                                            <option value="{{$usuario->codigoDescuento }}">{{$usuario->codigoDescuento }}</option>
                                            @foreach ($promociones as $promo)
                                            <option value="{{$promo->titulo }}">{{$promo->titulo }} --> {{$promo->descuento }}%</option>
                                            @endforeach
                                    </select>
                                </div>
                                <div class="text-center">
                                    <button type="submit"
                                        class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Editar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.layouts.footer')
