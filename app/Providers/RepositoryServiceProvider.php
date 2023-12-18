<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Laravel\Cashier\Cashier;
use App\Interfaces\GroupRepositoryInterface;
use App\Repositories\GroupRepository;
use App\Interfaces\AccountRepositoryInterface;
use App\Repositories\AccountRepository;
use App\Interfaces\IncomeExpenseRepositoryInterface;
use App\Repositories\IncomeExpenseRepository;
use App\Interfaces\CategoryRepositoryInterface;
use App\Repositories\CategoryRepository;
use App\Interfaces\ProductRepositoryInterface;
use App\Repositories\ProductRepository;
use App\Interfaces\StockRepositoryInterface;
use App\Repositories\StockRepository;
use App\Interfaces\OrderRepositoryInterface;
use App\Repositories\OrderRepository;
use App\Interfaces\OrderItemRepositoryInterface;
use App\Repositories\OrderItemRepository;
use App\Interfaces\UserRoleRepositoryInterface;
use App\Repositories\UserRoleRepository;
use App\Interfaces\UserRepositoryInterface;
use App\Repositories\UserRepository;
use App\Interfaces\StoreRepositoryInterface;
use App\Repositories\StoreRepository;
use App\Interfaces\StoreOrderRepositoryInterface;
use App\Repositories\StoreOrderRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(GroupRepositoryInterface::class, GroupRepository::class);
        $this->app->bind(AccountRepositoryInterface::class, AccountRepository::class);
        $this->app->bind(IncomeExpenseRepositoryInterface::class, IncomeExpenseRepository::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(StockRepositoryInterface::class, StockRepository::class);
        $this->app->bind(OrderRepositoryInterface::class, OrderRepository::class);
        $this->app->bind(OrderItemRepositoryInterface::class, OrderItemRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(UserRoleRepositoryInterface::class, UserRoleRepository::class);
        $this->app->bind(StoreRepositoryInterface::class, StoreRepository::class);
        $this->app->bind(StoreOrderRepositoryInterface::class, StoreOrderRepository::class);
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