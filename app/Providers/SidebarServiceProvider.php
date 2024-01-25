<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Helpers\SideMenusHelper;
use Illuminate\Support\Facades\Auth;
class SidebarServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            if (Auth::check()) {
                $roleId = Auth::user()->role_id;
                $sidebar = SideMenusHelper::getSideMenu($roleId);
                $view->with('sidebar', $sidebar);
            }
        });
    }
}
