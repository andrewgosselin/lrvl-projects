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
        $this->loadViewsFrom(__DIR__.'/resources/views', 'projects');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->publishes([__DIR__.'/public' => public_path('vendor/lrvl/projects')], 'public');
        View::share('projectsApp', [
            'name' => 'Projects',
            'slug' => 'projects',
            'icon' => [
                "type" => "url",
                "value" => "/vendor/lrvl/projects/icon.png"
            ]
        ]);
    }

    /**
     * Register the application services.
     */
    public function register()
    {
    }
}