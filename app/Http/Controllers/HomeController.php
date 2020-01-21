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
        $this->middleware('auth', ['except' => ['beranda'] ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function beranda()
    {
        $data = array('title' => 'Pondok Nabawi | Program Anak Shalih Hafal Hadits (ASAH)');
        return view('laman.beranda', $data);
    }
}
