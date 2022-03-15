<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donante;

class DonacionController extends Controller
{
    public function store(Request $request)
    {
        $name = $request->input('donation_personal_name');
        $apellidos = $request->input('donation_personal_last_name1');
        $apellidos = $request->input('donation_personal_last_name2');
        $apellidos = $request->input('donation_personal_email');
        $apellidos = $request->input('donation_personal_mobile');

        return view('thnks');
    }
}
