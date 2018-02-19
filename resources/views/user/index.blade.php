@extends('layouts.app')

@section('content')


<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<div class="container">

    @foreach($courses as $key => $value)
        @include('courses.summary')
    @endforeach

</div>
@endsection
