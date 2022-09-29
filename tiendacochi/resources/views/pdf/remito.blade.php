<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .container {
       
    }

    .col {
        text-align: center;
        margin-top: 0;
    }

    img {
        float: left;
    }

    h1 {
        font-size: 5rem;
        margin-bottom: 0;
        margin-top: 1rem;

        margin-top: 0;
    }

    h6 {
        font-size: medium;
        margin-top: 0;
    }

    td {
        width: 16%;
        height: 1.5rem;
        border-style: solid;
        text-align: center;
    }

    .newtd2 {

        width: 16%;
        height: 1rem;
        border-style: solid;
        text-align: center;
    }

    .newtd2 {
        width: 25%;
        height: 1rem;
        border-style: solid;
        text-align: center;
    }

    h4 {
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .h4dato {
        margin-top: 1px;
        margin-bottom: 1px;
    }
    .text-gray {
        color: gray;
        border-color: black;
    }

</style>
<body>
    <div class="container">
        <div class="col">
            <img src="https://cincosentidos.ar/public/assets/img/5s.png" style="width: 10rem;" alt="">
            <h1>REMITO</h1>
            <h6>DESTINATARIO FINAL</h6>
        </div>
        <table style="width: -webkit-fill-available; border-spacing: 0px;">
            <tr>
                <td style="border-right: none;">
                    <h4>Transporte</h4>
                </td>
                <td class="text-gray" style="border-right: none;">
                    <h4> {{ $datos->transporte }}</h4>
                </td>
                <td style="border-right: none;">
                    <h4>Recepcion</h4>
                </td>
                <td class="text-gray" style="border-right: none;">
                    <h4>--</h4>
                </td>
                <td style="border-right: none;">
                    <h4>Remito</h4>
                </td>
                <td class="text-gray">
                    <h4> {{ $datos->remito }}</h4>
                </td>
            </tr>
        </table>
        <table style="width: -webkit-fill-available; border-spacing: 0px;">
            <tr>
                <td style="border-right: none;">
                    <h4>Fec. Despacho</h4>
                </td>
                <td class="text-gray" style="border-right: none;">
                    <h4>{{ $hoy }}</h4>
                </td>
                <td style="border-right: none;">
                    <h4>Guia N°</h4>
                </td>
                <td class="text-gray" style="border-right: none;">
                    <h4></h4>
                </td>
                <td style="border-right: none;">
                    <h4>Factura</h4>
                </td>
                <td class="text-gray">
                    <h4>{{$datos->factura}}</h4>
                </td>
            </tr>
        </table>
        <table style="width: -webkit-fill-available; border-spacing: 0px;">
            <tr>
                <td style="border-right: none;">
                    <h4>Deposito</h4>
                </td>
                <td class="text-gray">
                    <h4>Andesmar</h4>
                </td>
                <td style="border: none;"></td>
                <td class="text-gray" style="border: none;"></td>
                <td style="border: none;"></td>
                <td class="text-gray" style="border: none;"></td>
            </tr>
        </table>
        <h3>Datos de entrega:</h3>
        <table style="width: -webkit-fill-available; border-spacing: 0px;">
            <tr>
                <td class="text-gray newtd2" style="border-right: none;">
                    <h4 class="h4dato">Destinatario</h4>
                </td>
                <td class="text-gray newtd2">
                    <h4 class="h4dato">{{ $datos->user}}</h4>
                </td>
                <td style="border: none;"></td>
                <td class="text-gray" style="border: none;"></td>
            </tr>
            <tr>
                <td class="text-gray newtd2" style="border-right: none;">
                    <h4 class="h4dato">Domicilio</h4>
                </td>
                <td class="text-gray newtd2">
                    <h4 class="h4dato">{{ $datos->calle}} {{ $datos->numero}} @if($datos->piso != null) piso:{{ $datos->piso}} @endif  @if($datos->dpto != null) - dpto: {{ $datos->dpto}} @endif</h4>
                </td>
                <td style="border: none;"></td>
                <td class="text-gray" style="border: none;"></td>
            </tr>
            <tr>
                <td class="text-gray newtd2" style="border-right: none;">
                    <h4 class="h4dato">Codigo Postal</h4>
                </td>
                <td class="text-gray newtd2">
                    <h4 class="h4dato">{{ $datos->codigoPostal}}</h4>
                </td>
                <td style="border: none;"></td>
                <td class="text-gray" style="border: none;"></td>
            </tr>
            <tr>
                <td class="text-gray newtd2" style="border-right: none;">
                    <h4 class="h4dato">Localidad</h4>
                </td>
                <td class="text-gray newtd2">
                    <h4 class="h4dato">{{ $datos->localidad}}</h4>
                </td>
                <td style="border: none;"></td>
                <td class="text-gray" style="border: none;"></td>
            </tr>
            <tr>
                <td class="text-gray newtd2" style="border-right: none;">
                    <h4 class="h4dato">Provincia</h4>
                </td>
                <td class="text-gray newtd2">
                    <h4 class="h4dato">{{ $datos->provincia}}</h4>
                </td>
                <td style="border: none;"></td>
                <td class="text-gray" style="border: none;"></td>
            </tr>
            <tr>
                <td class="text-gray newtd2" style="border-right: none;">
                    <h4 class="h4dato">Telefono de entrega</h4>
                </td>
                <td class="text-gray newtd2">
                    <h4 class="h4dato">{{ $datos->telContacto}}</h4>
                </td>
                <td style="border: none;"></td>
                <td class="text-gray" style="border: none;"></td>
            </tr>
            <tr>
                <td class="text-gray newtd2" style="border-right: none;">
                    <h4 class="h4dato">horario de entrega</h4>
                </td>
                <td class="text-gray newtd2">
                    <h4 class="h4dato">AM</h4>
                </td>
                <td style="border: none;"></td>
                <td class="text-gray" style="border: none;"></td>
            </tr>
            <tr>
                <td class="text-gray newtd2" style="border-right: none;">
                    <h4 class="h4dato">Observaciones</h4>
                </td>
                <td class="text-gray newtd2">
                    <h4 class="h4dato">{{ $datos->referencia}}</h4>
                </td>
                <td style="border: none;"></td>
                <td class="text-gray" style="border: none;"></td>
            </tr>
            <tr>
                <td class="text-gray newtd2" style="border-right: none;">
                    <h4 class="h4dato">Persona de contacto</h4>
                </td>
                <td class="text-gray newtd2">
                    <h4 class="h4dato">{{ $datos->user}}</h4>
                </td>
                <td style="border: none;"></td>
                <td class="text-gray" style="border: none;"></td>
            </tr>
        </table>
        <h3>Pedido:</h3>
        <table style="width: -webkit-fill-available; border-spacing: 0px;">
            @foreach($pedidos as $pedido)
            <tr>
                <td class="text-gray newtd2" style="border-right: none;">
                    <h4 class="h4dato">Vino: {{ $pedido->producto}}</h4>
                </td>
                <td class="text-gray newtd2">
                    <h4 class="h4dato">Cantidad: {{ $pedido->cantidad}}</h4>
                </td>
                <td class="text-gray newtd2">
                    <h4 class="h4dato">Cantidad: {{ $pedido->cantidad}}</h4>
                </td>
                <td style="border: none;"></td>
                <td class="text-gray" style="border: none;"></td>
            </tr>
            @endforeach
        </table>

   
        <h4>Total de cajas: {{ $cantidad }}</h4>
        <h4>Total Declarado: ${{ $datos->total}}.00 </h4>
        <div class="col" style="margin-left: 70%; margin-right:5%;">
            <img src="https://cincosentidos.ar/firmaManuel.png" style="float: right !important!; height:5rem;"alt="">

        </div>

    </div>
</body>

</html>
