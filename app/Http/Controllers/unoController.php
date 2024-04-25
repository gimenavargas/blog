<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class unoController extends Controller
{
    /**
     * Muestra la vista correspondiente a /ruta3.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function uno()
    {
        return view('uno');
    }
    
}