<?php

namespace App\Providers;

use App\Article;
use App\Models\Category;
use App\Models\Review;
use App\Models\Room;
use App\Models\Service;
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
        view()->composer('Frontend.booking',function ($view) {
            $view->withServices(Service::all());
        });
        view()->composer(['Frontend.dashboard','Frontend.room-detail'],function ($view) {
            $articles = Article::orderBy('id','desc')->skip(0)
                ->take(3)->get();
            $rooms = Room::orderBy('id','desc')->skip(0)
                ->take(3)->get();
            $comments = Review::orderBy('id','desc')->skip(0)
                ->take(3)->get();
            $view->withArticles($articles)->withRooms($rooms)->withComments($comments);;
        });
    }
}
