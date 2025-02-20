<?php

namespace App\Providers;

use App\Contracts\NotificationInterface;
use App\Services\EmailNotificationService;
use Illuminate\Support\ServiceProvider;
use App\Services\GreetingService;
use App\Services\SMSNotificationService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // $this->app->singleton('greeting', function(){
        //     return new GreetingService();
        // });

        //$this->app->bind(NotificationInterface::class, EmailNotificationService::class);
        //$this->app->bind(NotificationInterface::class, SMSNotificationService::class);

        //$this->app->singleton(NotificationInterface::class, EmailNotificationService::class);
        $this->app->singleton(NotificationInterface::class, SMSNotificationService::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
