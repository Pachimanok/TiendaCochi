<table width="100%" border="0" cellpadding="1" cellspacing="0" bordercolor="#999999" class="tablaContenido">
    <tr>
        <td width="50%" valign="top" class="tdContenido" style="border:none; text-align:center;">
           <h1 class="text-center">REMITO</h1>
        </td>
        <td width="50%" valign="top" class="tdContenido" style="text-align:center;">
                <img src="https://cincosentidos.ar/public/assets/img/5s.png" style="width:7rem;" alt="">
        </td>
    </tr>
</table>    
<table width="100%" border="1" cellpadding="2" cellspacing="0" bordercolor="#999999" class="tablaContenido">
    <tr>
        <td align="left" width="16%"  height="3rem"class="tdContenidoItem"><strong>Transporte: </strong></td>
        <td colspan="2" width="16%"  height="3rem"bgcolor="#E9E9E9" class="tdContenido">  <h6> {{ $datos->transporte }}</h6></td>
        <td align="left" width="16%"  height="3rem"class="tdContenidoItem"><strong>Recepcion:</strong></td>
        <td colspan="2" width="16%"  height="3rem"bgcolor="#E9E9E9" class="tdContenido"></td>
        <td align="left" width="16%"  height="3rem"class="tdContenidoItem"><strong>Remito:</strong></td>
        <td colspan="2" width="16%" height="3rem" bgcolor="#E9E9E9" class="tdContenido"><h6> {{ $datos->remito }}</h6></td>
    </tr>
    <tr>
        <td align="left" width="16%"  height="3rem"class="tdContenidoItem"><strong>Fec.Despacho: </strong></td>
        <td colspan="2" width="16%"  height="3rem"bgcolor="#E9E9E9" class="tdContenido">  <h6>  {{ $fecha }} </h6></td>
        <td align="left" width="16%"  height="3rem"class="tdContenidoItem"><strong>Guia N°:</strong></td>
        <td colspan="2" width="16%"  height="3rem"bgcolor="#E9E9E9" class="tdContenido"></td>
        <td align="left" width="16%"  height="3rem"class="tdContenidoItem"><strong>Factura:</strong></td>
        <td colspan="2" width="16%" height="3rem" bgcolor="#E9E9E9" class="tdContenido"><h6> {{ $datos->factura }}</h6></td>
    </tr>
    <tr>
        <td align="left" width="16%"  height="3rem" class="tdContenidoItem"><strong>Depósito: </strong></td>
        <td colspan="2" width="16%"  height="3rem" bgcolor="#E9E9E9" class="tdContenido" bordercolor="#999999" >  <h4>  Andesmar </h4></td>
    </tr>
</table>
<br>
<table width="100%" border="1" cellpadding="2" cellspacing="0" bordercolor="#999999" class="tablaContenido">
    <tr>
        <td align="center" width="100%" class="tdContenidoItem" bgcolor="#E9E9E9"><strong>Datos de Entrega: </strong></td>
    </tr>
</table>
<table width="100%" border="1" cellpadding="2" cellspacing="0" bordercolor="#999999" class="tablaContenido">
    <tr>
        <td align="left" width="25%" class="tdContenidoItem"><strong>Destinatario: </strong></td>
        <td colspan="2" width="75%"  bgcolor="#E9E9E9" class="tdContenido">  <h4 style="margin:0;"> {{ $datos->user }}</h4></td>
    </tr>
    <tr>
        <td align="left" width="25%" class="tdContenidoItem"><strong>Domicilio: </strong></td>
        <td colspan="2" width="75%"  bgcolor="#E9E9E9" class="tdContenido">  <h4 style="margin:0;"> {{ $datos->calle}} {{ $datos->numero}} @if($datos->piso != null) piso:{{ $datos->piso}} @endif  @if($datos->dpto != null) - dpto: {{ $datos->dpto}} @endif</h4></td>
    </tr>
    <tr>
        <td align="left" width="25%" class="tdContenidoItem"><strong>Codigo Postal: </strong></td>
        <td colspan="2" width="75%"  bgcolor="#E9E9E9" class="tdContenido">  <h4 style="margin:0;"> {{ $datos->codigoPostal}}</h4></td>
    </tr>
    <tr>
        <td align="left" width="25%" class="tdContenidoItem"><strong>Localidad: </strong></td>
        <td colspan="2" width="75%"  bgcolor="#E9E9E9" class="tdContenido">  <h4 style="margin:0;">{{ $datos->localidad}}</h4></td>
    </tr>
    <tr>
        <td align="left" width="25%" class="tdContenidoItem"><strong>Provincia: </strong></td>
        <td colspan="2" width="75%"  bgcolor="#E9E9E9" class="tdContenido">  <h4 style="margin:0;"> {{ $datos->provincia}}</h4></td>
    </tr>
    <tr>
        <td align="left" width="25%" class="tdContenidoItem"><strong>Teléfono de entrega: </strong></td>
        <td colspan="2" width="75%"  bgcolor="#E9E9E9" class="tdContenido">  <h4 style="margin:0;">{{ $datos->telContacto}}</h4></td>
    </tr>
    <tr>
        <td align="left" width="25%" class="tdContenidoItem"><strong>Horario de Entrega </strong></td>
        <td colspan="2" width="75%"  bgcolor="#E9E9E9" class="tdContenido">  <h4 style="margin:0;"> AM </h4></td>

    </tr>
    <tr>
        <td align="left" width="25%" class="tdContenidoItem"><strong>Observaciones: </strong></td>
        <td colspan="2" width="75%"  bgcolor="#E9E9E9" class="tdContenido">  <h4 style="margin:0;"> {{ $datos->referencia}} </h4></td>
    </tr>
    <tr>
        <td align="left" width="25%" class="tdContenidoItem"><strong>Persona de Contacto: </strong></td>
        <td colspan="2" width="75%"  bgcolor="#E9E9E9" class="tdContenido">  <h4 style="margin:0;"> {{ $datos->user}} </h4></td>

    </tr>   
</table>
<br>
<br>
<table width="100%" border="1" cellpadding="2" cellspacing="0" bordercolor="#999999" class="tablaContenido">
    <tr>
        <td align="center" width="100%" class="tdContenidoItem" bgcolor="#E9E9E9"><strong>Pedido </strong></td>
    </tr>
</table>
<table width="100%" border="1" cellpadding="2" cellspacing="0" bordercolor="#999999" class="tablaContenido">
    <tr>
        <td align="left" width="75%" class="tdContenidoItem"><strong>Vino</strong></td>
        <td colspan="2" width="25%"  bgcolor="#E9E9E9" class="tdContenido">  <h4 style="margin:0;">cantidad</h4></td>
    </tr>
    @foreach($pedidos as $pedido)
    <tr>
        <td align="left" width="75%" class="tdContenidoItem"><strong>{{ $pedido->producto}} - {{ $pedido->sub_titulo}}</strong></td>
        <td colspan="2" width="25%"  bgcolor="#E9E9E9" class="tdContenido">  <h4 style="margin:0;">{{ $pedido->cantidad}}</h4></td>
    </tr>
    @endforeach
</table>   
<h4>Total de cajas: {{ $cantidad }}</h4>
<h4>Total Declarado: ${{ $datos->total}}.00 </h4>
<div class="col" style="margin-left: 70%; margin-right:5%;">
    <img src="https://cincosentidos.ar/firmaManuel.png" style="float: right !important!; height:5rem;"alt="">
</div>
