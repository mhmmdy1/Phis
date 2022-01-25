<?php

namespace App\Http\Controllers;

use App\Models\Scenerio;
use App\Http\Requests\StoreScenerioRequest;
use App\Http\Requests\UpdateScenerioRequest;

class ScenerioController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreScenerioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreScenerioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Scenerio  $scenerio
     * @return \Illuminate\Http\Response
     */
    public function show(Scenerio $scenerio)
    {
        return view('scenerios.'.$scenerio->key,['uuid'=>$scenerio->uuid]);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Scenerio  $scenerio
     * @return \Illuminate\Http\Response
     */
    public function edit(Scenerio $scenerio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateScenerioRequest  $request
     * @param  \App\Models\Scenerio  $scenerio
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateScenerioRequest $request, Scenerio $scenerio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Scenerio  $scenerio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scenerio $scenerio)
    {
        //
    }
}
