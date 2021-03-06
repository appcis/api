<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::before(function ($user) {
            if ($user->permissions === 'superadmin') {
                return true;
            }
        });

        Gate::define('manage-grades', function ($user) {
            return $user->permissions === 'admin';
        });

        Gate::define('manage-agents', function ($user) {
            return $user->permissions === 'admin';
        });

        Gate::define('manage-groupes', function ($user) {
            return $user->permissions === 'admin';
        });

        Gate::define('manage-users', function ($user) {
            return $user->permissions === 'admin';
        });
    }
}
