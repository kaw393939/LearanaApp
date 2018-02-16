@extends('layouts.app')

@section('content')


<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<div class="container">
    <h1>All Courses</h1>

    @foreach($courses as $key => $value)

        <div class="card">
            <div class="card-title">{{ $value->title }} - {{ $value->publish }}</div>
            <div class="card-body">{{ $value->description }}</div>
            <div class="card-footer"><a class="btn btn-small btn-success" href="{{ route('courses.show', ['course' => $value->id]) }}">View</a></div>

        </div>
    @endforeach

</div>
@endsection
