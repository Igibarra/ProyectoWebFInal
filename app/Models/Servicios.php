<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servicios extends Model
{
    
    public $timestamps=false;
    protected $fillable =[
        'id','NomServicio','Descripcion','Encargado','Costo','Contacto',
    ]; 
    protected $table='servicios';

    public function scopeNombre($query, $id){

        if($id){
            return $query->where('NomServicio','=',"%$id%");
        }
    }
}