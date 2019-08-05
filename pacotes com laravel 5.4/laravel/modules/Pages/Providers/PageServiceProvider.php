<?php

namespace Modules\Pages\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class PageServiceProvider extends ServiceProvider
{
    //carrega as configuraçãoes
    public function boot()
    {
        Route::namespace('Modules\Pages\Http\Controllers')
         ->group(__DIR__.'/../Routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../View/','Page');
    }
    public function register()
    {

    }
}