@extends('layouts.header')

<script>
    window.onload = info;
    function info() {
        swal({
                title: "¡{{ $nombre }} no pudimos procesar el pago!",
                text: "No te preocupes, tu pedido está tomado! En breves alguien de administración se comunicará para solucionarlo!",
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
