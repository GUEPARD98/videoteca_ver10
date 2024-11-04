<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilesController extends Controller
{
    public function showPerfiles()
    {
        return view('pages.perfiles'); // Asegúrate de que 'pages.perfiles' corresponda a una vista existente
    }
}