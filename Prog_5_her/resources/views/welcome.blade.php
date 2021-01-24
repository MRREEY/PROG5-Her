@extends('layout')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            AnimeSite
        </div>

        <div class="links">
            <a href="{{ url('listAnime') }}">Animes</a>
            <a href="{{ url('animes/create') }}">Add Anime</a>
            <a href="https://laravel-news.com">test</a>
        </div>

    </div>
</div>
@endsection
