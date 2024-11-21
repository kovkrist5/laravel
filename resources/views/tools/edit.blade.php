@extends('layout')
@section('content')

    @error('name')
        <div class="alert alert-warning">{{$message}}</div>
    @enderror

    <form action="{{route('tools.update', $tools->id)}}" method="post">
        @csrf
        @method('PUT')
        <fieldset>
            <label for="name">Tool name</label>
            <input type="text" name="name" id="name" value="{{old('name', $tools->name)}}">
        </fieldset>
        <button type="submit">save</button>
    </form>
@endsection