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
            .uk-container>:last-child {
    margin-bottom: 0;
    margin: 10% 20%;
}
        </style>
    </head>
    <body>
    	<div class="uk-container">

    	
        {{session('msg')}}


        <div class="uk-card uk-card-default uk-card-body">
            <form class="uk-form-horizontal uk-margin-large" method="post">

                    {{csrf_field()}}


                <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Username</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-horizontal-text" type="text" placeholder="Username" name="username">
                    </div>
                </div>
                  <div class="uk-margin">
                    <label class="uk-form-label" for="form-horizontal-text">Password</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-horizontal-text" type="password" placeholder="Password" name="password">
                    </div>
                </div>


            <div class="uk-margin">
                <input class="uk-button uk-button-primary" type="submit" name="Submit" value="Submit">

              </div>



            </form>


        </div>



</div>
    </body>
</html>

