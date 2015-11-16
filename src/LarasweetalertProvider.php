<?php namespace rezaar\larasweetalert;

use Illuminate\Support\ServiceProvider;
use rezaar\larasweetalert\Larasweetalert;

class LarasweetalertProvider extends ServiceProvider {

   /**
    * Bootstrap the application services.
    *
    * @return void
    */
   public function boot()
   {
      //
   }

   /**
    * Register the application services.
    *
    * @return void
    */
   public function register()
   {
      return $this->app->bind('register-sweetalert' , function(){

      	return new Larasweetalert;

      });
   }

}