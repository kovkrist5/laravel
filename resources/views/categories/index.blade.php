@extends('layout')
@section('content')
    <h1>EVIL Category index</h1>

    @if (session('success'))
    <div class="alert alert-success">
        {{session( 'success')}}
    </div>

    @endif

    <ul>
        @foreach ( $categories as $category )
            <li> {{$category->id}} - {{$category->name}}</li>
        @endforeach
    </ul>
@endsection


