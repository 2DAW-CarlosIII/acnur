<?php

namespace App\Http\Controllers;

use App\Models\Donacion;
use App\Models\Donante;
use Illuminate\Http\Request;

class DonacionesController extends Controller
{
    public function postDonacion(Request $request) {

        if(!$donante = Donante::where('donation_personal_email', $request->input('donation_personal_email'))->first()) {
            $donante = new Donante();
            $donante->donation_personal_name = $request->input('donation_personal_name');
            $donante->donation_personal_last_name1 = $request->input('donation_personal_last_name1');
            $donante->donation_personal_last_name2 = $request->input('donation_personal_last_name2');
            $donante->donation_personal_email = $request->input('donation_personal_email');
            $donante->donation_personal_mobile = $request->input('donation_personal_mobile');
            $donante->save();
        }

        $donacion = new Donacion();
        $donacion->donante_id = $donante->id;
        $donacion->partner_type_qty = $request->input('partner_type_qty');
        $donacion->save();

        return view('thanks', [
            'donacion' => $donacion,
            'donante' => $donante
        ]);
    }

    public function areaPrivada() {
        $donaciones = Donacion::all();
        $donantesObj = Donante::all();

        foreach($donantesObj as $donante) {
            $donantes[$donante->id] = $donante;
        }

        return view('donations',[
            'donantes' => $donantes,
            'donaciones' => $donaciones
        ]);
    }
}
