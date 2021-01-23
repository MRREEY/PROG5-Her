@extends('layout')

@section('content')
    <div id="wrapper">
        <div
            id="page"
            class="container"
            >

            @foreach ($animes as $anime)
                <div class="content">
                    <div class="title">
                        <h2>
                            <a href="/animes/{{ $anime->id }}">
                                {{ $anime->title }}
                            </a>
                        </h2>
                    </div>

                    <p>
                        <img
                        src="{{ $anime->image }}"
                        alt=""
                        class="image image-full"
                        />
                    </p>

                    {!! $anime->excerpt !!}
                </div>
                @endforeach
        </div>
    </div>
