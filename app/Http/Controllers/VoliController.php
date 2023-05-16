<?php

namespace App\Http\Controllers;

use App\Models\voli;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $user = Auth::user();
        $voli = new Voli();
        $voli->home = $request->input('home');
        $voli->away = $request->input('away');
        $voli->score1 = $request->input('score1');
        $voli->set1 = $request->input('set1');
        $voli->score2 = $request->input('score2');
        $voli->set2 = $request->input('set2');
        $voli->user()->associate($user);
    
        $voli->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(voli $voli)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(voli $voli)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, voli $voli)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(voli $voli)
    {
        //
    }
}
