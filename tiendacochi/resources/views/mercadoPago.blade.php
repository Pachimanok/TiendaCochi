@extends('layouts.header')

@php
// SDK de Mercado Pago
require base_path('/vendor/autoload.php');
// Agrega credenciales
MercadoPago\SDK::setAccessToken('APP_USR-8943248783984441-110714-68dec432f4ed2991796d32b6b592f430-83705031');

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = $detalle;
$item->quantity = 1;
$item->unit_price = $total;
$preference->items = array($item);

$preference->back_urls = array(
    "success" => "https://cincosentidos.ar/mp/$id",
    "failure" => "http://cincosentidos.ar/mp",
    "pending" => "http://cincosentidos.ar/mp"
);
$preference->auto_return = "approved";
$preference->save();

@endphp
<script src="https://sdk.mercadopago.com/js/v2"></script>
<script>
    // Agrega credenciales de SDK
      const mp = new MercadoPago('APP_USR-9dd513db-d728-4efc-9f44-ca167171b315', {
            locale: 'es-AR'
      });
    
      // Inicializa el checkout
      const checkout = mp.checkout({
          preference: {
              id: '{{$preference->id}}'
          },
          autoOpen: true,
          
    });
    </script>
    

@extends('layouts.footer')

