<?php

namespace App\Providers\Clients;

use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('clients.header', function ($view) {
            $categories = Category::get()->toTree(); // Lấy dữ liệu dạng cây
            $view->with('categories', $categories);
        });
    }
}
