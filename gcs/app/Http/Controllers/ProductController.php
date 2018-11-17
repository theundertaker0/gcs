<?php

namespace App\Http\Controllers;

use App\Enterprise;
use Illuminate\Http\Request;
use App\Product;
use App\Bill;
use DataTables;
use App\User;


class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('product.index');
    }

    public function productos()
    {
        $products = Product::where('users_id',\Auth::user()->id);

        return Datatables::of($products)

            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bills=Bill::where('user_id',\Auth::user()->id)->get();
        $brands=Enterprise::all();
        return view('product.create',['bills'=>$bills,'brands'=>$brands]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::find(\Auth::user()->id);
        $product= new Product();
        $product->serial_number=$request->get('serie');
        $product->bills_id=$request->get('factura');
        $product->brand=$request->get('empresa');
        $product->enterprises_id=$request->get('marca');
        $product->final_date=$request->get('fecha');
        $product->users_id=$user->id;
        $product->description=$request->get('descripcion');
        $product->status=1;
        $product->save();
        return redirect('product')->with('success', 'Producto Añadido con Éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=Product::find($id);
        $brand=Enterprise::find($product->enterprises_id);
        $bill=Bill::find($product->bills_id);
        return view('product.view',['product'=>$product,'brand'=>$brand,'bill'=>$bill]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $bills=Bill::where('user_id',\Auth::user()->id)->get();
        $brands=Enterprise::all();
        return view('product.edit',['product'=>$product,'bills'=>$bills,'brands'=>$brands]);
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
        $product=Product::find($id);
        $product->serial_number=$request->get('serie');
        $product->bills_id=$request->get('factura');
        $product->brand=$request->get('empresa');
        $product->enterprises_id=$request->get('marca');
        $product->final_date=$request->get('fecha');
        $product->description=$request->get('descripcion');
        $product->status=1;
        $product->save();
        return redirect('product')->with('success', 'Producto Actualizado con Éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('product')->with('success','El Producto ha sido eliminado');
    }
}
