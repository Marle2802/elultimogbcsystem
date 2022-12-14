<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AyudasController extends Controller
{
    public function index (){
        return view('ayudas.index');
    }
}
