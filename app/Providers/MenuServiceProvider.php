<?php

namespace App\Providers;

use App\Http\Resources\CategoryResource;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\ServiceProvider;

class MenuServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->topMenu();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    public function topMenu(){
        View::composer(['layouts.components.header','layouts.main', 'layouts.components.footer'], function ($view){
            $view->with('categories', CategoryResource::collection(Category::all()));
            $view->with('avatar', 'images/avatar.jpg');
        });
    }
}
