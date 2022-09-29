<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class pruebaController extends Controller
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
        
        $qd = DB::table('pedidos')->select('pedidos.id','pedidos.user','pedidos.total','pedidos.observaciones','pedidos.seguimiento','pedidos.transporte','pedidos.factura','pedidos.remito','direccions.calle','direccions.numero','direccions.piso','direccions.dpto','direccions.referencia','direccions.provincia','direccions.localidad','direccions.codigoPostal','direccions.telContacto')->join('direccions','pedidos.id_dir','=','direccions.id')->join('products','pedidos.id_dir','=','direccions.id')->where('pedidos.id','=',$id)->get();
        $datos = $qd[0];
        $qp = db::table('detallepedidos')->where('id_pedido','=',$id)->join('products','detallepedidos.id_producto',"=",'products.id')->get();
        $qcantidad = db::table('detallepedidos')->where('id_pedido','=',$id)->sum('cantidad');
        
        
        $fecha = Carbon::now()->format('d-m-Y');
        /* return view('pdf.remito2',array('datos' => $datos,'pedidos' => $qp,'cantidad' => $qcantidad,'fecha' => $fecha)); */
        $pdf = PDF::loadView('pdf.remito2',array('datos' => $datos,'pedidos' => $qp,'cantidad' => $qcantidad,'fecha' => $fecha));
        $output = $pdf->output();
        file_put_contents('despachos/Despacho'.$id.'.pdf', $output);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
