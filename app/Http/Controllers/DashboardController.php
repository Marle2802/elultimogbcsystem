<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Reserva;
use App\Models\Servicio;
use App\Models\Venta;
use App\Models\PlanServicio;
use App\Models\DomoCaracteristica;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $reservas = DB::table('reserva')->count();
        $reservasEnero = DB::table('reserva')->whereMonth('fechareserva', '=', '01')->count();
        $reservasFebrero = DB::table('reserva')->whereMonth('fechareserva', '=', '02')->count();
        $reservassMarzo = DB::table('reserva')->whereMonth('fechareserva', '=', '03')->count();
        $reservaAbril = DB::table('reserva')->whereMonth('fechareserva', '=', '04')->count();
        $reservasMayo = DB::table('reserva')->whereMonth('fechareserva', '=', '05')->count();
        $reservasJunio = DB::table('reserva')->whereMonth('fechareserva', '=', '06')->count();
        $reservasJulio = DB::table('reserva')->whereMonth('fechareserva', '=', '07')->count();
        $reservasAgosto = DB::table('reserva')->whereMonth('fechareserva', '=', '08')->count();
        $reservasSeptiembre = DB::table('reserva')->whereMonth('fechareserva', '=', '09')->count();
        $reservasOctubre = DB::table('reserva')->whereMonth('fechareserva', '=', '10')->count();
        $reservasNoviembre = DB::table('reserva')->whereMonth('fechareserva', '=', '11')->count();
        $reservasDiciembre = DB::table('reserva')->whereMonth('fechareserva', '=', '12')->count();





        return view('dashboard', compact('reservas','reservasEnero','reservasFebrero','reservasMarzo','reservasAbril','reservasMayo','reservasJunio','reservasJulio','reservasAgosto',
        'reservasSeptiembre','reservasOctubre','reservasNoviembre','reservasDiciembre',));

    }
} 