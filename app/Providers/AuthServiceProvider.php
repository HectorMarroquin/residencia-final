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
        'App\Model' => 'App\Policies\ModelPolicy',
        Proyecto::class => ProyectoPolicy::class, 
        
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
