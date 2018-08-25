<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
       return view('index');
    }
}
