<?php

namespace  Hoanghiep\Library;

use Illuminate\Support\ServiceProvider;

class HoanghiepLibraryProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
            $this->publishes([
                __DIR__.'/src/'=> public_path('/library'),
            ]);
    }

}
