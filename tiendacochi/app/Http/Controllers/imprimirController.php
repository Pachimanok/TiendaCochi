<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Dompdf\Adapter\PDFLib;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use PDF;

class imprimirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qd = db::table('pedidos')->join('direccions','pedidos.id_dir','=','direccions.id')->where('pedidos.id','=','11')->get();
        $datos = $qd[0];
        $qp = db::table('detallepedidos')->where('id_pedido','=','11')->get();
        $qcantidad = db::table('detallepedidos')->where('id_pedido','=','11')->sum('cantidad');

        
      
        /* return view('pdf.remito');   */
            $pdf = PDF::loadView('pdf.remito',array('datos' => $datos,'pedidos' => $qp,'cantidad' => $qcantidad));
            $output = $pdf->output();
            file_put_contents('despachos/Despacho '.'11'.'.pdf', $output);
           /*  return $pdf->download('nombre.pdf');  */
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
