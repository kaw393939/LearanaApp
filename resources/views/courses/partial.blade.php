<div class="card">
    <div class="card-header">    {{ $value->status }}</div>
    <a href="{{ route('courses.show', ['course' => $course->id]) }}"> View Course</a></td>
</div>