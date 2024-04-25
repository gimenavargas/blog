<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosController extends Controller
{
    /**
     * Muestra la vista correspondiente a /ruta3.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Dos()
    {
        return view('Dos');
    }
    
}