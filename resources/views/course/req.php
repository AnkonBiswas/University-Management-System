@extends('admin.main')


@section('content')

<div class="uk-container">
    <table class="uk-table uk-table-hover uk-table-divider">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
             <th>Request</th>
             
        </tr>
    </thead>
    <tbody>

            @foreach($users as $user)

        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
                        <td>{{$user->content}}</td>

         

        @endforeach

        
    </tbody>
</table>
</div>


@endsection
