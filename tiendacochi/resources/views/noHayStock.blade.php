
@extends('layouts.header')

<script>
     window.onload = info;
    function info(){

      swal({
            title: "No se puede repetir el pedido",
            text: "No pudimos repetir el pedido, por favor ingresa en nuestro catalogo y seleccioná nuevamente",
            icon: "warning",
            buttons: true,
            warningMode: true,
            })
            .then((redirigir) => {
                if (redirigir) {
                  window.location.href = "/home";
                }  
            });
                              
              }
</script>

@extends('layouts.footer')
