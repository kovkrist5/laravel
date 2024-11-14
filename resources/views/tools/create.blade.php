@extends('layout')
@section('content')
    <h1>New tool</h1>

    @error('name')
        <div class="alert alert-warning">{{$message}}</div>
    @enderror

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>

        </div>
    @endif
    <form action="{{route('tools.store')}}" method="post">
        @csrf
        <fieldset>
            <label for="name">Tools' name</label>
            <input type="text" name="name" id="name">
        </fieldset>

        <fieldset>
            <label for="category_id">Category</label>
            <select name="category_id" id="category_id">
                @foreach ($categories as $category)
                    <option value="{{$category -> id}}">{{$category-> name}}</option>
                @endforeach
        </fieldset>

        <fieldset>
            <label for="desc">Description</label>
            <textarea name="desc" id="desc"></textarea>
        </fieldset>

        <fieldset>
            <label for="link">Link</label>
            <input type="text" name="link" id="link">
        </fieldset>

        <fieldset>
            <label for="plan">are you stupid enough to pay for ai?</label>
            <input type="checkbox" name="plan" id="plan">
        </fieldset>    

        <fieldset>
            <label for="price">Price (Monthly)</label>
            <input type="number" name="price" id="price">
        </fieldset>

        <button type="submit">save</button>
    </form>
@endsection