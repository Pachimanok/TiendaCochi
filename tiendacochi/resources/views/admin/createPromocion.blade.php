@include('admin.layouts.header')
<div class="container bg-light pt-5">
    @include('admin.layouts.barraLateral')
    <form action="/promocion" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card mt-5">
            <div class="col-sm-10 text-primary mt-3 mx-auto">
                <h4 class="d-flex">
                    <div class="col-sm-2" style="width: auto;">
                        Titulo
                    </div>
                    <input type="text" name="titulo" class="form-control border-primary" style="margin-left: 1rem;"
                        placeholder="UsuarioAmigo" required>
                </h4>
                <h4 class="d-flex">
                    <div class="col-sm-2" style="width: auto;">
                        Descuento
                    </div>
                    <input type="text" name="descuento" class="form-control border-primary" style="margin-left: 1rem;"
                        placeholder="10%" required>
                </h4>
                <h4 class="d-flex">
                    <div class="col-sm-2" style="width: auto;">
                        Vendedor asignar:
                    </div>
                        <select class="form-control" id="seller"
                            style="border-top: none !important;
                            border-right: none;
                            border-left: none;" name="seller[]" >
                            <option value="">Elegir</option>
                            @foreach($sellers as $seller)
                                <option value="{{ $seller->id }}">{{ $seller->name}} ({{ $seller->email}})</option>
                            @endforeach
                        </select>
                </h4>
                <h4 class="d-flex">
                    <div class="col-sm-2" style="width: auto;">
                        Flete
                    </div>
                    <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="flete" id="flete"  value="ON">
                    </div>
                </h4>
                <h4 class="d-flex">
                    <div class="col-sm-2" style="width: auto;">
                        Estado
                    </div>
                    <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="estado" id="estado"  value="ON">
                    </div>
                </h4>
            </div>
            <div class="row">
                <div class="col-sm-5 mx-auto text-center">
                    <button type="submit" class="btn btn-outline-primary m-5">Crear Codigo</button>
                </div>
            </div>
        </div>
    </form>
</div>

</div>
@include('admin.layouts.footer')
