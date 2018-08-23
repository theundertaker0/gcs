<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $bills=Bill::where('id',1)->products;
        $nombres=['juan','Melqui','sagundo'];
        return view('index')->with('bills',$bills);
    }
}
