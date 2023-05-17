<?php

namespace App\Http\Controllers;

use App\Models\Bola;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;

class BolaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('bola');
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
        $bola = new Bola();
        $bola->home = $request->input('home');
        $bola->away = $request->input('away');
        $bola->score1 = $request->input('score1');
        $bola->babak = $request->input('babak');
        $bola->score2 = $request->input('score2');
        $bola->note = $request->input('note');
        $bola->user()->associate($user);
        $bola->save();
    
        // Redirect or perform any additional actions after saving the data
    
        // For example, redirect back to the form
        return redirect('/bola');
    }
    

}
