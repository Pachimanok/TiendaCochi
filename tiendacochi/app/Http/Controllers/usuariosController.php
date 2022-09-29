<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
Use Illuminate\Support\Facades\Session;
Use Illuminate\Support\Facades\Redirect;


class usuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $usuarios = db::table('users')->get();
            return view('admin.usuarios')->with('usuarios',$usuarios);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $useractual = Auth::user();
        $quser = db::table('users')->where('users.id', '=',$id)->get();
        $user=$quser[0];
        $direccions = db::table('users')->join('direccions','users.name','=','direccions.user')->where('users.id', '=',$id)->get();
        $facturacions = db::table('users')->join('facturacions','users.name','=','facturacions.user')->where('users.id', '=',$id)->get();
        $codigoDescuento= $user->codigoDescuento;
        $promocions = db::table('promocions')->where('promocions.titulo', '=',$codigoDescuento)->get();
        $promociones =db::table('promocions')->get();
        $promocion=$promocions[0];
        $role =$useractual->role;

        if($role == 'admin'|| $role == 'seller'){
            return view('admin.verUsuario')
            ->with('usuario',$user)
            ->with('userActual',$useractual)
            ->with('facturacions',$facturacions)
            ->with('promociones',$promociones)
            ->with('promocion',$promocion)
            ->with('direccions',$direccions);
        }else{
        return view('verUsuario')
            ->with('user',$user)
            ->with('facturacions',$facturacions)
            ->with('promocion',$promocion)
            ->with('direccions',$direccions);
            
        }
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
        $useractual = Auth::user();
        if($useractual->role == "admin"){
            foreach($request['role'] as $role);
            foreach($request['codDesc'] as $codDesc);
            //$dto = $request['descuento'] / 100;


            $descuento = user::find($id);
            $descuento->codigoDescuento = $codDesc;
            $descuento->role = $role;
            $descuento->save();

            $quser = db::table('users')->where('users.id', '=',$id)->get();
            $user=$quser[0];

            $codigoDescuento= $user->codigoDescuento;
            $promocions = db::table('promocions')->where('promocions.titulo', '=',$codigoDescuento)->get();
            $promociones =db::table('promocions')->get();
            $promocion=$promocions[0];

            $direccions = db::table('users')->join('direccions','users.name','=','direccions.user')->where('users.id', '=',$id)->get();
            $facturacions = db::table('users')->join('facturacions','users.name','=','facturacions.user')->where('users.id', '=',$id)->get();

            return view('admin.verUsuario')
            ->with('usuario',$user)
            ->with('userActual',$useractual)
            ->with('facturacions',$facturacions)
            ->with('promocion',$promocion)
            ->with('promociones',$promociones)
            ->with('direccions',$direccions);
        }else{
            $email = $request['email'];

            $descuento = user::find($id);
            $descuento->email = $email;
            $descuento->save();

            $quser = db::table('users')->where('users.id', '=',$id)->get();
            $user=$quser[0];

            $codigoDescuento= $user->codigoDescuento;
            $promocions = db::table('promocions')->where('promocions.titulo', '=',$codigoDescuento)->get();
            $promocion=$promocions[0];

            $direccions = db::table('users')->join('direccions','users.name','=','direccions.user')->where('users.id', '=',$id)->get();
            $facturacions = db::table('users')->join('facturacions','users.name','=','facturacions.user')->where('users.id', '=',$id)->get();
            return view('verUsuario')
            ->with('user',$user)
            ->with('facturacions',$facturacions)
            ->with('promocion',$promocion)
            ->with('direccions',$direccions);
        }

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        Session::flash('message','Se eliminó el usuario correctamente');
        return Redirect::to('usuarios'); 
        
    }
}
