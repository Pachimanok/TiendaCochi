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
                            Titulo: {{ $transporte->title }}
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                            Seguimiento: {{ $transporte->link_seguimiento }}
                        </p>
                        <p class="mb-0 font-weight-bold text-sm">
                            email: {{ $transporte->email  }}
                        </p>
                        <p class="mb-0 font-weight-bold text-sm">
                            email cc: {{ $transporte->email_cc  }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <h4 class="mb-1">

                        <button type="button" class="btn btn-outline-primary" style="border:none;"
                            data-bs-toggle="modal" data-bs-target="#modal-form"><i class="fas fa-pencil-alt"></i> Modificar
                        </button>
                    </h4>
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
                            <h6 class="mb-0">Pedidos Realizados:</h6>
                        </div>
                        <div class="col-md-4 text-end">
                        </div>
                    </div>
                </div>
                <div class="card-body p-3 text-center">
                    <img src="{{ asset('assets/img/Trabajando.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        <div class="col-6  mt-2 mb-5">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-md-8 d-flex align-items-center">
                            <h6 class="mb-0">Pedidos activos:</h6>
                        </div>
                        <div class="col-md-4 text-end">

                        </div>
                    </div>
                </div>
                <div class="card-body p-3 text-center">
                    <img src="{{ asset('assets/img/Trabajando.png') }}" class="img-fluid" alt="">
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
                            <h3 class="font-weight-bolder text-info text-gradient">Editar descuento</h3>
                        </div>
                        <div class="card-body">
                            <form action="/transporte/{{ $transporte->id }}" method="post" role="form text-left"
                                enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <label>Titulo:</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="title" placeholder="Transporte SRL"
                                        value="{{ $transporte->title }}">
                                </div>
                                <label>Link Seguimiento:</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="seguimiento"
                                        placeholder="https://transportesrl.com/seguimiento"
                                        value="{{ $transporte->link_seguimiento }}">
                                </div>
                                <label>Mail para Instrucciones: (separar con comas y sin espacios)</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="email"
                                        placeholder="juanperez@transporsrl.com,logistica@transportesrl.com"
                                        value="{{ $transporte->email }}">
                                </div>
                                <label>Mail en copia: (separar con comas y entre comillas)</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="email_cc"
                                        placeholder="juanperez@transporsrl.com"
                                        value="{{ $transporte->email_cc }}">
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
