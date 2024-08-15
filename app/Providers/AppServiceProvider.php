<?php

namespace App\Providers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //Disable LazyLoading
        Model::preventLazyLoading();

        /*- when You want to style with Bootstrap 5- */
      //  Paginator::useBootstrapFive();

        /*
        //Need To Be Responsible For The user to edit the Job
        Gate::define('edit-job', function (User $user, Job $job){
            return $job->employer->user->is($user);
        });
        */
    }
}
