<?php

namespace App\Http\Controllers;

use App\Models\Futsal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;

class FutsalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('futsal');
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
        $futsal = new Futsal();
        $futsal->home = $request->input('home');
        $futsal->away = $request->input('away');
        $futsal->score1 = $request->input('score1');
        $futsal->babak = $request->input('babak');
        $futsal->score2 = $request->input('score2');
        $futsal->note = $request->input('note');
        $futsal->user()->associate($user);
        $futsal->save();
    
        // Redirect or perform any additional actions after saving the data
    
        // For example, redirect back to the form
        return redirect('/futsal');
    }
    

}
