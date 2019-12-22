@extends('admin.main')


@section('content')

<div class="uk-container">
   
        <div class="uk-card uk-card-default uk-card-body">
            <form class="uk-form-horizontal uk-margin-large" method="post">

                    {{csrf_field()}}

                    <h1>Edit Faculty : {{ $user->full_name }}</h1>


               <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Name</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-horizontal-text" type="text" placeholder="name" name="full_name" value="{{ $user->full_name }}">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Username</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-horizontal-text" type="text" placeholder="Username" name="username" value="{{ $user->username }}">
                    </div>
                </div>
                  <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Password</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-horizontal-text" type="password" placeholder="Password" name="password" value="{{ $user->password }}">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Gender</label>
                    <div class="uk-form-controls">
                        <select class="uk-select" name="gender">

                          @if($user->gender == 'male')

 <option value="male" selected="">Male</option>

 <option value="female">Female</option>

  @else

      
 <option value="male">Male</option>

 <option value="female" selected="">Female</option>
                    
       @endif
                         
                        </select>
                    </div>
                </div>


                 <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Contact</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-horizontal-text" type="text" placeholder="Contact" name="contact" value="{{ $user->contact }}">
                    </div>
                </div>



            <div class="uk-margin">
                <input class="uk-button uk-button-primary" type="submit" name="Submit" value="Submit">

              </div>

            </form>
        </div>
    
</div>


@endsection
