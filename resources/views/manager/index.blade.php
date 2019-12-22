@extends('admin.main')


@section('content')

<div class="uk-container">
  <a href="{{ route('admin.add') }}"  class="uk-button uk-button-primary">Add Manager</a>
    <table class="uk-table uk-table-hover uk-table-divider">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>username</th>
              <th>Edit</th>
               <th>Delete</th>
        </tr>
    </thead>
    <tbody>

            @foreach($admins as $admin)

        <tr>
            <td>{{$admin->id}}</td>
            <td>{{$admin->name}}</td>
            <td>{{$admin->username}}</td>

            <td> <a href="{{ route('admin.edit',$admin->id) }}"  class="uk-button uk-button-primary">Edit</a> </td>
                        <td> <a href="{{ route('admin.delete',$admin->id) }}"  class="uk-button uk-button-primary">Delete</a> </td>

        </tr>

        @endforeach

        
    </tbody>
</table>
</div>


@endsection
