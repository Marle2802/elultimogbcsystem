<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecomendacionesController extends Controller
{
    public function index(){

        return view('Recomendaciones.index');

    }
}
