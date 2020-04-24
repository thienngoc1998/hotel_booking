<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Room;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      view()->composer('Backend.layouts.nav',function ($view) {
            $amountRoom = Room::all()->count();
            $amountRoomExpired = Room::select('count(*)')->whereNotNull('deleted_at');
            $view->withAmountRoom($amountRoom)
                ->withAmountRoomExpired($amountRoomExpired);
      });
        view()->composer(['Frontend.list-room', 'Frontend.select-room'],function ($view) {
            $view->withCategory(Category::all());
        });
    }
}
