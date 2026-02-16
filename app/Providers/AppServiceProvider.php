<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category;

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
        // Share categories with all views (for footer and other includes)
        try {
            $categories = Category::all();
        } catch (\Exception $e) {
            $categories = collect();
        }

        View::share('categories', $categories);
    }
}
