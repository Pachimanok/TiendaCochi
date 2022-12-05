@extends('layouts.header')
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card card-plain">
                        <div class="card-header pb-0 text-left">
                            <h3 class="font-weight-bolder  text-gradient" style="color: ##ff5765;">Ingresar Codigo de Descuento</h3>
                        </div>
                        <div class="card-body">
                            <form action="/promocion/test" method="POST" role="form text-left"
                                enctype="multipart/form-data">
                                {{ method_field('POST') }}
                                @csrf
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Inserte el codigo">
                                </div>
                                @include('layouts.flash-message')
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">
                                        Confirmar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @extends('layouts.sidebar')
    @extends('layouts.footer')