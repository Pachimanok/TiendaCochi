<div>
        <a  class="btn btn-danger mt-2 me-2 position-absolute top-0 end-0" data-bs-toggle="offcanvas" href="#offcanvasExample" style="border-radius:50px; background: transparent !important;    border: none;" ><img src="{{asset('assets/img/user.svg')}}" style="height:3em;" alt=""></a>
</div>
<div class="offcanvas offcanvas-start" tabindex="-1" style="max-width:
            60%;" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <button type="button" class="btn-close text-reset" style="color:##ff5765 !important;" data-bs-dismiss="offcanvas"
            aria-label="Close" name="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="row">
            <div class="col-sm-5 mx-auto">
                <div class="text-center">
                    <img src="{{asset('assets/img/user.svg')}}" class="rounded
                                img-fluid" style=";
                                height:
                                4rem;">
                    <h6 class="mb-0" style="color:#fc5876;;margin-top:
                                4px;"> {{ $user->name }}</h6>
                    <p class="text-secondary" style="font-size: small;">{{ $user->email }}</p>
                </div>
            </div>
        </div>
        <div>
            <div class="list-group">
                <a href="/home"
                    class="list-group-item
                            list-group-item-action list-group-item-light"
                    style="border:none; display: flex; text-align:
                            center;">
                    <img src="{{asset('assets/img/3.svg')}}" style="height: 3rem"alt="">
                    <p style="    margin-left: 5px;
                    padding-top: 0.4em;
                    font-size: large;
                    color: #fc5876;">Inicio</p>
                </a>
                <a href="/usuarios/{{$user->id}}"
                    class="list-group-item
                            list-group-item-action list-group-item-light"
                    style="border:none; display: flex; text-align:
                            center;">
                  <img src="{{asset('assets/img/2.svg')}}" style="height: 3rem"alt="">
                  <p style="    margin-left: 5px;
                  padding-top: 0.4em;
                  font-size: large;
                  color: #fc5876;">Perfil</p>
                </a>
                <a href="/promocion"
                    class="list-group-item
                            list-group-item-action list-group-item-light"
                    style="border:none; display: flex; text-align:
                            center;">
                  <img src="{{asset('assets/img/4.svg')}}" style="height: 2.7rem"alt="">
                  <p style="   margin-left: 5px;
                  padding-top: 0.4em;
                  font-size: large;
                  color: #fc5876;">Cód. Dto.</p>
                </a>
                <a href="/logout"
                        class="list-group-item
                                list-group-item-action list-group-item-light"
                        style="border:none; display: flex; text-align:
                                center;">
                        <img src="{{asset('assets/img/5.svg')}}" style="height: 2.7rem"alt="">
                        <p style="    margin-left: 5px;
                        padding-top: 0.4em;
                        font-size: large;
                        color: #fc5876;">Salir</p>
                </a>
            </div>
        </div>
    </div>
</div>