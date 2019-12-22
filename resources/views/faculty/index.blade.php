@extends('admin.main')


@section('content')

<div class="uk-container">
  <a href="{{ route('faculty.add') }}"  class="uk-button uk-button-primary">Add Faculty</a>

  <form id="ajax"> 
                        {{csrf_field()}}

    <input type="hidden" name="role" value="faculty">
<div class="uk-margin">
  <select id="sv" name="sv" id="" class="uk-select">
    <option value="asc">Asc</option>
    <option value="desc">Desc</option>
</select>
</div>


  <div class="uk-margin">
<input type="text" class="uk-input" placeholder="Search" name="search">
</div>
    <table class="uk-table uk-table-hover uk-table-divider">
    <thead>
        <tr>
            <th>Id <input type="radio" name="sort" value="id" class="uk-checkbox" checked=""></th>
            <th>Name <input type="radio" name="sort" value="full_name" class="uk-checkbox"></th>
            <th>Username <input type="radio" name="sort" value="username" class="uk-checkbox"></th>
             <th>Gender <input type="radio" name="sort" value="gender" class="uk-checkbox"></th>
              <th>Contact <input type="radio" name="sort" value="contact" class="uk-checkbox"></th>
              <th>Edit</th>
               <th>Delete</th>
        </tr>
    </thead>
    <tbody id="load">

            @foreach($users as $user)

        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->full_name}}</td>
            <td>{{$user->username}}</td>
             <td>
{{$user->gender}}
            </td>
            <td>
{{$user->contact}}
            </td>
            <td> <a href="{{ route('faculty.edit',$user->id) }}"  class="uk-button uk-button-primary">Edit</a> </td>
                        <td> <a href="{{ route('faculty.delete',$user->id) }}"  class="uk-button uk-button-primary">Delete</a> </td>

        </tr>

        @endforeach

        
    </tbody>
</table>

</form>

<script>
  $('#ajax input,#ajax select').on('input', function() {
    console.log('changed');

    html="";

     $.ajax({
                url: 'student/load', // url where to submit the request
                type : "POST", // type of action POST || GET
                dataType : 'json', // data type
                data : $("#ajax").serialize(), // post data || get data
                success : function(result) {


                  $("#load").empty();
                    // you can see the result from the console
                    // tab of the developer tools
                    console.log(result);
                   for (var i = result.length - 1; i >= 0; i--) {

                    console.log(result[i]['id']);
                    id =result[i]['id'];
                    name =(result[i]['full_name'] == null) ? "" : result[i]['full_name'];
                    username = ( result[i]['username'] == null) ? "" : result[i]['username'];
                    gender = ( result[i]['gender'] == null) ? "" : result[i]['gender'];
                    contact =(result[i]['contact'] == null) ? "" : result[i]['contact'];
    

                   html +='<tr><td>'+id+'</td><td>'+name+'</td><td>'+username+'</td><td>'+gender+'</td><td>'+contact+'</td><td> <a href="/faculty/edit/'+id+'"  class="uk-button uk-button-primary">Edit</a> </td><td> <a href="/faculty/delete/'+id+'"  class="uk-button uk-button-primary">Delete</a> </td></tr>';
                   }

                    $('#load').append(html);

                },
                error: function(xhr, resp, text) {
                    console.log(xhr, resp, text);
                }
            })

});
</script>
</div>


@endsection
