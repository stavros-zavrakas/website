<html>
  <head>
    <title>Stavros Zavrakas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" media="screen">
  </head>
  
  <body>
    <div id="wrap" class="container">
      @yield('body')
      <div id="push"></div> <!-- push div for sticky footer -->
    </div> <!-- end of container -->

    <div id="footer">
      <div class="container">
        <br><br><p class="text-muted text-center"><strong>&copy;{{ strftime("%Y"); }} <a href="{{ URL::action('HomeController@CV') }}">Stavros Zavrakas</a>.</strong></p>
      </div>
    </div> <!-- end footer -->


    @section('jshook') 
    @show
    <!--[if lt IE 9]>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <![endif]]-->

    <!--[if (gte IE 9) | (!IE)]><!-->
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <!--<![endif]-->

    <script src="{{ asset('assets/js/libs/bootstrap.min.js') }}"></script>
    @section('jshook-after')

    <!-- -----------------------------
      Modals Start
    ------------------------------ -->
    <div id="modals">
      @section('modals')

      @show
    </div>
  </body>
</html>