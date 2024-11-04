<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicacionesController extends Controller
{
    // Método para mostrar la vista de publicaciones
    public function showPublicaciones()
    {
        return view('pages.publicaciones');
    }
}