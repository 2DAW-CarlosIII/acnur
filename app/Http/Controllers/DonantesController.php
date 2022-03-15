<?php

namespace App\Http\Controllers;

use App\Models\Donacion;
use App\Models\Donante;
use Illuminate\Http\Request;

class DonantesController extends Controller
{
    public function index(Request $request){
        $donante = new Donante;
        $donantes = Donante::all();
        foreach($donantes as $donanteBase){
            if($donanteBase->email == $request->input('donation_personal_email')){
                $donanciones = new Donacion;
                $donanciones->donante_id = $donanteBase->id;
                $donanciones->partner = $request->input('partner_type_qty');
                $donanciones->save();
            }else{
                $donante->name = $request->input('donation_personal_name');
                $donante->name1 = $request->input('donation_personal_last_name1');
                $donante->name2 = $request->input('donation_personal_last_name2');
                $donante->email = $request->input('donation_personal_email');
                $donante->mobile = $request->input('donation_personal_mobile');
                $donante->save();

                $donanciones = new Donacion;
                $donanciones->donante_id = $donante->id;
                $donanciones->partner = $request->input('partner_type_qty');
                $donanciones->save();
            }
        }

        /*
        $donante->name = $request->input('donation_personal_name');
            $donante->name1 = $request->input('donation_personal_last_name1');
            $donante->name2 = $request->input('donation_personal_last_name2');
            $donante->email = $request->input('donation_personal_email');
            $donante->mobile = $request->input('donation_personal_mobile');
            $donante->save();

            $donanciones = new Donacion;
            $donanciones->donante_id = $donante->id;
            $donanciones->partner = $request->input('partner_type_qty');
            $donanciones->save();*/

        //return $donantes;
        return view('thanks');
    }
}
