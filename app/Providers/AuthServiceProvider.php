<?php

namespace App\Providers;


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
<<<<<<< HEAD
        //'App\Model' => 'App\Policies\ModelPolicy',
       // Proyecto::class => ProyectoPolicy::class, 
        
=======
        'App\Model\User' => 'App\Policies\UserPolicy', 
>>>>>>> 13b32540bac11f4bfe874c2726046490c3aaba6a
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
