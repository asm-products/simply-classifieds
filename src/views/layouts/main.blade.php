<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Free Ads for buying and selling things locally">
        <meta name="author" content="Simply Classifieds">
        <link rel="icon" href="../../favicon.ico">

        <title>Simply Classifieds | {{ $title }}</title>

        <!-- Bootstrap core CSS -->
        {{ HTML::style('packages/stevebauman/classifieds/css/bootstrap-flaty.min.css') }}
        
        <!-- Fontawesome Icons CSS -->
        {{ HTML::style('packages/stevebauman/classifieds/font-awesome-4.2.0/css/font-awesome.min.css') }}
        
        <!-- Custom styles for this template -->
        {{ HTML::style('packages/stevebauman/classifieds/css/navbar-fixed-top.css') }}

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        
        <!-- Fixed navbar -->
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            
            <div class="container">
                
            <div class="navbar-header">
                
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <a class="navbar-brand" href="#">Simply Classifieds</a>
                
              </div>
                
                @include('classifieds::layouts.main.menu')
            </div>
        </div>

        <div class="container">
            
            <h2>{{ $title }}</h2>
            
            <hr>
            
            @include('classifieds::layouts.main.alerts')
            
            @yield('content')

        </div> <!-- /container -->

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        {{ HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js') }}
        {{ HTML::script('packages/stevebauman/classifieds/bootstrap-3.2.0-dist/js/bootstrap.min.js') }}
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        {{ HTML::script('packages/stevebauman/classifieds/js/ie10-viewport-bug-workaround.js') }}
        
    </body>
</html>
