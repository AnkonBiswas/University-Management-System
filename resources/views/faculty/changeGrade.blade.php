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
<form method="post">
{{csrf_field()}}

<h1>Book List</h1>
<div class="uk-container">
<table>


    <thead>
        <tr>
            <th>Id</th>
            <th>Book Name</th>
            <th>Author</th>
            <th>Category</th>
            <th>Action</th>
            
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