<?php

namespace App\Providers;

use App\Repositories\NewRepository\BaseEloquentRepository\BaseRepository;
use App\Repositories\NewRepository\BaseEloquentRepository\BaseRepositoryInterface;
use App\Repositories\NewRepository\CommentRepository\CommentRepositoryInterface;
use App\Repositories\OldRepository\CommentRepository;
use App\Repositories\OldRepository\Interface\ICommentRepository;
use App\Repositories\OldRepository\Interface\IPostRepository;
use App\Repositories\OldRepository\PostRepository;
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
        //Old bind
        $this->app->bind(IPostRepository::class, PostRepository::class);
        $this->app->bind(ICommentRepository::class, CommentRepository::class);


        //New bind
        $this->app->bind(BaseRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(CommentRepositoryInterface::class, CommentRepository::class);

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
