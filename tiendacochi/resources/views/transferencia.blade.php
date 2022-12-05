@extends('layouts.header')

<div class="header pb-3" style="    margin-top: 36%;">
    <div class="container mt-6">
      <br>
      <div class="card mt-2" style="border:none;">
        <div class="card-body" >
          <h1 class="text-center text-success p-0" style="font-size: -webkit-xxx-large;"><i class="fas fa-check-circle"></i></h1>
          <h2 class="text-success text-center p-0">¡Compra realizada correctamente!</h2>
          <p class="text-center pb-0 mb-0">Para terminar transferinos: <br><strong>$ {{ $total}}.00</strong></h5>  
          <br>  
          <p class="text-center text-secondary mt-5 pb-0 mb-0">CVU: <span id="p1">0000007900233389032940</span>
          <br>
          <button class="btn text-secondary" onclick="copiarAlPortapapeles('p1')"><i id="colorp1" class="far fa-copy"></i></button></p> 
          <br>  
          <div class="row text-center">
              <div class="col-sm-5 mx-auto">
                <a href="/home" class="btn btn-success btn-block" style="border-radius: 50px;">Terminar</a>
              </div>
            </div>
          </div>
          </form>
        </div>
      </div>
  </div>
  <script>
    
      function copiarAlPortapapeles(id_elemento) {
        var aux = document.createElement("input");
        aux.setAttribute("value", document.getElementById(id_elemento).innerHTML);
        document.body.appendChild(aux);
        aux.select();
        document.execCommand("copy");
        document.body.removeChild(aux);
        if(id_elemento == 'p1'){
            var cabs = document.querySelectorAll('#colorp1');
            cabs.forEach(function(v){v.style.color = "#193b87"} );
            swal("¡CBU copiado en tu telefono", "", "success");
        }else{
            var cabs = document.querySelectorAll('#colorp2');
            cabs.forEach(function(v){v.style.color = "#193b87"});
            swal("¡Alias copiado en tu telefono", "", "success");
        }

      }
</script>

@extends('layouts.footer')

