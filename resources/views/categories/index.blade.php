<!--37:37-->

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
            <li> 
                {{$category->name}}
                <a class="button" href="{{route('categories.show', $category->id )}}">show</a>
                <a class="button" href="{{route('categories.edit', $category->id )}}">edit</a>
                <form action="{{route('categories.destroy', $category->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('girly are you sure')">delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection


