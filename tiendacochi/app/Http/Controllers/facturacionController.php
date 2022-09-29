<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Facturacion;
Use Illuminate\Support\Facades\Session;
Use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class facturacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $user = Auth::user();
        $u = $user->name;

        foreach($request['cond_fiscal'] as $cond_fiscal);
        $razon_social = $request['razon_social'];
        $cuit = $request['cuit'];

        $facturacion = new Facturacion();
        $facturacion->titulo = $razon_social;
        $facturacion->razon_social = $razon_social;
        $facturacion->cuit = $cuit;
        $facturacion->condicion_fiscal = $cond_fiscal;
        $facturacion->user = $u;
        $facturacion->save();

        $localidades = db::table('delivery')->get();
        return view('domicilio')->with('localidades',$localidades);

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = Auth::user();
        $userId = $user->id;
        $titulo = $request['razon_social'];
        $razSocial = $request['razon_social'];
        $cuit = $request['cuit'];
        foreach($request['cond_fiscal'] as $cond_fiscal);

        $fac = facturacion::find($id);
        $fac->titulo = $titulo;
        $fac->razon_social = $razSocial;
        $fac->cuit = $cuit;
        $fac->condicion_fiscal = $cond_fiscal;
        $fac->save();

        $quser = db::table('users')->where('users.id', '=',$userId)->get();
        $user=$quser[0];

        $codigoDescuento= $user->codigoDescuento;
        $promocions = db::table('promocions')->where('promocions.titulo', '=',$codigoDescuento)->get();
        $promocion=$promocions[0];

        $direccions = db::table('users')->join('direccions','users.name','=','direccions.user')->where('users.id', '=',$userId)->get();
        $facturacions = db::table('users')->join('facturacions','users.name','=','facturacions.user')->where('users.id', '=',$userId)->get();
        return view('verUsuario')
        ->with('user',$user)
        ->with('facturacions',$facturacions)
        ->with('promocion',$promocion)
        ->with('direccions',$direccions);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $facturacion = facturacion::find($id);
        $facturacion->delete();

        Session::flash('success','Se eliminó la facturacion correctamente');
        return Redirect::to('/home');
    }

    public function vistaNewFact($id)
    {
        $quser = db::table('users')->where('users.id', '=',$id)->get();
        $user=$quser[0];
        return view('newfacturacion')->with('user',$user);
    }

    public function agregarNewFact(Request $request)
    {
        $user = Auth::user();
        $userId = $user->id;
        $u = $user->name;

        foreach($request['cond_fiscal'] as $cond_fiscal);
        $razon_social = $request['razon_social'];
        $cuit = $request['cuit'];

        $facturacion = new Facturacion();
        $facturacion->titulo = $razon_social;
        $facturacion->razon_social = $razon_social;
        $facturacion->cuit = $cuit;
        $facturacion->condicion_fiscal = $cond_fiscal;
        $facturacion->user = $u;
        $facturacion->save();

        
        $codigoDescuento= $user->codigoDescuento;
        $promocions = db::table('promocions')->where('promocions.titulo', '=',$codigoDescuento)->get();
        $promocion=$promocions[0];

        $direccions = db::table('users')->join('direccions','users.name','=','direccions.user')->where('users.id', '=',$userId)->get();
        $facturacions = db::table('users')->join('facturacions','users.name','=','facturacions.user')->where('users.id', '=',$userId)->get();
        return view('verUsuario')
        ->with('user',$user)
        ->with('facturacions',$facturacions)
        ->with('promocion',$promocion)
        ->with('direccions',$direccions);
    }
}
