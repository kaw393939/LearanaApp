@extends('layouts.app')

@section('content')


<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<div class="container">
    <h1>All Courses</h1>
<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <td>Title</td>
        <td>Description</td>
        <td>Publish</td>
        <td>View</td>

    </tr>
    </thead>
    <tbody>
    @foreach($courses as $key => $value)
        <tr>
            <td>{{ $value->title }}</td>
            <td>{{ $value->description }}</td>
            <td>{{ $value->publish }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('courses/' . $value->id) }}">View</a>

                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@endsection
