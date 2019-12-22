@extends('admin.main')


@section('content')

<div class="uk-container">
  <a href="{{ route('book.add') }}"  class="uk-button uk-button-primary">Add Book</a>
    <table class="uk-table uk-table-hover uk-table-divider">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Count</th>
             <th>Category</th>
              <th>Edit</th>
               <th>Delete</th>
        </tr>
    </thead>
    <tbody>

            @foreach($books as $book)

        <tr>
            <td>{{$book->id}}</td>
            <td>{{$book->book_name}}</td>
            <td>{{$book->count}}</td>
             <td>{{$book->category}}</td>

            <td> <a href="{{ route('book.edit',$book->id) }}"  class="uk-button uk-button-primary">Edit</a> </td>
                        <td> <a href="{{ route('book.delete',$book->id) }}"  class="uk-button uk-button-primary">Delete</a> </td>

        </tr>

        @endforeach

        
    </tbody>
</table>
</div>


@endsection
