<tr>
    <td>{{$value->user_id}}</td>
    <td>{{$value->course_id}}</td>
    <td>{{$value->start}}</td>
    <td>{{$value->end}}</td>
    <td>{{$value->open}}</td>
    <td>{{$value->close}}</td>
    <td>{{$value->status}}</td>
    <td>{{$value->publish}}</td>
    <td><a href="{{ route('sections.show', ['course' => $course->id, 'section' => $value->id]) }}"> View Roster</a></td>
</tr>



