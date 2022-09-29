@include('admin.layouts.header')
<body class="g-sidenav-show  bg-gray-100">
  @include('admin.layouts.barraLateral')
    <div class="card mt-5">
        <div class="col-sm-5 text-center text-primary mt-3 mx-auto">
            <h3>Titulo: {{$promocion->titulo}}</h3>
        </div>
        <div class="col-sm-5 text-center text-primary mt-3 mx-auto">
            <h3>Descuento: {{$promocion->descuento}}%</h3>
        </div>
        <div class="col-sm-5 text-center text-primary mt-3 mx-auto">
            <div class="col-sm-5 mx-auto text-center">
                @if($promocion->flete == 'ON')       
                    <h3>Flete: Activo</h3>
                @else
                    <h3>Estado: No Activo</h3>
                @endif
            </div>
        </div>
        @if($promocion->seller != '')
            <div class="col-sm-5 text-center text-primary mt-3 mx-auto">
                <h3>Vendedor: {{$vendedor->name}}</h3>
            </div>
        @endif
        <div class="col-sm-5 text-center text-primary mt-3 mx-auto">
            <div class="col-sm-5 mx-auto text-center">
                @if($promocion->estado == 'ON')       
                    <h3>Estado: <span class="badge bg-success">Activo</span></h3>
                @else
                    <h3>Estado: <span class="badge bg-warning">No Activo</span></h3>
                @endif
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-5 mx-auto text-center">
                <button type="button" class="btn btn-outline-primary" style="border:none;"
                            data-bs-toggle="modal" data-bs-target="#modal-form"><i class="fas fa-pencil-alt"></i> Modificar
                </button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card card-plain">
                        <div class="card-header pb-0 text-left">
                            <h3 class="font-weight-bolder text-info text-gradient">Editar Codigo</h3>
                        </div>
                        <div class="card-body">
                            <form action="/promocion/{{ $promocion->id }}" method="post" role="form text-left"
                                enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <label>Titulo:</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="titulo" placeholder="UsuarioAmigo"
                                        value="{{ $promocion->titulo }}">
                                </div>
                                <label>Descuento:</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="descuento"
                                        placeholder="15%"
                                        value="{{ $promocion->descuento }}">
                                </div>
                                <label>Flete:</label>
                                <div class="input-group mb-3">
                                        @if($promocion->flete == 'ON')       
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" name="flete" id="flete"  value="ON" checked>
                                            <label class="form-check-label" for="flexSwitchCheckDefault" >No activo / Activo</label>
                                        </div>
                                        @else
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" name="flete" id="flete"  value="ON">
                                            <label class="form-check-label" for="flexSwitchCheckDefault">No activo / Activo</label>
                                        </div>
                                        @endif
                                </div>

                                @if($promocion->seller != '')
                                <label>Vendedor:</label>
                                <div class="input-group mb-3">
                                    <select class="form-control" id="seller"
                                        style="border-top: none !important;
                                        border-right: none;
                                        border-left: none;" name="seller[]"  >
                                        <option value="">Elegir</option>
                                            @foreach($sellers as $seller)
                                            <option value="{{ $seller->id }}">{{ $seller->name}} ({{ $seller->email}})</option>
                                            @endforeach
                                        </select>
                                </div>
                                @endif
                                <label>Estado:</label>
                                <div class="input-group mb-3">
                                        @if($promocion->estado == 'ON')       
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" name="estado" id="estado"  value="ON" checked>
                                            <label class="form-check-label" for="flexSwitchCheckDefault" >No activo / Activo</label>
                                        </div>
                                        @else
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" name="estado" id="estado"  value="ON">
                                            <label class="form-check-label" for="flexSwitchCheckDefault">No activo / Activo</label>
                                        </div>
                                        @endif
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
