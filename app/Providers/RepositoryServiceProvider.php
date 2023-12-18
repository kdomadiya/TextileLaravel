<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Laravel\Cashier\Cashier;
use App\Interfaces\UserRoleRepositoryInterface;
use App\Repositories\UserRoleRepository;
use App\Interfaces\GroupRepositoryInterface;
use App\Repositories\GroupRepository;
class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserRoleRepositoryInterface::class, UserRoleRepository::class);
        $this->app->bind(GroupRepositoryInterface::class, GroupRepository::class);
    }
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    }
}