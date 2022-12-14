<?php

namespace App\Http\Controllers;
use App\Models\Domo;
use App\Models\Plan;
use App\Models\Venta;
use App\Models\Reserva;
use App\Models\Servicio;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index(){

        $venta =Venta::all()->count();
        $reserva =Reserva::all()->count();
        $domo =Domo::all()->count();
        $plan =Plan::all()->count();

        $reservaEnero = DB::table('reserva')->whereMonth('fechareserva', '=', '01')->count();
        $reservaFebrero = DB::table('reserva')->whereMonth('fechareserva', '=', '02')->count();
        $reservaMarzo = DB::table('reserva')->whereMonth('fechareserva', '=', '03')->count();
        $reservaAbril = DB::table('reserva')->whereMonth('fechareserva', '=', '04')->count();
        $reservaMayo = DB::table('reserva')->whereMonth('fechareserva', '=', '05')->count();
        $reservaJunio = DB::table('reserva')->whereMonth('fechareserva', '=', '06')->count();
        $reservaJulio = DB::table('reserva')->whereMonth('fechareserva', '=', '07')->count();
        $reservaAgosto = DB::table('reserva')->whereMonth('fechareserva', '=', '08')->count();
        $reservaSeptiembre = DB::table('reserva')->whereMonth('fechareserva', '=', '09')->count();
        $reservaOctubre = DB::table('reserva')->whereMonth('fechareserva', '=', '10')->count();
        $reservaNoviembre = DB::table('reserva')->whereMonth('fechareserva', '=', '11')->count();
        $reservaDiciembre = DB::table('reserva')->whereMonth('fechareserva', '=', '12')->count();



        $ventaEnero = DB::table('venta')->whereMonth('fechareserva', '=', '01')->count();
        $ventaFebrero = DB::table('venta')->whereMonth('fechareserva', '=', '02')->count();
        $ventaMarzo = DB::table('venta')->whereMonth('fechareserva', '=', '03')->count();
        $ventaAbril = DB::table('venta')->whereMonth('fechareserva', '=', '04')->count();
        $ventaMayo = DB::table('venta')->whereMonth('fechareserva', '=', '05')->count();
        $ventaJunio = DB::table('venta')->whereMonth('fechareserva', '=', '06')->count();
        $ventaJulio = DB::table('venta')->whereMonth('fechareserva', '=', '07')->count();
        $ventaAgosto = DB::table('venta')->whereMonth('fechareserva', '=', '08')->count();
        $ventaSeptiembre = DB::table('venta')->whereMonth('fechareserva', '=', '09')->count();
        $ventaOctubre = DB::table('venta')->whereMonth('fechareserva', '=', '10')->count();
        $ventaNoviembre = DB::table('venta')->whereMonth('fechareserva', '=', '11')->count();
        $ventaDiciembre = DB::table('venta')->whereMonth('fechareserva', '=', '12')->count();



        return view('Dashboard', compact('venta','reserva','plan','domo','reservaEnero','reservaFebrero','reservaMarzo',
        'reservaAbril','reservaMayo','reservaJunio','reservaJulio','reservaAgosto','reservaSeptiembre','reservaOctubre','reservaNoviembre',
        'reservaDiciembre','ventaEnero','ventaFebrero','ventaMarzo','ventaAbril','ventaMayo','ventaJunio','ventaJulio',
        'ventaAgosto','ventaSeptiembre','ventaOctubre','ventaNoviembre','ventaDiciembre'));



      


    }
}

