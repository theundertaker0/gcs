<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class AdminUsersController extends Controller
{
    //


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(){
        $user = User::find(\Auth::user()->id);

        return view('auth.edit')->with('user', $user);
    }


    public function validator(array $data){
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'avatar' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
    }

    public function store(Request $request){


        $user = User::find(\Auth::user()->id);
        $user->name=$request->input('name');
        $user->last_name=$request->input('last_name');
        $user->address=$request->input('address');
        $user->city=$request->input('city');
        $user->state=$request->input('state');
        $user->cp=$request->input('cp');
        $user->email=$request->input('email');
        if(isset($request->avatar)){
            $filename = \Auth::user()->id.'_'.time().'.'.$request->avatar->getClientOriginalExtension();
            $request->avatar->move(public_path('uploads/avatars'), $filename);
            $user->avatar=$filename;
        }
        $user->save();
        return redirect()->back()->withSuccess('Datos Actualizados Exitosamente');


    }


    public function editPass(){
        $user = User::find(\Auth::user()->id);

        return view('auth.editpass')->with('user', $user);
    }

    public function updatepass(Request $request){
        $user = User::find(\Auth::user()->id);

        if(Hash::check($request->passwordactual,$user->password)){
            $user->password=Hash::make($request->password);
            $user->name=$user->name;
            $user->email=$user->email;
            $user->save();
            return redirect()->back()->withSuccess('Datos Actualizados Exitosamente');
        }
        else{
            return redirect()->back()->withErrors('La contraseña proporcionada como actual no coincide con la registrada');
        }
    }
}
