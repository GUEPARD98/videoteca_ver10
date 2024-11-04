<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestacadosController extends Controller
{
    public function index()
    {
        return view('pages.destacados');
    }
}