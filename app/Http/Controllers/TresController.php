<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TresController extends Controller
{
    /**
     * Muestra la vista correspondiente a /ruta3.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Tres()
    {
        return view('Tres');
    }
    
}