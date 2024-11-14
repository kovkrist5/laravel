@extends('layout')
@section('content')

<h1>
    Tools 
    <a style="font-size: 15px" href="{{route('tools.create')}}">New Tools</a>
</h1>

@if (session('success'))
<div class="alert alert-success">
    {{session( 'success')}}
</div>

@endif
  <ul>
        @foreach ( $tools as $tool )
        <li> 
            {{$tool->name}}
            <a class="button" href="{{route('tools.show', $tool->id )}}">show</a>
            <a class="button" href="{{route('tools.edit', $tool->id )}}">edit</a>
            <form action="{{route('tools.destroy', $tool->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('girly are you sure')">delete</button>
            </form>
        </li>
        @endforeach
  </ul>
@endsection