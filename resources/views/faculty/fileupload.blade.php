<!DOCTYPE html>
<html>
<body>

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
            <th>Book Name</th>
            <th>Author</th>
            
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