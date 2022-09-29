@include('admin.layouts.header')
<body class="g-sidenav-show  bg-gray-100">
  @include('admin.layouts.barraLateral')
    <div class="card mt-5">
        <div class="col-sm-5 text-center text-primary mt-3 mx-auto">
            <h3>{{$producto->titulo}}</h3>
            <h5>{{$producto->sub_titulo}}</h5>

        </div>
        <div class="col-sm-1 mx-auto">
            <img alt="Image placeholder"
            src="{{ asset('assets/img/' . $producto->imagen) }}"
            class="img-fluid" style="border-radius:20px;">
            
        </div>
        <div class="row">
            <div class="col-sm-5 mx-auto text-center">
                @if($producto->stock == 'no')       
                    <img src="{{asset('assets/img/SINSTOCK.png')}}" alt="" style="width: 18rem; margin-top: -32.5rem; "class="img-fluid">
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 mx-auto text-center">
                <h1 class="text-center text-primary display-5">$ {{ $producto->precio}}.00</h1>
                <p class="text-center">{{ $producto->detalle}}</p>
                <span class="badge bg-success">Activo</span>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 mx-auto text-center">
              <a href="/catalogo/{{$producto->id}}/edit" class="btn btn-outline-primary m-5">Editar Producto</a>
            </div>
        </div>
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
