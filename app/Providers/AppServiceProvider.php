<?php

namespace App\Providers;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Gate::define('manage_siswa',function(User $user){
            return in_array($user->role, ['admin', 'Guru','Ketua']);
        });
        Gate::define('manage_news',function(User $user){
            return in_array($user->role, ['admin', 'Sekretaris']);
        });
        Gate::define('manage_infaq',function(User $user){
            return in_array($user->role, ['admin', 'Bendahara']);
        });
        Gate::define('manage_user',function(User $user){
            return $user->role === 'admin';
        });
    }
}
