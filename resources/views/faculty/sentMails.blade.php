<!DOCTYPE html>
<html>
<head>
	<title>VIEW MAILS</title>
</head>
<body>
	<h1>VIEW MAILS </h1>

<a href="{{route('faculty.profile')}}">Profile</a>
<a href="{{route('faculty.allStudents')}}">Student List</a>
<a href="{{route('faculty.allCourses')}}">Course List</a>
<a href="{{route('faculty.facultyCourses')}}">Registered Courses</a>
<a href="{{route('faculty.sentMail')}}">Mail Box</a>
<br>
<a href="{{route('faculty.mail')}}">Compose Mail</a>

<br><br>

<form method="post">
        <table border="0">
                <tr>
                    
                    <td>MAIL ID</td>
                    <td>STUDENT ID</td>
                    <td>SUBJECT</td>
                    <td>MAIL</td>
                </tr>
        
                @foreach($mails as $mail)

                <tr >
                    <td>{{ $mail->id }}</td>
                    <td>{{ $mail->student_id }}</td>
                    <td>{{ $mail->subject }}</td>
                    <td>{{ $mail->mail }}</td>

                </tr>

                @endforeach
            </table>
</form>
</body>
</html>