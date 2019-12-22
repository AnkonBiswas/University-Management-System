@extends('admin.main')


@section('content')

<div class="uk-container">
    <table class="uk-table uk-table-hover uk-table-divider">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Username</th>
             <th>Role</th>
              <th>Edit</th>
               <th>Delete</th>
        </tr>
    </thead>
    <tbody>

            @foreach($users as $user)

        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->username}}</td>
             <td>
@if($user->role == 1)

Admin


  @else

       Moderator
                    
       @endif


            </td>
            <td> <a href="{{ route('user.edit',$user->id) }}"  class="uk-button uk-button-primary">Edit</a> </td>
                        <td> <a href="{{ route('user.delete',$user->id) }}"  class="uk-button uk-button-primary">Delete</a> </td>

        </tr>

        @endforeach

        
    </tbody>
</table>
</div>


@endsection
