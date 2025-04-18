<?php

namespace App\Providers;

use App\Http\Resources\Ticket\TicketResource;
use App\Http\Resources\User\BookmarkResource;
use App\Http\Resources\User\UserResource;
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
        UserResource::withoutWrapping();
    }
}
