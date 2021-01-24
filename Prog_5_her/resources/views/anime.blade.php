<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    >
    <meta
        http-equiv="X-UA-Compatible"
        content="ie=edge"
    >
    <title>Document</title>
    <style>
        p {
            text-align: right;
        }
        h1 {
            text-align: center;
        }
        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

    </style>
</head>
<body>
<h1>{{$animesItem->title}}</h1>
<img src={{$animesItem->image}} width="500" height="600">
<h1>{{$animesItem->description}}</h1>
<p><b>Category:</b></b> <br>{{$animesItem->category->title}}</p>
<p><b>Gepost op:</b></b> <br>{{$animesItem->created_at}}</p>
<p><b>Geüpdate op:</b></b> <br>{{$animesItem->updated_at}}</p>
<form action="{{route('edit', $animesItem->id)}}">
    <button
    type="submit"
    class="btn p-0 text-muted"
    >Edit</button>
</form>
<a href="{{ url('listAnime') }}">Terug naar animes</a>
</body>
</html>
