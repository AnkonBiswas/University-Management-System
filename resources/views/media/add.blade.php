@extends('admin.main')


@section('content')
      <div class="uk-container">

      
        {{session('msg')}}
        <div class="uk-card uk-card-default uk-card-body">
            <form class="uk-form-horizontal uk-margin-large" method="post" enctype="multipart/form-data" >

                    {{csrf_field()}}

                    <h1>Add Content</h1>


               <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Name</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-horizontal-text" type="text" placeholder="name" name="name">
                    </div>
                </div>

                  <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Content</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-horizontal-text" type="file" placeholder="content" name="content">
                    </div>
                </div>


                  <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Image</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-horizontal-text" type="file" name="img">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Category</label>
                    <div class="uk-form-controls">
                      

                      <select name="category" class="uk-select">
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
