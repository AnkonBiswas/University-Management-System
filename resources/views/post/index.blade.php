@extends('admin.main')


@section('content')

<div class="uk-container">
  <a href="{{ route('post.add') }}"  class="uk-button uk-button-primary">Add Post</a>
    <table class="uk-table uk-table-hover uk-table-divider">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Content</th>
             
    </thead>
    <tbody>

            @foreach($posts as $post)

        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->name}}</td>
            <td>{{$post->content}}</td>

            

        </tr>

        @endforeach

        
    </tbody>
</table>
</div>


@endsection
