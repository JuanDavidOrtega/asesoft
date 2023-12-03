<?php

namespace App\Http\Controllers;

use App\Models\asesore;
use Illuminate\Http\Request;

class asesoresController extends Controller
{
    //
    public function index()
    {
        $asesores = asesore::orderBy('id_asesores','desc')->paginate();
        return view('asesores.index', compact('asesores'));
    }
    
    public function create()
    {
        return view('asesores.create');
    }
    
    public function Fcreate(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'correo' => 'required|email',
            'password' => 'required',
            'id_tienda' => 'required',
        ]);

        $asesore = new asesore ();
        $asesore->nombre = $request->nombre;
        $asesore->apellido = $request->apellido;
        $asesore->correo = $request->correo;
        $asesore->password = $request->password; 
        $asesore->id_tienda = $request->id_tienda; 

        try {
            // Guardar el asesor en la base de datos
            $asesore->save();

            // Redirigir a la página de detalles del asesor recién creado
            return redirect()->route('asesores.show', $asesore);
        } catch (\Exception $e) {
            // Ocurrió un error al guardar el asesor
            // Puedes manejar el error de la manera que prefieras
            return redirect()->back()->withInput()->withErrors(['error' => 'No se pudo guardar el usuario.']);
        }
    }


    public function show($id)
    {
        $asesore = asesore::find($id);
        return view('asesores.show', compact('asesore'));
    }

    public function edit($id){
 
        $asesore = asesore::find($id);
        return view('asesores.edit', compact('asesore'));

    }

    public function update(Request $request,asesore $id){

        $id->nombre = $request->nombre;
        $id->apellido = $request->apellido;
        $id->correo = $request->correo;
        $id->password = $request->password; 
        $id->id_tienda = $request->id_tienda; 

        $id->save();
        return redirect()->route('asesores.show', $id);
    }
}
