<?php
namespace Lrvl\ProjectsApp;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;

class ProjectsAppProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        include __DIR__.'/routes/web.php';
        $this->loadViewsFrom(__DIR__.'/resources/views', 'mail');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        View::share('projectsApp', [
            'name' => 'Mail',
            'slug' => 'mail'
        ]);
    }

    /**
     * Register the application services.
     */
    public function register()
    {
    }
}