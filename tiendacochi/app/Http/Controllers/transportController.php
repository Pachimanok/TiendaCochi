<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\transport;
Use Illuminate\Support\Facades\Session;
Use Illuminate\Support\Facades\Redirect;


class transportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transportes = DB::table('transports')->get();
        return view('admin.transporte')->with('transportes',$transportes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createTransporte');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transporte = new transport();
        $transporte->title = $request['titulo'];
        $transporte->link_seguimiento = $request['seguimiento'];
        $transporte->email = $request['email'];
        $transporte->email_cc = $request['email_cc'];
        $transporte->save();

        Session::flash('message','Se creó correctamente el transporte');
        return Redirect::to('transporte'); 
    }
       

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $qt = db::table('transports')->where('id','=',$id)->get();
        $transporte = $qt[0];
        
        return view('admin.verTransporte')->with('transporte',$transporte);
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
        $transporte = transport::find($id);
        $transporte->title = $request['title'];
        $transporte->link_seguimiento = $request['seguimiento'];
        $transporte->email = $request['email'];
        $transporte->email_cc = $request['email_cc'];
        $transporte->save();

        return redirect('transporte/'.$id);




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transporte = transport::find($id);
        $transporte->delete();

        Session::flash('message','Se eliminó el ttransporte correctamente');
        return Redirect::to('transporte'); 
    }
}
