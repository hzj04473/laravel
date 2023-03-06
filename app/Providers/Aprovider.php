<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\Acontroller;
use App\Http\Controllers\Basecontroller;

class Aprovider extends ServiceProvider
{
  /**
   * Register services.
   */
  public function register(): void
  {
    $this->app->bind(Acontroller::class, function ($app) {
      return new Acontroller($app->make(Basecontroller::class));
    });

    // $this->app->singleton(Acontroller::class, function ($app) {
    //   return new Acontroller($app->make(Basecontroller::class));
    // });
  }

  /**
   * Bootstrap services.
   */
  public function boot(): void
  {
    // $this->app->singleton(Acontroller::class, function ($app) {
    //   return new Acontroller($app->make(Basecontroller::class));
    // });

    // $this->app->singleton("Aclass", function ($app) {
    //   return new Acontroller($app->make(Basecontroller::class));
    // });
  }
}