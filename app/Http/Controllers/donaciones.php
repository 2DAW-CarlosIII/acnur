<?php

namespace App\Http\Controllers;

use App\Models\donacion;
use Illuminate\Http\Request;

class donaciones extends Controller
{
    public function show()
    {
        $donaciones = Donacion::all();
        return view('donacion', compact('donaciones'));
    }
}
