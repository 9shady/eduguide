<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Supervisor2Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('supervisor2');
    }
}
