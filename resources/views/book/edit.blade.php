@extends('admin.main')


@section('content')
      <div class="uk-container">

       <div class="uk-card uk-card-default uk-card-body">
            <form class="uk-form-horizontal uk-margin-large" method="post">

                    {{csrf_field()}}

                    <h1>Edit Book</h1>


               <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Name</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-horizontal-text" type="text" placeholder="name" name="book_name" value="{{ $book->book_name }}">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Count</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-horizontal-text" type="text" placeholder="Count" name="count" value="{{ $book->count }}">
                    </div>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Book Category</label>
                    <div class="uk-form-controls">
                        <select name="category" id="" class="uk-select">
                            <option value="CSE">CSE</option>
                            <option value="EEE">EEE</option>
                        </select>
                    </div>
                </div>


            <div class="uk-margin">
                <input class="uk-button uk-button-primary" type="submit" name="Submit" value="Submit">

              </div>

            </form>
        </div>
    
  </div>

  
@endsection