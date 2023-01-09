<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket_data;
use App\Models\Kategori;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $kategori = Kategori::all();
        $paket_data = Paket_data::all();
        return view('index', compact(['paket_data','kategori']));
    }
}
