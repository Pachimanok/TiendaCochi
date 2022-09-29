@include('layouts.header') 
    <div class="container pl-3 mt-4" style="background-color:#af3636 ;">
    @include('layouts.flash-message')
            <div class="card card-body blur shadow-blur mx-1 mt-n6 overflow-hidden" >
                <div class="row gx-4">
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h4 class="mb-1">
                                Nombre: {{ $user->name }}
                            </h4>
                            <h5 class="mb-1">
                            Descuento: {{ $promocion->descuento}} % <br>
                            <small>Role: {{ $user->role }}</small>
                            </h5>
                            <h5 class="mb-1">
                                email: {{ $user->email }}
                            </h5>
                            <button type="button" class="btn btn-outline-primary" style="border:none;"
                            data-bs-toggle="modal" data-bs-target="#modal-form"><i class="fas fa-pencil-alt"></i> Modificar email
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        <div class="row">
            <!-- FACTURACION-->
            <div class="col-6 mt-2 mb-5">
                <div class="card h-100">
                @foreach ($facturacions as $facturacion)
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h6 class="mb-0">Facturación:</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
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
                        <button type="button" class="btn btn-outline-primary" style="border:none;"
                            data-bs-toggle="modal" data-bs-target="#modal-form-{{$facturacion->id}}"><i class="fas fa-pencil-alt"></i> Modificar Facturación
                        </button>
                        <form action="/facturacion/{{ $facturacion->id }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-outline-danger"
                                onclick="return confirm('¿Está seguro que quiere eliminar la facturación?')"
                                style="border:none;"><i class="far fa-trash-alt"></i> Eliminar Facturación</button>
                        </form>
                        <hr class="horizontal gray-light my-4">
                    </div>
                @endforeach
                <a href="/facturacion/{{$user->id}}/vistaNewFact" class="btn btn-outline-success" style="border:none;">
                            <i class="bi bi-plus-circle"></i> Agregar Facturación
                </a>
                </div>
            </div>
            <!-- DIRECCION-->
            <div class="col-6  mt-2 mb-5">
                <div class="card h-100">
                @foreach ($direccions as $direccion)
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h6 class="mb-0">Dirección:</h6>
                            </div>
                            <div class="col-md-4 text-end">
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                            <ul class="list-group">
                                <li class="list-group-item border-0 ps-0 pt-0"><strong
                                    class="text-dark">{{ $direccion->titulo }}</strong></li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong
                                    class="text-dark">dirección:</strong> &nbsp; {{ $direccion->calle }}
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
                            <button type="button" class="btn btn-outline-primary" style="border:none;"
                            data-bs-toggle="modal" data-bs-target="#modal-form-{{$direccion->id}}"><i class="fas fa-pencil-alt"></i> Modificar Dirección
                            </button>
                            <form action="/direccion/{{ $direccion->id }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-outline-danger"
                                onclick="return confirm('¿Está seguro que quiere eliminar la direccion?')"
                                style="border:none;"><i class="far fa-trash-alt"></i> Eliminar Dirección</button>
                            </form>
                            <hr class="horizontal gray-light my-4">
                    </div>
                    @endforeach
                        <a href="/direccion/{{$user->id}}/agregarUbi" class="btn btn-outline-success" style="border:none;">
                            <i class="bi bi-plus-circle"></i> Agregar Dirección
                        </a>
                </div>
            </div>
        </div>
    </div>
    
    <!--modal editar facturacion  -->
    @foreach ($facturacions as $facturacion)
    <div class="modal fade" id="modal-form-{{$facturacion->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-form"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card card-plain">
                        <div class="card-header pb-0 text-left">
                            <h3 class="font-weight-bolder text-info text-gradient">Editar Facturacion</h3>
                        </div>
                        <div class="card-body">
                            <form action="/facturacion/{{$facturacion->id}}" method="post"  role="form text-left" enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <label>Razon social:</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="razon_social" placeholder="Mi Empresa SA" value="{{$facturacion->razon_social  }}" aria-label="razon_social"
                                        aria-describedby="Razon_social">
                                </div>
                                <label>CUIT:</label>
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" name="cuit" placeholder="30715400220" value="{{$facturacion->cuit  }}" aria-label="cuit"
                                        aria-describedby="Cuit">
                                </div>
                                <label>Condicion Fiscal:</label>
                                <div class="input-group mb-3">
                                        <select name="cond_fiscal[]" class="form-control" style="border-left:none; border-right:none; border-top:none;" id="cond_fiscal" require>
                                            <option value="" style="color:gray;">-.seleccionar.-</option>
                                            <option value="Exento">Exento</option>
                                            <option value="Presupuesto">Presupuesto</option>
                                            <option value="Consumidor Final">Consumidor Final</option>
                                            <option value="Responsable Inscripto">Responsable Inscripto</option>
                                            <option value="Responsable Monotributo">Responsable Monotributo</option>
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
    @endforeach

    <!--modal editar email user-->
    <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card card-plain">
                        <div class="card-header pb-0 text-left">
                            <h3 class="font-weight-bolder text-info text-gradient">Editar Email</h3>
                        </div>
                        <div class="card-body">
                            <form action="/usuarios/{{$user->id}}" method="post"  role="form text-left" enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <label>Email:</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="email" placeholder="juan@gmail.com" value="{{$user->email  }}" aria-label="email"
                                        aria-describedby="Email">
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

    <!--modal editar direccion --> 
    @foreach ($direccions as $direccion)
    <div class="modal fade" id="modal-form-{{$direccion->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-form"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card card-plain">
                        <div class="card-header pb-0 text-left">
                            <h3 class="font-weight-bolder text-info text-gradient">Editar direccion</h3>
                        </div>
                        <div class="card-body">
                            <form action="/direccion/{{$direccion->id}}" method="post"  role="form text-left" enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <label>Calle:</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="calle" placeholder="Av. San Martin" value="{{$direccion->calle  }}" aria-label="calle"
                                        aria-describedby="Calle">
                                </div>
                                <label>Número:</label>
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" name="numero" placeholder="3345" value="{{$direccion->numero  }}" aria-label="numero"
                                        aria-describedby="Numero">
                                </div>
                                <label>Piso:</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="piso" placeholder="8" value="{{$direccion->piso  }}" aria-label="piso"
                                        aria-describedby="Piso">
                                </div>
                                <label>Dpto:</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="dpto" placeholder="A" value="{{$direccion->dpto  }}" aria-label="dpto"
                                        aria-describedby="Dpto">
                                </div>
                                <label>Provincia:</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="provincia" placeholder="Mendoza" value="{{$direccion->provincia  }}" aria-label="provincia"
                                        aria-describedby="Provincia">
                                </div>
                                <label>Localidad:</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="localidad" placeholder="Maipú" value="{{$direccion->localidad  }}" aria-label="localidad"
                                        aria-describedby="Localidad">
                                </div>
                                <label>Código Postal:</label> 
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="codigoPostal" placeholder="5515" value="{{$direccion->codigoPostal  }}" aria-label="codigoPostal"
                                        aria-describedby="CodigoPostal">
                                </div>
                                <label>Teléfono de Contacto:</label> 
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="telContacto" placeholder="(261)2128105" value="{{$direccion->telContacto  }}" aria-label="telContacto"
                                        aria-describedby="TelContacto">
                                </div>
                                <label>Alguna referencia:</label> 
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="referencia" placeholder="Es el porton negro" value="{{$direccion->referencia  }}" aria-label="referencia"
                                        aria-describedby="Referencia">
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
    @endforeach
    <!--barra lateral -->
    @extends('layouts.sidebar')

    <script>
    document.ready = document.getElementById("cond_fiscal").value = '{{ $facturacion->condicion_fiscal }}';
    </script>
    @include('layouts.footer')





