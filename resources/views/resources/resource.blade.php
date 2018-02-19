@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="box">
            <iframe src="{{$resource->url}}"
                    width="560" height="315" frameborder="0" allowfullscreen></iframe>

        </div>
    </div>





@endsection