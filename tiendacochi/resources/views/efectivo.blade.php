@extends('layouts.header')

<div class="header pb-3" style="    margin-top: 36%;">
    <div class="container mt-6">
      <br>
      <div class="card mt-2" style="border:none;">
        <div class="card-body" >
          <h1 class="text-center text-success p-0" style="font-size: -webkit-xxx-large;"><i class="fas fa-check-circle"></i></h1>
          <h2 class="text-success text-center p-0">¡Compra realizada correctamente!</h2>
          <p class="text-center pb-0 mb-0">Usted debe realizar el pago en efectivo de: <br><strong>$ {{ $total}}.00</strong></h5>  
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

@extends('layouts.footer')

