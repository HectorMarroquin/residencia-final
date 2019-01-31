<?php

namespace App\Providers;

use App\Models\Proyecto;
use App\Models\Colaborador;
use App\Models\Emprendedor;
use App\Models\Fase;
use App\Models\Avance;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model\User' => 'App\Policies\UserPolicy',
        'App\Model\Proyecto' => 'App\Policies\ProyectoPolicy',
        'App\Model\Emprendedor' => 'App\Policies\EmprePolicy',
        
        
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
