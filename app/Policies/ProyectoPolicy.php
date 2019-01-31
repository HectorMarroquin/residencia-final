<?php

namespace App\Policies;

use App\User;
 Use App\Models\Emprendedor;
Use App\Models\Proyecto;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProyectoPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


public function edit(User $user, Proyecto $proyectos)
    {
        return $empre->id == $proyectos->emprendedor_id;
    }
}
