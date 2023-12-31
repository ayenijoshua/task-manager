<?php

namespace App\Providers;

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;
use App\Repositories\Interfaces\RepositoryInterface;
use App\Repositories\UserRepository;
use App\Repositories\TaskRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->when(TaskController::class)
          ->needs(RepositoryInterface::class)
          ->give(function () {
              return (new TaskRepository('k'));
          });

        $this->app->when(UserController::class)
          ->needs(RepositoryInterface::class)
          ->give(function () {
              return (new UserRepository(new \App\Models\User));
          });

          
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
