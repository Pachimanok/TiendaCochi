@include('admin.layouts.header')
<body class="g-sidenav-show  bg-gray-100">
    @include('admin.layouts.barraLateral')
  
    <form action="/catalogo" method="post"  enctype="multipart/form-data">
        @csrf
    <div class="card mt-5">
        <div class="col-sm-5 text-center text-primary mt-3 mx-auto">
            <h3 class="d-flex">Titulo<input type="text" name="titulo" class="form-control border-primary" style="margin-left: 1rem;" placeholder="El Viañatero" required></h3>
            <h3 class="d-flex">Subtitulo<input type="text" name="sub_titulo" class="form-control border-primary" style="margin-left: 1rem;" placeholder="Malbec 2020" required></h3>
        </div>
        <div class="row">
            <div class="col-sm-5 mx-auto text-center">
                <input type="file" class="form-control" name="imagen" required>
                 <select name="stock[]" class="form-control mt-3">
                        <option value="si">En Stock</option>
                        <option value="no">Sin Stock</option>
                    </select>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-5 mx-auto text-center">
            <h3 class="d-flex text-primary">Precio<input type="number" name="precio" class="form-control border-primary" style="margin-left: 1rem;" placeholder="2640"required></h3>
            <br>
            <h3 class="d-flex text-primary">Detalle<input type="text" name="detalle" class="form-control border-primary" style="margin-left: 1rem;" placeholder="CAJA X 6u. 750ML"required></h3>
            <select name="estado[]" class="form-control mt-3">
                <option value="activo">Activo</option>
                <option value="no activo">No Activo</option>
            </select>
            <br>
            <h3 class="d-flex text-primary">Orden <input type="text" name="orden"
                class="form-control border-primary" style="margin-left: 1rem;" placeholder="1-100"
              ></h3>
        </div>
        <div class="row">
            <div class="col-sm-5 mx-auto text-center">
              <button type="submit" class="btn btn-outline-primary m-5">Crear Producto</button>
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
