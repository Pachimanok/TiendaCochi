<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Direccion;
Use Illuminate\Support\Facades\Session;
Use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class direccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
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

        $localidad = $request['localidad'];
        $codigoPostal = $request['codigoPostal'];
        $telContacto = $request['telContacto'];
        $provincia = $request['provincia'];

        $calle = $request['calle'];
        $numero = $request['numero'];
        $piso = $request['piso'];
        $dpto = $request['dpto'];
        $referencia = $request['referencia'];

        $direccion = new direccion();
        $direccion->titulo = $calle;
        $direccion->calle = $calle;
        $direccion->numero = $numero;
        $direccion->piso = $piso;
        $direccion->dpto = $dpto;
        $direccion->localidad = $localidad;
        $direccion->provincia = $provincia;
        $direccion->codigoPostal = $codigoPostal;
        $direccion->telContacto = $telContacto;
        $direccion->referencia = $referencia;
        $direccion->user = $u;
        $direccion->save();

       
        Session::flash('success','Se creo la dirección correctamente');
        return Redirect::to('/home');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
            $titulo = $request['calle'];
            $calle = $request['calle'];
            $numero = $request['numero'];
            $piso = $request['piso'];
            $dpto = $request['dpto'];
            $provincia = $request['provincia'];
            $localidad = $request['localidad'];
            $codigoPostal = $request['codigoPostal'];
            $telContacto = $request['telContacto'];
            $referencia = $request['referencia'];
           

            $dic = direccion::find($id);
            $dic->titulo = $titulo;
            $dic->calle = $calle;
            $dic->numero = $numero;
            $dic->piso = $piso;
            $dic->dpto = $dpto;
            $dic->provincia = $provincia;
            $dic->localidad = $localidad;
            $dic->codigoPostal = $codigoPostal;
            $dic->telContacto = $telContacto;
            $dic->referencia = $referencia;

            $dic->save();

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

        $domicilio = direccion::find($id);
        $domicilio->delete();

        Session::flash('success','Se eliminó la direccion correctamente');
        return Redirect::to('/home'); 
    }

    public function agregarUbi($id)
    {
        $quser = db::table('users')->where('users.id', '=',$id)->get();
        $user=$quser[0];
        $localidades = db::table('delivery')->get();
        return view('newdomicilio')->with('localidades',$localidades)->with('user',$user);
    }
}
