
@extends('website.main')


@section('content')


<button class="uk-button uk-button-default" type="button">Category</button>
<div class="uk-width-large" uk-dropdown>
    <div class="uk-dropdown-grid" uk-grid>
        <div>
            <ul class="uk-nav uk-dropdown-nav">
                  @foreach($categories as $category)
                    <li><a href="{{ route('content.category' ,$category->id) }}">{{$category->name}}</a></li>
                 @endforeach
              
            </ul>
        </div>
       
    </div>
</div>


<div class="uk-grid-small uk-child-width-expand@s uk-text-center" uk-grid>

	            @foreach($medias as $media)

    <div>
        <div class="uk-card uk-card-default uk-card-body">
        	<a href="{{ route('content.view' ,$media->id) }}">
        	<img src="/uploads/img/{{$media->img}}"> </a>
        </div>
    </div>
   

            @endforeach

</div>

<div class="uk-grid-small uk-child-width-expand@s uk-text-center" uk-grid>

<form  method="post" action="/request">

	<h1>Request</h1>

	                    {{csrf_field()}}

    <fieldset class="uk-fieldset">


          <div class="uk-margin">
            <input class="uk-input" type="text" placeholder="Name" name="name">
        </div>


          <div class="uk-margin">
            <input class="uk-input" type="text" placeholder="Email" name="email">
        </div>

       

        <div class="uk-margin">
            <textarea class="uk-textarea" rows="5" placeholder="Your Request" name="content" > </textarea>
        </div>

          <div class="uk-margin">
                <input class="uk-button uk-button-primary" type="submit" name="Submit" value="Submit">

              </div>

        

     
    </fieldset>
</form>

</div>
@endsection
