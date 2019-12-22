@extends('admin.main')


@section('content')
      <div class="uk-container">

       <div class="uk-card uk-card-default uk-card-body">
            <form class="uk-form-horizontal uk-margin-large" method="post">

                    {{csrf_field()}}

                    <h1>Edit Course</h1>


               <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Course Id</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-horizontal-text" type="text" placeholder="Id" name="id" value="{{ $user->id}}">
                    </div>
                </div>
                  <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Course Name</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-horizontal-text" type="text" placeholder="Course Name" name="course_name" value="{{ $user->course_name}}">
                    </div>
                </div>

                 <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Course Section</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-horizontal-text" type="text" placeholder="Section" name="section" value="{{ $user->section}}">
                    </div>
                </div>

                   <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Course Seats</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-horizontal-text" type="text" placeholder="Seats" name="seats" value="{{ $user->seats}}">
                    </div>
                </div>

                 <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Course Category</label>
                    <div class="uk-form-controls">
                        <select name="category" id="" class="uk-select">
                            <option value="CSE">CSE</option>
                            <option value="EEE">EEE</option>
                        </select>
                    </div>
                </div>

                

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Course PREQ</label>
                    <div class="uk-form-controls">
                       <select name="preq" id="" class="uk-select">
                         <option value="">None</option>
                         @foreach($courses as $course)

                            <option value="{{$course->id}}">{{$course->course_name}}</option>

                                    @endforeach

                        </select>
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Status</label>
                    <div class="uk-form-controls">
                       <select name="status" id="" class="uk-select">
                            <option value="1">Enable</option>
                            <option value="0">Disable</option>
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