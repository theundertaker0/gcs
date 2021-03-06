<?php

/*
 * Author: Melquizedec Moo Medina
 * Date:  October, 2018
 * Source:  EnterprisesController
 * Description: Controlador de todos los accesos a los módulos que provienen de la tabla de empresas.
 * 
 * create:      Crear Empresa
 * destroy:     Eliminar un registro de la tabla enterprises.
 * update:      Actualizar los datos de las empresas.
 * 
 */

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
        $data = Enterprise::orderBy('id', 'DESC')->paginate(10);
        // $enterprise = new \App\Enterprise;
        // $data = $enterprise->get();
        return view('enterprises.index', compact('data')); //->with('enterprises', $enterprises);
    }

    public function score() {
        //$user = Enterprise::find(\Auth::user()->id);
        //$data = App\Enterprise::all();
        $data = Enterprise::orderBy('id', 'DESC')->paginate(10);
        // $enterprise = new \App\Enterprise;
        // $data = $enterprise->get();
        return view('enterprises.score', compact('data')); //->with('enterprises', $enterprises);
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
        $data->email = $request->post('inputEmail');
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
    public function edit(Request $request) {

        /*     $bills=Bill::where('user_id',\Auth::user()->id)->get();
          $brands=Enterprise::all();
          return view('product.edit',['product'=>$product,'bills'=>$bills,'brands'=>$brands]);
         */
        $id = $request->post('inputIdEdit');
        //$id=  Enterprise::find($id);  
        $data = Enterprise::find($id);
        $data->name = $request->post('inputNameEdit');
        $data->url = $request->post('inputUrlEdit');
        $data->email = $request->post('inputEmailEdit');
        $data->observation = $request->post('inputObservationEdit');
        $data->score = "0";
        $data->save();


        $data = Enterprise::orderBy('id', 'DESC')->paginate(10);
        return view('enterprises.index', compact('data'));
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
    public function destroy(Request $request) {
        $id = $request->post('inputIdDelete');
        $data = Enterprise::find($id);
        $data->delete();

        if (Request::ajax()) {
            return redirect('enterprises')->with('success', 'La Empresa ha sido eliminado');
        } else {
            return redirect('enterprises')->with('danger','La Empresa  No se puede eliminar, tiene datos relacionados');
        }
    }

}
