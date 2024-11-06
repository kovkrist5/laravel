@extends('layout')
@section('content')
    <h1>EVIL new category</h1>

    @error('name')
        <div class="alert alert-warning">{{$message}}</div>
    @enderror

    <form action="{{route('categories.store')}}" method="post">
        @csrf
        <fieldset>
            <label for="name">category name</label>
            <input type="text" name="name" id="name">
        </fieldset>
        <button type="submit">save</button>
    </form>
    @endsection