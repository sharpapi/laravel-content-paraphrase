<?php

declare(strict_types=1);

namespace SharpAPI\ContentParaphrase;

use Illuminate\Support\ServiceProvider;

/**
 * @api
 */
class ContentParaphraseProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/sharpapi-content-paraphrase.php' => config_path('sharpapi-content-paraphrase.php'),
            ], 'sharpapi-content-paraphrase');
        }
    }

    /**
     * Register the application services.
     */
    public function register(): void
    {
        // Merge the package configuration with the app configuration.
        $this->mergeConfigFrom(
            __DIR__.'/../config/sharpapi-content-paraphrase.php', 'sharpapi-content-paraphrase'
        );
    }
}