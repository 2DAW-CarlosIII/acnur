<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Acogimiento;
use Illuminate\Http\Request;
use App\Http\Resources\AcogimientoResource;

class AcogimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AcogimientoResource::collection(Acogimiento::paginate(10));

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
        $acogimiento->delete();
    }
}
