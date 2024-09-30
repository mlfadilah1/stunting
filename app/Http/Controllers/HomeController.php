<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *app/Http/Controllers/HomeController.php
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    // public function stunting()
    // {
    //     return view('user.dashboard');
    // }
    // public function medis()
    // {
    //     return view('admin.ahligizi.medis');
    // }
}
