<?php

namespace App\Http\Controllers;
use App\Enterprise;
use Illuminate\Http\Request;

class EnterprisesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //$user = Enterprise::find(\Auth::user()->id);
        //$data = App\Enterprise::all();
        $data= Enterprise::orderBy('id','DESC')->paginate(10);
       // $enterprise = new \App\Enterprise;
       // $data = $enterprise->get();
        return view('enterprises.index', compact('data')); //->with('enterprises', $enterprises);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request) {
        $data = new \App\Enterprise;
        $data->name = $request->post('inputName');
        $data->url = $request->post('inputUrl');
        $data->observation = $request->post('inputObservation');
        $data->save();
        //return view('enterprises.index');
        return redirect()->back()->withSuccess('Registro Creado Exitosamente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        return view('enterprises.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
