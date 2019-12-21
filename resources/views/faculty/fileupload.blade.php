<!DOCTYPE html>
<title>Upload Notes</title>
<html>
<body>
<a href="{{route('faculty.profile')}}">Profile</a>
<a href="{{route('faculty.allStudents')}}">Student List</a>
<a href="{{route('faculty.allCourses')}}">Course List</a>
<a href="{{route('faculty.facultyCourses')}}">Registered Courses</a>
<a href="{{route('faculty.sentMail')}}">Mail Box</a>
<form action="{{route('faculty.upload', '$c_id')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
    Select image to upload:
    <input type="file" name="file">
    <input type="submit" value="Upload Image" name="submit">
</form>

<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>course Name</th>
            <th>Notes</th>
            
        </tr>
    </thead>
    <tbody>
                  @foreach($courses as $course)

        <tr >
            <td>{{ $course->id }}</td>
            <td>{{ $course->course_name }}</td>
            <td>{{ $course->notes }}</td>
            
        </tr>

          @endforeach
        
    </tbody>
</table>

</body>
</html>