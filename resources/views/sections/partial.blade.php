<div class="card">
    <div class="card-header">    {{ $value->status }}</div>
    <a href="{{ route('sections.show', ['course' => $course->id, 'section' => $value->id]) }}"> View</a></td>
</div>