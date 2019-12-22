@extends('admin.main')


@section('content')

<div class="uk-container">
  <a href="{{ route('course.add') }}"  class="uk-button uk-button-primary">Add Course</a>
    <table class="uk-table uk-table-hover uk-table-divider">
    <thead>
        <tr>
            <th>Course Id</th>
            <th>Id</th>
            <th>Course Name</th>
             <th>Section</th>
              <th>Seat</th>
              <th>Category</th>
              <th>Preq</th>
              <th>Status</th>
              <th>Edit</th>
               <th>Delete</th>
        </tr>
    </thead>
    <tbody>

            @foreach($courses as $course)

        <tr>
            <td>{{$course->c_id}}</td>
            <td>{{$course->id}}</td>
            <td>{{$course->course_name}}</td>
             <td>
{{$course->section}}
            </td>
            <td>
{{$course->seats}}
            </td>
              <td>
{{$course->category}}
            </td>
              <td>
{{$course->preq}}
            </td>
               <td>
{{$course->status}}
            </td>
            <td> <a href="{{ route('course.edit',$course->c_id) }}"  class="uk-button uk-button-primary">Edit</a> </td>
                        <td> <a href="{{ route('course.delete',$course->c_id) }}"  class="uk-button uk-button-primary">Delete</a> </td>

        </tr>

        @endforeach

        
    </tbody>
</table>
</div>


@endsection
