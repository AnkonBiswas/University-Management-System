<!DOCTYPE html>
<html>
<head>
	<title>MAIL</title>
</head>
<body>
	<h1>MAIL</h1>

<a href="{{route('faculty.profile')}}">Profile</a>
<a href="{{route('faculty.allStudents')}}">Student List</a>
<a href="{{route('faculty.allCourses')}}">Course List</a>
<a href="{{route('faculty.facultyCourses')}}">Registered Courses</a>
<a href="{{route('faculty.sentMail')}}">Mail Box</a>

<br><br>

<form method="post">
{{csrf_field()}}
	<table border="0">
		<tr>
			<td>STUDENT ID</td>
			<td><input type="text" name="student_id" value=""></td>
		</tr>
        <tr>
			<td>SUBJECT</td>
			<td><input type="text" name="subject" value=""></td>
		</tr>
		<tr>
			<td>MAIL</td>
			<td><input type="text" name="mail" value=""></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Send"></td>
		</tr>
	</table>
</form>
</body>
</html>