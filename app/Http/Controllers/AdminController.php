<?php

namespace App\Http\Controllers;

use App\Models\servicios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $servicios = new Servicios();
        $request->validate([
            'file' => 'required|image|max:5000',
            'nombre'=> 'required',
            'descripcion' => 'required',
            'encargado'  => 'required',
            'costo'  => 'required',
            'contacto' => 'numeric|required|min:10'
        ]);
        if($request->hasFile('file')){
             $imagenes = $request->file('file')->store('public/imagenes/servicios');
             $url = Storage::url($imagenes);   
        }   
        
        $servicios->NomServicio = $request->nombre;
        $servicios->Descripcion = $request->descripcion;
        $servicios->Encargado = $request->encargado;
        $servicios->Costo = $request->costo;
        $servicios->Contacto = $request->contacto;
        $servicios->img = $url;

        $servicios->save();
        return redirect()->route('servicios.index');
    }
    public function destroy(servicios $servicio){
        $servicio->delete();
    }
}
