@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1 class>New Form</h1>

            <form method="post" action="/animes/{{ $animesItems->id }}">
                @csrf
                @method('PUT')

                <div class="field">
                    <label class="label" for="title">Title</label>

                    <div class="control">
                        <input class="input" type="text" name="title" id="title" value="{{ $animesItems->title }}"/>>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="image">Image(URL)</label>

                    <div class="control">
                        <textarea class="textarea" name="image" id="image" >{{ $animesItems->image }}</textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="description">Description</label>

                    <div class="control">
                        <textarea class="textarea" name="description" id="description">{{ $animesItems->description }}</textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label"for="category">Category:</label>

                    <div class="control">
                        <select class="form-control" id="category" name="category">
                            @foreach($categories as $category)
                                <option value="{{ $category['id'] }}">{{ $category['title'] }}</option>
                            @endforeach
                        </select>
                        @error('category')
                        <p class="help is-danger">{{ $errors->first('category') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>

                </div>

            </form>
        </div>
    </div>
@endsection
