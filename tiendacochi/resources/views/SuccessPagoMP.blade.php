
@extends('layouts.header')

<script>
    window.onload = info;
    function info() {
        swal({
                title: "¡¡{{$nombre}} Hemos registrado tu pago correctamente!",
                text: "",
                icon: "success",
                buttons: true,
                successMode: true,
            })
            .then((redirigir) => {
                if (redirigir) {
                    window.location.href = "/home";
                }
            });

    }
    
</script>

@extends('layouts.footer')
