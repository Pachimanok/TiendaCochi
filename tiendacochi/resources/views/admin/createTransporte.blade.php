@include('admin.layouts.header')
<div class="container bg-light pt-5">
    @include('admin.layouts.barraLateral')
    <form action="/transporte" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card mt-5">
            <div class="col-sm-10 text-primary mt-3 mx-auto">
                <h4 class="d-flex">
                    <div class="col-sm-2" style="width: auto;">
                        Titulo
                    </div>
                    <input type="text" name="titulo" class="form-control border-primary" style="margin-left: 1rem;"
                        placeholder="Transporte SRL" required>
                </h4>
                <h4 class="d-flex">
                    <div class="col-sm-2" style="width: auto;">
                        Link Seguimiento
                    </div>
                    <input type="text" name="seguimiento" class="form-control border-primary" style="margin-left: 1rem;"
                        placeholder="https://transportesrl.com/seguimiento" required>
                </h4>
                <h4 class="d-flex">
                    <div class="col-sm-2" style="width: auto;">
                        Email
                    </div>
                    <input type="text" name="email" class="form-control border-primary" style="margin-left: 1rem;"
                        placeholder="Para más de 1 mail, separar solo con coma. Ej: mail1@example,mail2@example" required>
                </h4>
                <h4 class="d-flex">
                    <div class="col-sm-2" style="width: auto;">
                        Email CC
                    </div>
                    <input type="text" name="email_cc" class="form-control border-primary" style="margin-left: 1rem;"
                        placeholder="Ingresar mail de copia" required>
                </h4>
            </div>
            <div class="row">
                <div class="col-sm-5 mx-auto text-center">
                    <button type="submit" class="btn btn-outline-primary m-5">Crear Transporte</button>
                </div>
            </div>
        </div>
    </form>
</div>

</div>
@include('admin.layouts.footer')
