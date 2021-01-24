@extends('layout')

@section('content')
    <div id="wrapper">
        <div
            id="page"
            class="container"
        >
            <style>
                p {
                    text-align: center;
                }
                h1 {
                    text-align: center;
                }
                img {
                    display: block;
                    margin-left: auto;
                    margin-right: auto;
                }
                h2 {
                    text-align: center;
                }

            </style>
<div class="row">
            @foreach($anime as $key => $data)
                <div class="col-sm card border-0">
                    <h2 class ="card-title">{{$data->title}}</h2>
                    <img class="card-img" src="{{$data->image}}" alt="{{$data->title}}" width="200" height="300">
                    <p>
                        {{$data->description}}
                    </p>
                    <a class="btn btn-light" href="{{route('show', $data->id)}}">Meer</a>
                </div>
            @endforeach
        </div>
            <a class="btn btn-light" href="{{ url('/') }}">Terug</a>
    </div>
    </div>

