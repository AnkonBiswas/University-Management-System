
@extends('website.main')


@section('content')

<form  method="post">

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


@endsection
