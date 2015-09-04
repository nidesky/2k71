<?php

namespace Ik47\Providers;


use Ik47\Repositories\Contracts\PostRepositoryInterface;
use Ik47\Repositories\PostRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $this->app->bind(
            PostRepositoryInterface::class,
            PostRepository::class
        );
    }
}