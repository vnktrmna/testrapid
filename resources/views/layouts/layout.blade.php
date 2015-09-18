<!DOCTYPE html>
<html lang="en">
  <head>
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Facebook integration for Laravel">
    <meta name="author" content="Maks Surguy @msurguy">
    
    <title>Rapid Med Urgent Care Center</title>

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0-wip/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">

    <style type="text/css">
	    body {
	    	padding: 30px;
	    }
	    .navbar {
	    	margin-bottom: 30px;
	    }
    </style>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    	<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
    	<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.2.0/respond.js"></script>
    <![endif]-->
  </head>

  <body>
    
    <div class="container">
      <!-- Static navbar -->
      <div class="navbar navbar-default">
        <div class="navbar-header" style="vertical-align: middle">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <a href="#" target="_blank"><img style="position: absolute; top: 0; left: 0; border: 0; width:200px; padding-top:10px" src="http://rapidmed.com/wp-content/themes/rapid-med/img/rapid-med-logo.png" ></a>
        </div>
        <div class="navbar-collapse collapse" style="padding-left: 200px">
          <ul class="nav navbar-nav">
            <li class="active"><a href="{{url('/')}}">Sign In</a></li>
            
          </ul>
          @if(Auth::check())
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Your Profile <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{{url('logout')}}">Sign Out</a></li>
              </ul>
            </li>
          </ul>
          @endif
        </div><!--/.nav-collapse -->
      </div>

      <!-- Main component for a primary marketing message or call to action -->
      
      @yield('content')
      

    </div> <!-- /container -->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0-wip/js/bootstrap.min.js"></script>

  </body>
</html>
