@extends('layouts.app')

@section('content')
    <h1>Showing {{ $course->title }}</h1>

    <p>{{$course->description}}</p>
    <p>{{$course->publish}}</p>

    <a href="{{ route('sections.create', ['course' => $course->id]) }}">Add Section</a>
    <h1>Sections</h1>

    @foreach($sections as $key => $value)
        @include('sections.partial')
    @endforeach

@endsection