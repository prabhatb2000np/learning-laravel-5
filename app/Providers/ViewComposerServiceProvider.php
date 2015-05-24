<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
        //
        $this->composeNavigation();
    }

    /**
     * Compose the navigation bar.
     */
    private function composeNavigation() {
        //view()->composer('articles.nav',);
        view()->composer('articles.nav', function($view) {
            $view->with('latest', \App\Article::latest()->first());
        }
        );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        //
    }

}
