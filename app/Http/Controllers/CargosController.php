<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cargos;

class CargosController extends Controller
{
    //
    public function store(Request $request)
    {
        // Validate the request...
 
        $Cargo = new Cargos;
 
        $Cargo->nombre = $request->nombre;
        $Cargo->descripcion = $request->desc;
 
        $Cargo->save();
    }

    public function update(Request $request)
    {
        // Validate the request...
                        
        $Cargo = Cargos::find($request->id);
 
        $Cargo->nombre = $request->nombre;
        $Cargo->descripcion = $request->desc;

        $Cargo->save();
    }
    public function delete(Request $request)
    {      
        //validate the reques...
        
        $cargo = Cargos::find($request->id);
        $cargo->delete();
    }
}
