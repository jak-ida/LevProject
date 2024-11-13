<?php

namespace App\Http\Controllers;

use App\Models\PollingStation;
use Illuminate\Http\Request;

class PollingStationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        $pollingStations = PollingStation::all();
        return view('home',compact('pollingStations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PollingStation $pollingStation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PollingStation $pollingStation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PollingStation $pollingStation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PollingStation $pollingStation)
    {
        //
    }
}
