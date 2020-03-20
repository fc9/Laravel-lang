<?php

namespace Fc9\Lang\Providers;

use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Fc9\Lang\Lang;

class LangServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->registerFactories();
        $this->registerMiddleware();
        $this->registerBladeDirectives();
        //$this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);

        // Register the main class to use with the facade
        $this->app->singleton('lang', function () {
            return new Lang();
        });
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/vendor/lang');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'lang');
        } else {
            $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'lang');
        }
    }

    /**
     * Register Config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([__DIR__ . '/../config/lang.php' => config_path('lang.php'),], 'Config');

        $this->mergeConfigFrom(__DIR__ . '/../config/lang.php', 'lang');
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/packages/lang');

        $sourcePath = __DIR__ . '/../resources/views';

        $this->publishes([
            $sourcePath => $viewPath
        ], 'views');

        $this->loadViewsFrom(
            array_merge(
                array_map(
                    function ($path) {
                        return $path . '/vendor/fc9/lang';
                    },
                    config()->get('view.paths')),
                [$sourcePath]
            ),
            'lang');
    }

    /**
     * Register an additional directory of factories.
     *
     * @return void
     */
    public function registerFactories()
    {
        if (!app()->environment('production') && $this->app->runningInConsole()) {
            app(Factory::class)->load(__DIR__ . '/../database/factories');
        }
    }

    /**
     * Register additional directives of Blade.
     *
     * @return void
     */
    public function registerBladeDirectives()
    {
        Blade::directive('langForeach', function () {
            return "<?php foreach(\Fc9\Lang\Lang::getSupportedLanguages() as \$lang): ?>";
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }

    public function registerMiddleware()
    {
        $router = $this->app['router'];
        $router->pushMiddlewareToGroup('web', \Fc9\Lang\Http\Middleware\DefineLocale::class);
    }
}
