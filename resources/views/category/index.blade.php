@extends('admin.main')


@section('content')

<a href="{{ route('category.add') }}"  class="uk-button uk-button-primary">Add Category</a> 


<div class="uk-container">
    <table class="uk-table uk-table-hover uk-table-divider">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Parent</th>
            
              <th>Edit</th>
               <th>Delete</th>
        </tr>
    </thead>
    <tbody>

            @foreach($categories as $category)

        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td>{{$category->parent}}</td>
            
            <td> <a href="{{ route('category.edit',$category->id) }}"  class="uk-button uk-button-primary">Edit</a> </td>
                        <td> <a href="{{ route('category.delete',$category->id) }}"  class="uk-button uk-button-primary">Delete</a> </td>

        </tr>

        @endforeach

        
    </tbody>
</table>
</div>


@endsection
