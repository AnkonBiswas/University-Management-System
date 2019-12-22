@extends('admin.main')


@section('content')
      <div class="uk-container">

       <div class="uk-card uk-card-default uk-card-body">
            <form class="uk-form-horizontal uk-margin-large" method="post">

                    {{csrf_field()}}

                    <h1>Add Faculty</h1>


               <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Name</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-horizontal-text" type="text" placeholder="name" name="full_name">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Username</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-horizontal-text" type="text" placeholder="Username" name="username">
                    </div>
                </div>
                  <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Password</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-horizontal-text" type="password"  placeholder="Password" name="password">
                    </div>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Gender</label>
                    <div class="uk-form-controls">
                        <input class="uk-radio" id="form-horizontal-text" type="radio"  value="male" name="gender">Male 
                         <input class="uk-radio" id="form-horizontal-text" type="radio"  value="female" name="gender">Female
                    </div>
                </div>

                  <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Contact</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-horizontal-text" type="text"  placeholder="Contact" name="contact">
                    </div>
                </div>


            <div class="uk-margin">
                <input class="uk-button uk-button-primary" type="submit" name="Submit" value="Submit">

              </div>

            </form>
        </div>
    
  </div>

  
@endsection