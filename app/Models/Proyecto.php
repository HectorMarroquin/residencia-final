<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{

      protected $fillable = ['Folio','Actividad','Razonsocial', 'RFC', 'NombreDirector', 'Telefonoemp', 'CorreoEmp', 'Propuesta', 'PropuestaOtra', 'NombreProd', 'Descripcion', 'Organizacion', 'Cual', 'asesor_id', 'emprendedor_id', 'created_at', 'updated_at'];

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
}
