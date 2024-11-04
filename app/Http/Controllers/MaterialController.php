<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function showMaterial()
    {
        return view('pages.material'); // Asegúrate de que 'pages.perfiles' corresponda a una vista existente
    }
}