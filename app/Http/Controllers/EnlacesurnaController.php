<?php

namespace App\Http\Controllers;

use App\Models\Enlacesurna;
use Illuminate\Http\Request;

class EnlacesurnaController extends Controller
{
   
    public function inicio()
    {
        // Pagina de inicio
        return view('welcome');
    }

    public function pantalla_registro()
    {
        // Pagina de inicio
        return view('opciones_registro');
    }

    public function pantalla_votante()
    {
        // Pagina de inicio
        return view('votantes');
    }

    public function pantalla_postulado()
    {
        // Pagina de inicio
        return view('postulados');
    }
    
    

    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        //
    }

    
    public function show(Enlacesurna $enlacesurna)
    {
        //
    }

   
    public function edit(Enlacesurna $enlacesurna)
    {
        //
    }

    
    public function update(Request $request, Enlacesurna $enlacesurna)
    {
        //
    }

    
    public function destroy(Enlacesurna $enlacesurna)
    {
        //
    }
}
