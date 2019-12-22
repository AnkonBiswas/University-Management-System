@extends('admin.main')


@section('content')

<div class="uk-container">


	<article class="uk-comment">
    <header class="uk-comment-header uk-grid-medium uk-flex-middle" uk-grid>
      
        <div class="uk-width-expand">
            <h1>Profile:</h1>
            <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">Hello {{session('name')}} </a></h4>
           
        </div>
    </header>
   
</article>


<div class="uk-margin">

	</div>

	

	

	
</div>



@endsection
