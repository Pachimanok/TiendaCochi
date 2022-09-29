@include('admin.layouts.header')

<body class="g-sidenav-show  bg-gray-100">
    @include('admin.layouts.barraLateral')
    <form action="/catalogo/{{ $producto->id }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="card mt-5">
            <div class="col-sm-5 text-center text-primary mt-3 mx-auto">
                <h3 class="d-flex">Titulo<input type="text" name="titulo" class="form-control border-primary"
                        style="margin-left: 1rem;" value="{{ $producto->titulo }}"></h3>
                <h3 class="d-flex">Subtitulo<input type="text" name="sub_titulo"
                        class="form-control border-primary" style="margin-left: 1rem;"
                        value="{{ $producto->sub_titulo }}"></h3>
            </div>
            <div class="col-sm-1 mx-auto">
                <img alt="Image placeholder" src="{{ asset('assets/img/' . $producto->imagen) }}"
                    class="img-fluid" style="border-radius:20px;">


            </div>
            <div class="row">
                <div class="col-sm-5 mx-auto text-center">
                    <input type="file" class="form-control" name="imagen">
                    <input type="hidden" class="form-control" name="imagenActual" value="{{ $producto->imagen }}">
                    @if ($producto->stock == 'no')
                        <select name="stock[]" class="form-control mt-3">
                            <option value="si">En Stock</option>
                            <option value="no">Sin Stock</option>
                        </select>
                    @else
                        <select name="stock[]" class="form-control mt-3">
                            <option value="no">Sin Stock</option>
                            <option value="si">En Stock</option>
                        </select>
                    @endif
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-5 mx-auto text-center">
                    <h3 class="d-flex text-primary">Precio<input type="text" name="precio"
                            class="form-control border-primary" style="margin-left: 1rem;"
                            value="{{ $producto->precio }}"></h3>
                    <br>
                    <h3 class="d-flex text-primary">Detalle<input type="text" name="detalle"
                            class="form-control border-primary" style="margin-left: 1rem;"
                            value="{{ $producto->detalle }}"></h3>

                    @if ($producto->estado == 'activo')
                        <select name="estado[]" class="form-control mt-3">
                            <option value="activo">Activo</option>
                            <option value="no activo">No Activo</option>
                        </select>
                    @else
                        <select name="estado[]" class="form-control mt-3">
                            <option value="no activo">No Activo</option>
                            <option value="activo">Activo</option>

                        </select>
                    @endif
                    <br>
                    
                        <h3 class="d-flex text-primary">Orden <input type="text" name="orden"
                                class="form-control border-primary" style="margin-left: 1rem;"
                                value="{{ $producto->orden }}"></h3>
                    </div>
                    <div class="row">
                        <div class="col-sm-5 mx-auto text-center">
                            <button type="submit" class="btn btn-outline-primary m-5">Editar Producto</button>
                        </div>
                    </div>
    </form>
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
