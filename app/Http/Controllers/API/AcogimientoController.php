<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\AcogimientoResource;
use App\Models\Acogimiento;
use App\Models\User;
use Illuminate\Http\Request;

class AcogimientoController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(Acogimiento::class, 'acogimiento');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AcogimientoResource::collection(Acogimiento::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', Acogimiento::class);

        $acogimientoData = json_decode($request->getContent(), true);

        $acogimiento = Acogimiento::create($acogimientoData);

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
        $this->authorize('view', $acogimiento);

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
        $this->authorize('update', $acogimiento);

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

    public function aceptar(User $user, Request $request) {
        $aceptado = true;
        if($user->id === $request->id)
            $aceptado = false;
    }
}
