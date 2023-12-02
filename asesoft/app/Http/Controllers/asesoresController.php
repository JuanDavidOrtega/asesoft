<?php

namespace App\Http\Controllers;

use App\Models\asesore;
use Illuminate\Http\Request;

class asesoresController extends Controller
{
    //
    public function index()
    {
        $asesores = asesore::paginate();
        return view('asesores.index', compact('asesores'));
    }

    public function create()
    {
        return view('asesores.create');
    }
    
    public function show($asesores)
    {
        
        return view('asesores.show', compact('asesores'));
    }
}
