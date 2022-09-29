@if (session('message'))
 <div class="row">
     <div class="col-sm-8 mx-auto">
        <div class="alert alert-info text-white alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close align-top" data-bs-dismiss="alert" aria-label="Close" style="color:white;"><span class="align-top" aria-hidden="true">&times;</span>  </button>
        </div>  
     </div>
 </div>           
@endif