@extends('layouts.app')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container col-md-8">
        {!! form($form) !!}
    </div>

    <h1>Registrations</h1>
    @foreach($registrations as $key => $value)

        @include('registrations.partial')            <!-- we will also add show, edit, and delete buttons -->

    @endforeach







@endsection