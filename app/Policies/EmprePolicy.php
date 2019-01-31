<?php

namespace App\Policies;

use App\User;
use App\Models\Emprendedor;
use Illuminate\Auth\Access\HandlesAuthorization;

class EmprePolicy
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

    public function checar(User $user, Emprendedor $empre)
    {
        return $user->id == $empre->user_id;
    }


}
