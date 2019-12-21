<!DOCTYPE html>
<html>
<head>
    <title>Grade Report</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/uikit.min.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
 
</head>
<body>

<h1>Grade Report</h1>
<div class="uk-container">
<a href="{{route('faculty.profile')}}">Profile</a>
<a href="{{route('faculty.allStudents')}}">Student List</a>
<a href="{{route('faculty.allCourses')}}">Course List</a>
<a href="{{route('faculty.facultyCourses')}}">Registered Courses</a>
<a href="{{route('faculty.sentMail')}}">Mail Box</a>
<table>


    <thead>
        <tr>
            <th>Course Id</th>
            <th>Course Name</th>
            <th>Section</th>
            <th>Grade</th>
            
        </tr>
    </thead>
    <tbody>
                  @foreach($courses as $course)

        <tr >
            <td>{{ $course->id }}</td>
            <td>{{ $course->course_name }}</td>
            <td>{{ $course->section }}</td>
            <td>{{ $course->grade }}</td>
        </tr>

          @endforeach
        
    </tbody>
</table>

</div>
</body>
</html>