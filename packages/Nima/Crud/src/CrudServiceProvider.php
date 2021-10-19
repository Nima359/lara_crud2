<?php

namespace Nima\Crud;

use Illuminate\Support\ServiceProvider;


class CrudServiceProvider extends ServiceProvider {
  /**
   * Register services.
   *
   * @return void
   */
  public function register () {
//    $this->mergeConfigFrom (
//        __DIR__ . "/config/corud.php" , "crud"
//    );
  }
  
  /**
   * Bootstrap services.
   *
   * @return void
   */
  public function boot () {
    $this->loadMigrationsFrom (__DIR__ . "/database/migrations");
    $this->publishes ([
        realpath (__DIR__ . "/database/migrations") => database_path ("migrations")
    ] , 'migrations');
    
    
    $this->loadRoutesFrom (__DIR__ . "/routes/routes.php");
    $this->publishes ([
        __DIR__ . "/routes" => base_path ("/routes/Crud")
    ] , 'Crud');
    
    
    $this->loadViewsFrom (__DIR__ . "/views" , "Crud");
    $this->publishes ([
        __DIR__ . "/views" => base_path ("resources/views/Nima/Crud")
    ] , 'Crud');
    
    
    $this->publishes([
        __DIR__ ."/config/crud.php" => config_path ("crud.php")
    ] , 'Crud');
    
    $this->publishes([
        __DIR__ ."/database/migrations" => database_path ("/migrations")
    ] , "Crud");
    
  }
}
