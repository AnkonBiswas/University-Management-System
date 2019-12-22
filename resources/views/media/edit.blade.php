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
                        <input class="uk-input" id="form-horizontal-text" type="text" placeholder="name" name="name" value="{{ $media->name }}">
                    </div>
                </div>

                  <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Content</label>
                    <div class="uk-form-controls">
                      Media : {{ $media->content }}
                        <input class="uk-input" id="form-horizontal-text" type="file" placeholder="content" name="content" value="{{ $media->content }}">
                    </div>
                </div>


                  <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Image</label>
                    <div class="uk-form-controls">
                      <img src="/uploads/img/{{ $media->img }}">
                        <input class="uk-input" id="form-horizontal-text" type="file" name="img" value="{{ $media->img }}">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Category</label>
                    <div class="uk-form-controls">
                      

                      <select name="category" class="uk-select">
                                    @foreach($cates as $category)



                          <option value="{{$category->id}}"  @if($media->category == $category->id)  selected @else
                    
       @endif>{{$category->name}}</option>
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
