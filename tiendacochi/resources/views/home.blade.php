@extends('layouts.header')
@extends('layouts.flash-message')
<img src="http://rail.com.ar/50OFF.gif" alt="" class="img-fluid">
<div class="container pl-3 mt-4 ">
    <img src="{{asset('assets/img/homeWine.svg')}}" style="    width: -webkit-fill-available;
    margin-top: 3rem;" alt="">
    <div class="d-grid gap-2">
        <a href="/catalogo" class="btn btn-danger mb-5 mt-5" style="border-radius:50px; background:linear-gradient(90deg, rgba(255,88,90,1) 35%, rgba(248,87,166,1) 100%);padding: 1rem;">HACER UN
            PEDIDO</a>
    </div>
    <div class="row g-3">
        <div class="col">
            <h2 class="text-center text-dark">Últimos pedidos</h2>
        </div>
    </div>
    @if ($qp >= 1)
        @foreach ($pedidos as $pedido)
            <div class="card" style=" border: none;
            box-shadow: -2px 12px 25px -10px rgba(0,0,0,0.55);
            -webkit-box-shadow: -2px 12px 25px -10px rgba(0,0,0,0.55);
            -moz-box-shadow: -2px 12px 25px -10px rgba(0,0,0,0.55);border-radius: 10px 10px 10px 10px;
            margin-bottom:1rem;
            ">
                <div class="d-flex" style="background:#af3636; border-radius: 10px 10px 0 0;">
                    <div class="col align-middle">
                        <h5 class="text-white mt-2" style="margin-left: 1rem;"> Pedido #00{{ $pedido->id }}</h5>
                    </div>
                    <div class="col text-center">
                        <small class="text-white">
                            <p class="text-white  "
                                style="text-align:right; margin-right:.5rem; margin-top:.7rem !important;">
                                @if ($pedido->estado == 'comprado')
                                    <span class="badge bg-warning text-warning align-middle"
                                        style="padding: 1px 5px; border-radius: 50%; margin-right:4px">.</span>
                                    Solicitado
                                @elseif($pedido->estado == 'facturado')<span
                                        class="badge bg-success text-success align-middle"
                                        style="padding: 1px 5px; border-radius: 50%; margin-right:4px">.</span>En
                                    Preparacion
                                @elseif($pedido->estado == 'SolicitadoDespacho')<span
                                    class="badge bg-info text-info align-middle"
                                    style="padding: 1px 5px; border-radius: 50%; margin-right:4px">.</span>Prepadado
                                @elseif($pedido->estado == 'enviado')<span
                                        class="badge bg-info text-info align-middle"
                                        style="padding: 1px 5px; border-radius: 50%; margin-right:4px">.</span>En camino
                                @else<span
                                class="badge bg-secondary text-secondary align-middle"
                                style="padding: 1px 5px; border-radius: 50%; margin-right:4px">.</span>Terminada
                                @endif
                            </p>
                        </small>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text mb-1"><small class="text-muted">Pediste:
                            @foreach ($detalles as $detalle)
                                @if ($pedido->id == $detalle->id_pedido)
                                    {{ $detalle->cantidad }} {{ $detalle->producto }} -
                                    {{ $detalle->sub_titulo }},
                                @endif
                            @endforeach
                        </small>
                    </p>
                            <p><small class="text-muted d-flex">
                                Seguimiento:<input id="linkcatalogo" class="js-copytextarea  ml-5 " style="border:none; width:10rem; color:gray;"value="{{ $pedido->seguimiento }}"></small>
                    </p>
                    <div class="d-flex">
                        <div class="col text-end">
                            <a href="pedido/{{ $pedido->id }}/view" class="btn " style="color:#af3636;border-right: 1px;
                                border: #d4c6c6;
                                border-right-style: solid;"><i class="bi bi-file-earmark-text" style="margin-right:4px;"></i> Ver
                                        Pedido<a>                                   
                        </div>
                        <div class="col">
                            <button class="btn" style="color: #af3636;" 
                            onclick="copiarAlPortapapeles('{{ $pedido->link_seguimiento }}');" @if ($pedido->seguimiento == null) disabled @endif><i
                                    class="fas fa-shipping-fast"></i> Seguir Pedido</button>                                    
                        </div>
                        <div class="col">
                            <a href="pedido/{{ $pedido->id }}" class="btn " style="color:#af3636;border-left: 1px;
                        border: #d4c6c6;
                        border-left-style: solid;"><i class="fas fa-redo-alt" style="margin-right:4px;"></i> Repetir
                                Pedido<a>
                        </div>
                    </div>

                </div>
            </div>

        @endforeach
        <div class="col-sm-5 mx-auto text-center mb-3">
            <button type="button" class="btn btn-outline-danger" >ver mas pedidos</button>
        </div>
    @else

        <div class="card" style=" border: none;
                box-shadow: -2px 12px 25px -10px rgba(0,0,0,0.55);
                -webkit-box-shadow: -2px 12px 25px -10px rgba(0,0,0,0.55);
                -moz-box-shadow: -2px 12px 25px -10px rgba(0,0,0,0.55);border-radius: 10px 10px 10px 10px;
                margin-bottom:1rem;
                ">

            <div class="card-body text-center">
                <img src="{{ asset('assets/img/no-data.svg') }}" alt="" style="height: 5rem;" class="img-fluid">
                <p class="text-center text-secondary">Aun no has realizado pedidos</p>
            </div>
        </div>

    @endif
</div>
</div>
</div>

@extends('layouts.sidebar')
<script>
    function copiarAlPortapapeles(direccion){
        let link = document.getElementById('linkcatalogo');
        link.select();
        link.setSelectionRange(0, 99999);
        document.execCommand('copy');
            swal({
                title: "Copiamos el número de seguimiento",
                text: "Ahora te redireccionaremos a la pagina del transporte para que puedas consultar!",
                icon: "success",
                buttons: true,
                successMode: true,
                })
                .then((redirigir) => {
                    if (redirigir) {
                        window.open(direccion, '_blank')
                    }  
                });                                             
    }
</script>     

@extends('layouts.footer')