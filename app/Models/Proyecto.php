<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{

    public $table ="proyectos";

    protected $fillable = ['Actividad','Razonsocial', 'RFC', 'NombreDirector', 'Telefonoemp', 'CorreoEmp', 'Propuesta', 'PropuestaOtra', 'NombreProd', 'Descripcion', 'Organizacion', 'Cual', 'asesor_id', 'emprendedor_id', 'created_at', 'updated_at'];

    protected $hidden = [
        'NombreProd', 'remember_token',
    ];

    public function asignacion(){

        return $this->hasOne(Asignacion::class);
    }

    public function emprendedor(){
        
        return $this->belongsTo(Emprendedor::class);
    }

    public function foda(){

        return $this->belongsTo(Foda::class);
    }

    public function ideanegocio(){

        return $this->belongsTo(Ideanegocio::class);
    }


     public function avances(){

        return $this->hasMany(Avance::class);

    }

    public function scopeNombre($query, $Nombre){

        
        return $query->where('NombreProd','LIKE',"%$Nombre%");
           
       }
}
