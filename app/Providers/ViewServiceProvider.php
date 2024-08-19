<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\SettingModal;
use Illuminate\Support\Facades\View;
class ViewServiceProvider extends ServiceProvider
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
        View::composer('*',function($view){
        
            $logo = SettingModal::where('id',2)->first();
            $view->with('logo',$logo->value);
        });
    }
}
