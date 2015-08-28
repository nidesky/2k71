@extends('layouts.default')

@section('main')
    <div class="container posts-list">
        <div class="posts">
            @forelse ($posts as $post)
            <div class="post">
                <div class="upvote">
                    <a href="" class="like-button">
                        <i class="glyphicon glyphicon-menu-up"></i>
                        <span>{{ $post->vote_count }}</span>
                    </a>
                </div>

                <div class="content">
                    <h3 class="title">
                        <a href="#" target="_blank">{{ $post->title }}</a>
                    </h3>
                    <p class="summary">
                        <span>{{ $post->description }}</span>
                    </p>
                    <div class="meta">
                        {{ $post->user->email }} <a target="_blank" href="#">{!! '@'.$post->user->username !!}</a>
                    </div>
                </div>

                <div class="user-info">
                    <a class="user-avatar" href="">
                        <img width="32" class="img-circle" src="/assets/imgs/123.png" alt="Thumb">
                    </a>
                </div>

                <a class="post-link" href="/login.html" target="_blank"></a>
            </div>
            @empty
            @endforelse
        </div>
    </div>
@stop