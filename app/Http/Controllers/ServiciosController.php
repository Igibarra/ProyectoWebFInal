<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Servicios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index(Request $request)
    {
        //
        $id=trim($request->get('buscarpor'));
        $servicios= Servicios::orderBy('id','desc')-> where('NomServicio','like',"%$id%")->paginate(3);
       // $var_materias = Servicios::latest()->paginate(2);
        return view('servicios.index',compact('servicios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('servicios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $servicios = new Servicios();
        // $request->validate([
        //     'file' => 'required|image|max:5000',
        //     'nombre'=> 'required',
        //     'descripcion' => 'required'
        // ]);
        // if($request->hasFile('file')){
        //      $imagenes = $request->file('file')->store('public/imagenes/servicios');
        //      $url = Storage::url($imagenes);   
        // }   
        
        // $servicios->NomServicio = $request->nombre;
        // $servicios->Descripcion = $request->descripcion;
        // $servicios->Encargado = $request->encargado;
        // $servicios->Costo = $request->costo;
        // $servicios->Contacto = $request->contacto;
        // $servicios->img = $url;

        // $servicios->save();
        // return redirect()->route('servicios.index',$servicios->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        

         return view('servicios.show', [
                                    //findOrfail lo encuentras o no lo encuentras
            'itemservicios'=>Servicios::findOrFail($id),
            
        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicios $servicios)
    {
       //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicios $servicios)
    {
        
        // $request->validate([
        //     'file' => 'required|image|max:5000',
        //     'nombre'=> 'required',
        //     'descripcion' => 'required'
        // ]);
        // if($request->hasFile('file')){
        //      $imagenes = $request->file('file')->store('public/imagenes/servicios');
        //      $url = Storage::url($imagenes);   
        // }   
        
        // $servicios->NomServicio = $request->nombre;
        // $servicios->Descripcion = $request->descripcion;
        // $servicios->Encargado = $request->encargado;
        // $servicios->Costo = $request->costo;
        // $servicios->Contacto = $request->contacto;
        // $servicios->img = $url;

        // $servicios->save();
        // return redirect()->route('servicios.index',$servicios->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    public function destroy(servicios $servicio){
        $servicio->delete();
    }
}
