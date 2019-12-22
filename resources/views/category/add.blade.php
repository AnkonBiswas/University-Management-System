@extends('admin.main')


@section('content')
      <div class="uk-container">

      
        {{session('msg')}}
        <div class="uk-card uk-card-default uk-card-body">
            <form class="uk-form-horizontal uk-margin-large" method="post">

                    {{csrf_field()}}

                    <h1>Register</h1>


               <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Name</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-horizontal-text" type="text" placeholder="name" name="name">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Parent</label>
                    <div class="uk-form-controls">
                      

                      <select name="parent" class="uk-select">
                        <option value="0"> Main Category</option>
                                    @foreach($categories as $category)



                          <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                      </select>
                    </div>
                </div>
                 


            <div class="uk-margin">
                <input class="uk-button uk-button-primary" type="submit" name="Submit" value="Submit">

              </div>

            </form>
        </div>
    
  </div>


        
    </tbody>
</table>
</div>


@endsection
