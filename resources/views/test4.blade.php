<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/test4.css') }}">
        <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
    </head>
    <body>
    	<div class="container">
    		<div class="nav-bar">
    			<ul class="nav">
                    <li><a href="#">welcome to the eye!</a></li>
    				<li><a href="#">nav item 1</a></li>
    				<li><a href="#">nav item 2</a></li>
    				<li><a href="#">nav item 3</a></li>
    			</ul>
    		</div>
            <div class="content">
                <h1>Blog Post Title</h1>
                <p>Posted by <span class="glyphicon glyphicon-user"> <a href="#">Matthijs Jansen</a> on &#128338; 12 January 2015 10:00 am</p>
                <hr>
            </div>
    	</div>
    </body>
</html>