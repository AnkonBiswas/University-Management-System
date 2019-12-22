@extends('admin.main')


@section('content')

<div class="uk-container">
   
        {{session('msg')}}
        <div class="uk-card uk-card-default uk-card-body">
            <form class="uk-form-horizontal uk-margin-large" method="post">

                    {{csrf_field()}}

                    <h1>Edit User : {{ $user->name }}</h1>


               <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Name</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-horizontal-text" type="text" placeholder="name" name="name" value="{{ $user->name }}">
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
                    <label class="uk-form-label" for="form-horizontal-text">Role</label>
                    <div class="uk-form-controls">
                        <select class="uk-select" name="role">

                          @if($user->role == 1)

 <option value="1" selected="">Admin</option>

 <option value="2">Moderator</option>

  @else

      
 <option value="1">Admin</option>

 <option value="2" selected="">Moderator</option>
                    
       @endif
                         
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
