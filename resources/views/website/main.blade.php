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
		            <li class="uk-active"><a href="{{ route('website.index') }}">Home</a></li>
                                        <li class="uk-active"><a href="{{ route('website.add') }}">Request</a></li>

		           <!--  <li>
		            	<a href="{{ route('user.list') }}"></a>
		                
		            </li>
		            <li><a href="{{ route('logout.index') }}">Logout</a></li> -->
                    <li><form method="post" action="/search">                       {{csrf_field()}}

                        <input type="text" name="value" class="uk-input"><input type="submit" name="submit" class="uk-button uk-button-primary" >
                    </form></li>
		        </ul>

		    </div>
        </nav>



         @yield('content')



</div>
    </body>
</html>

