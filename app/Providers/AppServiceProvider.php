<?php

namespace App\Providers;

// use App\Models\Category;
// use App\Models\SubCategory;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
// use Illuminate\Support\Facades\Schema;
use view;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    //  view()->share('categories',$categories = Category::all());
    //  view()->share('subcategories',$subcategories = SubCategory::all());

    {
        Paginator::useBootstrap();
    }
    }
}
