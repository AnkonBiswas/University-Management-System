<!DOCTYPE html>
<html>
<head>
    <title>Course List</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/uikit.min.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
 
</head>
<body>

<h1>Course List</h1>
<div class="uk-container">
<a href="{{route('faculty.profile')}}">Profile</a>
<a href="{{route('faculty.allStudents')}}">Student List</a>
<a href="{{route('faculty.allCourses')}}">Course List</a>
<a href="{{route('faculty.facultyCourses')}}">Registered Courses</a>
<a href="{{route('faculty.sentMail')}}">Mail Box</a>
<table>


    <thead>
        <tr>
            <th>Id</th>
            <th>Course Name</th>
            <th>Section</th>
            <th>Seats</th>
            <th>Category</th>
            <th>Action</th>
            
        </tr>
    </thead>
    <tbody>
                  @foreach($courses as $course)

        <tr >
            <td>{{ $course->id }}</td>
            <td>{{ $course->course_name }}</td>
            <td>{{ $course->section }}</td>
            <td>{{ $course->seats }}</td>
            <td>{{ $course->category }}</td>
            <td><a href="/faculty/courseStudents/{{$course->id}}">View Students</a></td>
            <td><a href="/faculty/uploadfile/{{$course->id}}">Upload Notes</a></td>

        </tr>

          @endforeach
        
    </tbody>
</table>

</div>
</body>
</html>