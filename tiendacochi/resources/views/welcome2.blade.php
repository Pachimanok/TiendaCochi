<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-LZWNP6T99X"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-LZWNP6T99X');
</script>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BBC Tienda</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon/android-icon-36x36.png') }}">


    <meta content="" name="description">
    <meta content="" name="keywords">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/c26c8bd214.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.min.js"
        integrity="sha512-VCHVc5miKoln972iJPvkQrUYYq7XpxXzvqNfiul1H4aZDwGBGC0lq373KNleaB2LpnC2a/iNfE5zoRYmB4TRDQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css">
    {{-- FONT STIX font-family: 'STIX Two Text', serif; --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link
        href="https://fonts.googleapis.com/css2?family=STIX+Two+Text:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">

    {{-- para mobile --}}
    <link rel="manifest" href="../assets/img/manifest.json">
    <meta name = "apple-mobile-web-app-able" content = "yes">
    <script type="module" src="{{ asset('script/pages/app-index.ts') }}"></script>
    <link rel="apple-touch-icon" sizes="57x57" href="../assets/img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../assets/img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../assets/img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="57x57" href="../assets/icon/icon_24.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../assets/icon/icon_48.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../assets/icon/icon_192.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/icon/icon_512.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon-16x16.png') }}">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../assets/img/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>
    <script>
        
        let installButton = document.createElement('button');

        let prompt;

        window.addEventListener('beforeinstallprompt', function(e){
             
                // Prevent the mini-infobar from appearing on mobile
                e.preventDefault();
                // Stash the event so it can be triggered later.
                prompt = e;
                      
        });

        installButton.addEventListener('click', function(){

            prompt.prompt();
           

        })
        let installed = false;

        installButton.addEventListener('click', async function(){
        prompt.prompt();
        let result = await that.prompt.userChoice;
        if (result&&result.outcome === 'accepted') {
            installed = true;
        }
        })

        window.addEventListener('appinstalled', async function(e) {
        installButton.style.display = "none";
        
        function isThisDeviceRunningiOS(){
        if (['iPad Simulator', 'iPhone Simulator','iPod Simulator', 'iPad','iPhone','iPod'].includes(navigator.platform))
        return true;
        }
        // iPad on iOS 13  
        else if (navigator.userAgent.includes("Mac") && "ontouchend" in document)){
            return true;
        }   
        else {
            return false;
        }
}
    
    </script>
    <div class="container">
        <div class="d-flex">
            <div class="col-sm-5 mx-auto">
                <div class="card" style="border:none; text-align: center;">
                    <div class="row">

                        <div class="col-sm-5 mx-auto mt-5 mb-3">
                            <h4 style="color: black; " class="mt-5">¡Bienvenido!</h4>
                            <img src="assets/img/bbc.png"
                                class="card-img-top
                                    img-fluid mb-5 mt-2 "
                                style="width: 12rem;" alt="..."><br>
                        </div>

                    </div>

                    <div class="row mt-2">
                        <div class="col-md-8 mx-auto">
                            <h4 style="color: black; " class="mt-5">Estamos Trabajando, intentá nuevamente en unos instantes.</h4>

                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script type="module">
        < script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity = "sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin = "anonymous" >
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
        <script type="module" src="pwabuilder-sw.js"></script>

        <script>
            navigator.serviceWorker.register("pwabuilder-sw.js");
        </script>

           
    </script>
   

</body>

</html>
