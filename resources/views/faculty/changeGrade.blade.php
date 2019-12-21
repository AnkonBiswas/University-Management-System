<!DOCTYPE html>
<html>
<head>
    <title>Change Grade </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/uikit.min.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
 
</head>
<body>
<form method="post">
{{csrf_field()}}

<h1>Change Grade</h1>
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
            <th>User Name</th>
            <th>Full Name</th>
            <th>Grade</th>
            <th>New Grade</th>
            
        </tr>
    </thead>
    <tbody>
                  @foreach($users as $user)

        <tr >
            <td>{{ $user->id }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->full_name }}</td>
            <td>{{ $user->grade }}</td>
            <td><select name="grade">
                <option value="A+">A+</option>
                <option value="A">A</option>
            </select></td>

        </tr>

          @endforeach
        
    </tbody>
</table>

</div>
<input type="submit"></input>
</form>

</body>
</html>