<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminUsersController extends Controller
{
    //

    public function edit(){
        $user = User::find(\Auth::user()->id);

        return view('auth.edit')->with('user', $user);
    }


    public function store(Request $request){
        $this->validate($request, [
            'avatar' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $filename = \Auth::user()->id.'_'.time().'.'.$request->avatar->getClientOriginalExtension();
        $request->avatar->move(public_path('uploads/avatars'), $filename);

        $user = User::find(\Auth::user()->id);
        $user->name=$request->input('name');
        $user->last_name=$request->input('last_name');
        $user->address=$request->input('address');
        $user->city=$request->input('city');
        $user->state=$request->input('state');
        $user->cp=$request->input('cp');
        $user->email=$request->input('email');
        $user->avatar=$filename;
        $user->save();
        return redirect()->back()->withSuccess('Datos Actualizados Exitosamente');


    }
}
