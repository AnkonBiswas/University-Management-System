<!DOCTYPE html>
<html>
<head>
    <title>Book List</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/uikit.min.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
 
</head>
<body>

<h1>Book List</h1>
<div class="uk-container">
<table>


    <thead>
        <tr>
            <th>Id</th>
            <th>Book Name</th>
            <th>Author</th>
            <th>Category</th>
            <th>Price</th>
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