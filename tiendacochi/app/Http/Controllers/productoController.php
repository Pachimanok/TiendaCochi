<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\pedido;
use App\Models\product;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Session;
Use Illuminate\Support\Facades\Redirect;


class productoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $user = Auth::user();

        if($user != null){
            $u = $user->name;
            $r = $user->role;
            $message = session('message');

            if ( $r == 'user'){
                $cupon = $user ->codigoDescuento;
                $qt = db::table('promocions')->where('titulo','=',$cupon)->get();
                $promocion = $qt[0];
                $d = 1 - ($promocion->descuento / 100);
                $dto = $promocion->descuento;
                $productos = db::table('products')->where('estado','=','activo')->orderBy('orden', 'asc')->get();
                
                return view('catalogo2')->with('user', $user)->with('productos', $productos)->with('d', $d)->with('dto', $dto);

            } else {

                $productos = db::table('products')->orderBy('orden', 'asc')->get();
                return view('admin.catalogo')->with('productos', $productos)->with('message',$message);

            }
        }else{
            $productos = db::table('products')->where('estado','=','activo')->orderBy('orden', 'asc')->get();
            $d = 1 - 0.2;
            $dto = 0.2 * 100;    
            return view('catalogoUnica')->with('productos', $productos)->with('d', $d)->with('dto', $dto);
        }
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createProducto');
        
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

        $archivo = $request->File('imagen');
        $extencion = $archivo->getClientOriginalExtension();
        $name = $archivo->getClientOriginalName();

        $imagen = Image::make($archivo);
        $imagen->encode($extencion);
        $path = public_path('assets/img/' . $name);
        $imagen->save($path);

        foreach($request['estado'] as $estado);
        foreach($request['stock'] as $stock);

        $producto = new product;
        $producto->titulo = $request['titulo'];
        $producto->sub_titulo = $request['sub_titulo'];
        $producto->precio = $request['precio'];
        $producto->detalle = $request['detalle'];
        $producto->estado = $estado;
        $producto->stock = $stock;
        $producto->orden = $request['orden'];
        $producto->imagen = $name;
        $producto->user = $u;

        $producto->save();
        
        Session::flash('message','Se guardaron correctamente sus modificaciones');
        return Redirect::to('catalogo'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $qp = db::table('products')->where('id','=',$id)->get();
        $producto = $qp[0];
        return view('admin.verProducto')->with('producto',$producto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {

        $qp = db::table('products')->where('id','=',$id)->get();
        $producto = $qp[0];
        return view('admin.editProducto')->with('producto',$producto);
        
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

        $archivo = $request->File('imagen');
        if($archivo == null) {
            $name = $request['imagenActual'];
        }else{

            $extencion = $archivo->getClientOriginalExtension();
            $name = $archivo->getClientOriginalName();
    
            $imagen = Image::make($archivo);
            $imagen->encode($extencion);
            $path = public_path('assets/img/' . $name);
            $imagen->save($path);
        }
        

        foreach($request['estado'] as $estado);
        foreach($request['stock'] as $stock);

        $producto = product::find($id);
        $producto->titulo = $request['titulo'];
        $producto->sub_titulo = $request['sub_titulo'];
        $producto->precio = $request['precio'];
        $producto->detalle = $request['detalle'];
        $producto->estado = $estado;
        $producto->stock = $stock;
        $producto->orden = $request['orden'];
        $producto->imagen = $name;
        $producto->save();
        
        Session::flash('message','Se guardaron correctamente sus modificaciones');
        return Redirect::to('catalogo'); 

    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = product::find($id);
        $producto->delete();

        Session::flash('message','Se eliminó el producto correctamente');
        return Redirect::to('catalogo'); 
    }
}
