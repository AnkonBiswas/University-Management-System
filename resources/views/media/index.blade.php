@extends('admin.main')


@section('content')

<a href="{{ route('media.add') }}"  class="uk-button uk-button-primary">Add Media</a> 


<div class="uk-container">
    <table class="uk-table uk-table-hover uk-table-divider">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Content</th>
            <th>Image</th>
            <th>Category</th>
            
              <th>Edit</th>
               <th>Delete</th>
        </tr>
    </thead>
    <tbody>

            @foreach($medias as $media)

        <tr>
            <td>{{$media->id}}</td>
            <td>{{$media->name}}</td>
            <td>{{$media->content}}</td>
            <td> <img src="/uploads/img/{{$media->img}}" width="100PX">  </td>
            <td>{{$media->category}}</td>

            
            <td> <a href="{{ route('media.edit',$media->id) }}"  class="uk-button uk-button-primary">Edit</a> </td>
                        <td> <a href="{{ route('media.delete',$media->id) }}"  class="uk-button uk-button-primary">Delete</a> </td>

        </tr>

        @endforeach

        
    </tbody>
</table>
</div>


@endsection
