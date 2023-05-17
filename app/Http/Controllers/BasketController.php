<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;

class BasketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('basket');
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
        $basket = new Basket();
        $basket->home = $request->input('home');
        $basket->away = $request->input('away');
        $basket->score1 = $request->input('score1');
        $basket->babak = $request->input('babak');
        $basket->score2 = $request->input('score2');
        $basket->note = $request->input('note');
        $basket->user()->associate($user);
        $basket->save();
    
        // Redirect or perform any additional actions after saving the data
    
        // For example, redirect back to the form
        return redirect('/basket');
    }
    

}
