@extends('dashboard.layout')
@section('content')
    <h1>{{$post->title}}</h1>
    <h2>{{$post->description}}</h2>
    <h3>{{$post->content}}</h3>
@endsection     