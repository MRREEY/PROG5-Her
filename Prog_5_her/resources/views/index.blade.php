@extends('layout')

@section('content')
    <div id="wrapper">
        <div
            id="page"
            class="container"
            >

            @foreach ($animesItems as $key => $data)
                <tr>
                    <th>{{$data->}}</th>
                </tr>
                <div class="content">
                    <div class="title">
                        <h2>
                            <a href="/animes/{{ $animesItem->id }}">
                                {{ $animesItem->title }}
                            </a>
                        </h2>
                    </div>

                    <p>
                        <img
                        src="{{ $animesItem->image }}"
                        alt=""
                        class="image image-full"
                        />
                    </p>

                    {!! $animesItem->excerpt !!}
                </div>
                @endforeach
        </div>
    </div>
