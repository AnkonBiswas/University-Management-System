<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Profile</h1>
    
<br><br>
<a href="{{route('faculty.profile')}}">Profile</a>
<a href="{{route('faculty.allStudents')}}">Student List</a>
<a href="{{route('faculty.allCourses')}}">Course List</a>
<a href="{{route('faculty.facultyCourses')}}">Registered Courses</a>
<a href="{{route('faculty.sentMail')}}">Mail Box</a>
	<table border="0">
		
		<tr>
			<td>User Id</td>
			<td>{{ $user->id}} </td>
		</tr>
		
		<tr>
			<td>Username</td>
			<td>{{ $user->username }}</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>{{ $user->password }}</td>
			<td><a href="/changePassword">Change Password</a></td>
		</tr>
		<tr>
			<td>Full Name</td>
			<td>{{ $user->full_name }}</td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>{{ $user->gender }}</td>
		</tr>
		<tr>
			<td>Contact</td>
			<td>{{ $user->contact }}</td>
		</tr>
	</table>

</body>
</html>