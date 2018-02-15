@extends('layouts.app')

@section('content')
    <div class="container">
    <h1>Showing {{ $course->title }}</h1>

    <p>{{$course->description}}</p>
    <p>{{$course->publish}}</p>

    <form action="/courses/{{$course->id}}/section" method="post">{{ csrf_field() }}
        <button type="submit" class="btn btn-default">Add Section</button>
    </form>
    <form action="/courses/{{$course->id}}/resource" method="post">{{ csrf_field() }}
        <button type="submit" class="btn btn-default">Add Resource</button>
    </form>



    <h1>Course Resourcesgit</h1>


    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>User</td>
            <td>Course</td>
            <td>URL</td>
        </tr>
        </thead>
        <tbody>
        @foreach($resources as $key => $value)
            <tr>
                <td>{{ $value->user_id }}</td>
                <td>{{ $value->course_id }}</td>
                <td>{{ $value->url }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>


    </div>

@endsection


