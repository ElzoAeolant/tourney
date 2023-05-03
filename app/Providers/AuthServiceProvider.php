<?php

namespace App\Providers;

use App\Models\Participant;
use App\Policies\ParticipantPolicy;
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
        Participant::class => ParticipantPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {

        $this->registerPolicies();

        Gate::define('manage-users', 'App\Policies\UserPolicy@manageUsers');
        Gate::define('manage-items', 'App\Policies\UserPolicy@manageItems');
    }
}
