<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CincoController extends Controller
{
    /**
     * Muestra la vista correspondiente a /ruta3.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Cinco()
    {
        return view('Cinco');
    }
    
}