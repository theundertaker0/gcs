<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Bill;
use DataTables;
use App\Enterprise;
use App\User;

class BillController extends Controller
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
        return view('bill.index');
    }

    /**
     * Trae la lista de Bills para desplegar en el DataTable
     *
     */
    public function getBills()
    {

        return view('bill.create');
    }

    public function facturas()
    {
        $user = User::find(\Auth::user()->id);
        $bills = Bill::where('user_id',$user->id)->get();

        return Datatables::of($bills)

            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('bill.create');
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
        if($request->hasfile('picture'))
        {
            $file = $request->file('picture');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/bills/images/', $name);
        }else{
            $name="dummyBill.jpg";
        }
        $bill= new Bill;
        $bill->folio=$request->get('folio');
        $bill->date=$request->get('fecha');
        $bill->picture=$name;
        $bill->user_id=$user->id;
        $bill->save();

        return redirect('bill')->with('success', 'Factura Añadida con Éxito');
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
        $bill = Bill::find($id);
        return view('bill.edit',compact('bill'));
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
        $bill= Bill::find($id);
        $bill->folio=$request->get('folio');
        $bill->date=$request->get('fecha');
        if($request->hasfile('picture'))
        {
            $file = $request->file('picture');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/bills/images/', $name);
            $bill->picture=$name;
        }
        $bill->save();
        return redirect('bill')->with('success', 'Factura Actualiza con Éxito');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bill = Bill::find($id);
        $bill->delete();
        return redirect('bill')->with('success','La factura ha sido eliminada');
    }


    public function billproducts($id)
    {
        return view('bill.showproducts',['id'=>$id]);
    }

    public function productsbybill($id)
    {
        $products=Product::where('bills_id',$id);
        return Datatables::of($products)

            ->make(true);
    }

    public function addproduct($id)
    {
        $bill=Bill::find($id);
        $brands=Enterprise::all();
        return view('bill.addproduct',['bill'=>$bill,'brands'=>$brands]);
    }

}
