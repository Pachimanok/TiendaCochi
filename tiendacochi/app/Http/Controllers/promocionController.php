<?php

namespace App\Http\Controllers;

use App\Models\promocion;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
Use Illuminate\Support\Facades\Session;
Use Illuminate\Support\Facades\Redirect;

class promocionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $name = $user->name;
        $email = $user->email;
        $role = $user->role;

        if($user->role == "admin" || $user->role == "seller" ){
            $promociones = db::table('promocions')->join('users','promocions.seller','=','users.id')->select('promocions.id','promocions.titulo', 'promocions.descuento', 'promocions.flete', 'users.name', 'promocions.estado', 'promocions.created_at')->get();
            $promocionesnormales = DB::table('promocions')->get();
            return view('admin.promocion')->with('promociones',$promociones)->with('promocionesnormales',$promocionesnormales);
        }else{
            $promociones = DB::table('promocions')->get();
            return view('ingresarPromocion')->with('promociones',$promociones)->with('user',$user);
        }

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sellers = db::table('users')->where('users.role', '=', 'seller')->get();
        return view('admin.createPromocion')->with('sellers',$sellers); //crear la vista createPromocion
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        foreach ($request->get('seller') as $seller);


        $promocion = new promocion();
        $promocion->titulo = $request['titulo'];
        $promocion->descuento = $request['descuento'];
        
        $axestado=$request['estado'];
        if($axestado == ''){
            $promocion->estado = "OFF";
        }else {
            $promocion->estado = $axestado;
        }

        $axflete=$request['flete'];
        if($axflete == ''){
            $promocion->flete = "OFF";
        }else {
            $promocion->flete = $axflete;
        }

        $promocion->seller = $seller;
        $promocion->save();

        Session::flash('message','Se creó correctamente el codigo de descuento');
        return Redirect::to('promocion');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\promocion  $promocion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $qt = db::table('promocions')->where('id','=',$id)->get();
        $promocion = $qt[0];
        
        if($promocion->seller == ''){
            return view('admin.verPromocion')->with('promocion',$promocion);
        }else{
            $id_seller = $promocion->seller;
            $quser = db::table('users')->where('users.id', '=',$id_seller)->get();
            $vendedor=$quser[0];
            $sellers = db::table('users')->where('users.role', '=', 'seller')->get();
            
            return view('admin.verPromocion')->with('sellers',$sellers)->with('promocion',$promocion)->with('vendedor',$vendedor);
        }

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\promocion  $promocion
     * @return \Illuminate\Http\Response
     */
    public function edit(promocion $promocion)
    {
        //
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\promocion  $promocion
     * @return \Illuminate\Http\Response
     */
    public function test(Request $request)
    {
        $user = Auth::user();
        $promociones = DB::table('promocions')->get();
        $nombreCodigo = $request['title'];

        foreach ($promociones as $promocion){
            $aux = $promocion->titulo;
            $act = $promocion->estado;
            if($nombreCodigo == $aux && $act == "ON" ){
                $user->codigoDescuento= $nombreCodigo;
                $user->save();
                 
                Session::flash('success','Se registro el codigo de descuento correctamente');
                return Redirect::to('promocion');
            }
        }
            Session::flash('error','Codigo de descuento Incorrecto');
            return Redirect::to('promocion'); 
    }
    
    
    public function update(Request $request, $id)
    {

        $promocion = promocion::find($id);
        $promocion->titulo = $request['titulo']; 
        $promocion->descuento = $request['descuento'];
        $promocion->flete = $request['flete'];
        $promocion->estado = $request['estado'];

        if($promocion->seller != ''){
            foreach ($request->get('seller') as $seller);
            $promocion->seller = $seller;
        }

        $promocion->save();

        return redirect('promocion/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\promocion  $promocion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $promocion = promocion::find($id);
        $promocion->delete();

        Session::flash('message','Se eliminó el codigo de descuento correctamente');
        return Redirect::to('promocion');
    }


    
}
