<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Acogido;
use App\Models\Acogimiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AcogimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Acogido $acogido )
    {
        if (! Gate::allows('insert-acogido', $acogido)) {
            abort(403);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Acogimiento  $acogimiento
     * @return \Illuminate\Http\Response
     */
    public function show(Response $response, Acogimiento $acogimiento)
    {
        if ($response->user()->cannot('show', $acogimiento)) {
            abort(403);
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Acogimiento  $acogimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Acogimiento $acogimiento)
    {
        if ($request->user('admin@acnur.org')->can('destroy', $acogimiento)){
            abort(403);
        }
    }
}

