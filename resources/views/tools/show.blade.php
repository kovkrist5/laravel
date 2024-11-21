@extends('layout') <!--1:07:49-->

@section('content')
    <h1>{{$tools->name}} [{{$tools->hasFreePlan ? '✓':'X'}}] </h1>
    <h2>{{$tools->category->name}}</h2>
    <p>{{$tools->desc}}</p>
    <a href="{{$tools->link}}">link</a>
    <p>
        @if (!$tools->hasFreePlan)
            <small>price:{{$tools->price}} HUF/month</small>
        @endif
    </p>
@endsection