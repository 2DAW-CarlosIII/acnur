<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\AcogimientoResource;
use App\Models\Acogimiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AcogimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function aceptar($id)
    {
        $acogimiento = Acogimiento::find($id);
        $this->authorize('aceptar', $acogimiento);
        $acogimiento->aceptado = true;
        $acogimiento->save();
        return new AcogimientoResource($acogimiento);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acogimientos = Acogimiento::where('user_id', Auth::id())->get();
        return AcogimientoResource::collection($acogimientos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $acogimiento = json_decode($request->getContent(), true);

        $acogimiento = Acogimiento::create($acogimiento);

        return new AcogimientoResource($acogimiento);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Acogimiento  $acogimiento
     * @return \Illuminate\Http\Response
     */
    public function show(Acogimiento $acogimiento)
    {
        return new AcogimientoResource($acogimiento);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Acogimiento  $acogimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Acogimiento $acogimiento)
    {
        $acogimientoData = json_decode($request->getContent(), true);
        $acogimiento->update($acogimientoData);

        return new AcogimientoResource($acogimiento);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Acogimiento  $acogimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Acogimiento $acogimiento)
    {
        $this->authorize('delete', $acogimiento);
        if(!$acogimiento->aceptado) {
            $acogimiento->delete();
        }
    }
}
