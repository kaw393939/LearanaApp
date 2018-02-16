
<h1>My Courses</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <td>Title</td>
        <td>Description</td>
        <td>Publish</td>

    </tr>
    </thead>
    <tbody>
    @foreach($courses as $key => $value)
        <div class="card">
            <div class="card-title">{{ $value->title }}</div>
            <div class="card-body">{{ $value->description }}</div>
            <div class="card-footer">{{ $value->publish }}</div>

        </div>
    @endforeach
    </tbody>
</table>
