 <!DOCTYPE html>
<html>
    <head>
        <title>Title</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/uikit/css/uikit.min.css" />
        <script src="/uikit/js/uikit.min.js"></script>
        <script src="/uikit/js/uikit-icons.min.js"></script>
        <style type="text/css">
        	.uk-margin-remove {
    margin: 0!important;
    padding: 34px;
}
        </style>
    </head>
    <body>
    	<div class="uk-container">

    	<nav class="uk-navbar-container" uk-navbar>
		    <div class="uk-navbar-left">

		        <ul class="uk-navbar-nav">
		            <li class="uk-active"><a href="{{ route('admin.index') }}">Home</a></li>
		            <li>
		            	<a href="{{ route('media.list') }}">Media List</a>
		                
		            </li>
                    <li>
                        <a href="{{ route('req.list') }}">Request List</a>
                        
                    </li>
                    <li><a href="{{ route('category.list') }}">Category</a></li>
		            <li><a href="{{ route('logout.index') }}">Logout</a></li>
		        </ul>

		    </div>
        </nav>


                



<div class="uk-alert-danger" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p>{{session('msg')}}</p>
</div>
         @yield('content')



</div>
    </body>
</html>

