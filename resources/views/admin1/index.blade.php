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

	 @if(session('role') == 1)

	 <a href="{{ route('user.list') }}" class="uk-button uk-button-primary" style="
    margin: 29px;
">Userlist</a>

	  @endif

	<a href="/media" class="uk-button uk-button-primary" style="
    margin: 29px;
">Media Library</a>
	</div>

	

	

	
</div>



@endsection
