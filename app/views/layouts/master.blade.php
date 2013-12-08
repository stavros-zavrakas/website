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

    <!-- Modal Photo-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Stavros Zavrakas</h4>
          </div>
          <div class="modal-body">
            <img class="col-xs-12" src="{{ asset('assets/images/me_large.jpg') }}">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Modal Contact -->
    <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Contact me</h4>
          </div>
          <div class="modal-body">
           <!-- Form itself -->
            <form name="sentMessage" class="well" id="contactForm" novalidate>
              <div class="control-group">
                <div class="controls">
                  <input type="text" class="form-control" 
                    placeholder="Full Name" id="name" required 
                    data-validation-required-message="Please enter your name" />

                  <p class="help-block"></p>
                </div>
              </div>         
              <div class="control-group">
                <div class="controls">
                    <input type="email" class="form-control" 
                    placeholder="Email" id="email" required 
                    data-validation-required-message="Please enter your email" />

                    <p class="help-block"></p>
                </div>
              </div>         
                          
              <div class="control-group">
                <div class="controls">
                  <textarea rows="10" cols="100" class="form-control" 
                    placeholder="Message" id="message" required
                    data-validation-required-message="Please enter your message" minlength="5" 
                    data-validation-minlength-message="Min 5 characters" 
                    maxlength="999" style="resize:none">
                  </textarea>
                </div>
              </div>                  
              <div id="success"> </div> <!-- For success/fail messages -->
              
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary pull-right">Send</button><br />
            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
            </form>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

  </body>
</html>