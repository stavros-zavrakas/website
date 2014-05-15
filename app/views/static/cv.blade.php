@extends('layouts.master')

@section('body')
  <div class="row">
    <div class="col-md-3 col-md-3-custom">
      <h1 class="shadow text-center">
        <a href="{{ URL::action('HomeController@CV') }}">Stavros Zavrakas</a>
      </h1>

      <!-- frame for the personal photo-->
      <a id="photo" href="#photo" data-toggle="modal" data-target="#myModal">
        <div id="frame">
            <img src="{{ asset('assets/images/me.jpg') }}" alt="Stavros Zavrakas">
        </div>
      </a>

      <!-- 
        Personal details 
        @see also: bootstrap glyphicons: http://bootstrapmaster.com/live/one/icons.html
      -->
      <div class="personal-data">
        <h2 class="shadow"><i class="glyphicon glyphicon-phone"></i> Phone</h2>
        <h3 class="text-muted">
          +39 3898 478 918 (IT) <br>
          +30 6974 991 412 (GR)
        </h3>

        <!--
        <br>
        <h2 class="shadow"><i class="glyphicon glyphicon-envelope"></i> e-mail</h2>
        <h3 class="text-muted"><a href="mailto:stavros@zavrakas.me">stavros@zavrakas</a></h3>
        -->

        <br>
        <h2 class="shadow"><i class="glyphicon glyphicon-tag"></i> Address</h2>
        <h3 class="text-muted"> 
          Viale Suzzani, 18<br>
          20162 <br>
          Milano, Italy
        </h3>

        <br>
        <h2 class="shadow"><i class="glyphicon glyphicon-comment"></i> Social</h2>
        <h3 class="text-muted"> 
          <div class="social-buttons">
            <a href="https://www.facebook.com/stavros.zavrakas" target="_blank">
              <img src="{{ asset('assets/images/facebook.png') }}" alt="Stavros Zavrakas facebook">
            </a>
            <a href="https://www.linkedin.com/profile/view?id=140139974" target="_blank">
              <img src="{{ asset('assets/images/linkedin.png') }}" alt="Stavros Zavrakas linkedIn">
            </a>
          </div>
          <div class="fb-like" data-href="http://stavros.zavrakas.gr" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
        </h3>
      </div>
    </div>
    <div class="col-md-9 col-md-9-custom col-md9-shadow">
      <div class="header">
        <h3 class="hidden">
          <i class="glyphicon glyphicon-floppy-save"></i>
          <button type="button" class="btn btn-danger btn-sm" onclick="window.print()">Download CV</button>
        </h3> 
        <h3 class="hidden-sm hidden-xs pull-left">
          <i class="glyphicon glyphicon glyphicon-print"></i>
          <button type="button" class="btn btn-danger btn-sm" onclick="window.print()">Print CV</button>
        </h3> 
        <h3>
          <i class="glyphicon glyphicon glyphicon-envelope"></i>
          <!-- <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#contactModal">Contact me </button> -->
          <a id="contact" href="#contact"><button type="button" class="btn btn-danger btn-sm contact" data-toggle="modal" data-target="#contactModal">Contact me </button></a>
        </h3> 

      </div>
      <!-- First Label - Work experience -->
      <h1 class="tag blue-tag">Summary</h1>
      <ul>
      <li>My name is Stavros Zavrakas, I am from Greece and currently I live and work in Milan, Italy.</li>
      <li>I determine myself as a Full Stack Developer.</li>
      <li>I am passionate with my work and when it comes to deliver the final project it has to be perfect! </li>
      <li>I am a team-player that respects the rest of the team.</li>
      <li>I can adapt very fast in new groups and environments.</li>
      <li>I love and enjoy building applications being part of a team and at the end delivering the application that everybody of the team will be be proud of. </li>
      </ul>
      <!-- First Label - Work experience -->
      <h1 class="tag blue-tag">Work experience</h1>
      <div class="header">
        <h2>Web Developer @ Rectorate Uni. of Crete</h2><br>
        <?php
          $haemaStart = new DateTime('01.01.2012');
          // $today = new DateTime('00:00:00'); - use this for the current date
          $haemaFinish = new DateTime('01.07.2012'); // for testing purposes

          $diff = $haemaFinish->diff($haemaStart);
        ?>
        <h3 class="text-muted"> January 2012 - July 2012 <small>[{{$diff->m}} months]</small></h3>

      </div>
      Analysis, design and implementation of web application of statistical analysis for the disease of Idiopathic Thrombocytopenic Purpura (I.T.P.) behalf of the Greek Haematology Society. <br><br>
      I worked as a Web developer. We had to build an application that the doctors would be able to insert new patients in the database and every specific period of time to insert new check-ups 
      about the patients. The users of the platform (doctors) are able to view statistic results about specific treatments on patients that are helpful to follow better 
      prescription treatment. It is a completely hand-coded php based application using other web technologies such as javascript, jquery, mysql etc. 
      <br><br>
      <a href="http://aemonas.admin.uoc.gr/haema/index.php?signIn=1" target="_blank">Demo application</a>
      <hr>

      <div class="header">
        <h2>Full stack developer @ Styloola</h2><br>
        <?php
          $styloolaStart = new DateTime('14.07.2012');
          // $today = new DateTime('00:00:00'); - use this for the current date
          $today = date("D M j G:i:s T Y");
          $today = new DateTime($today); // for testing purposes

          $diff = $today->diff($styloolaStart);
        ?>
        <h3 class="text-muted"> July 2012 - Present <small>[ <?php printf('%d year(s), %d month(s), %d day(s)', $diff->y, $diff->m, $diff->d); ?> ]</small></h3>
      </div>
      My first position was to continue maintaining the Styloola iOS application that was written 
      on PhoneGap. The technologies that we used was jQuery, jQuery mobile and HTML.
      <br><br>
      After the decision to drop the PhoneGap application and to develop a native iOs application, 
      I was moved to maintain the Drupal 6 website. Developing both sides of backend part and 
      frontend part. 
      <br><br>
      One of the projects was move from from Drupal 6 to Drupal 7 and my job was to convert part 
      of the Web Services and to create scripts to migrate the data of Drupal 6 to Drupal 7. 
      <br><br>
      The next step was to move out of Drupal and to create our architecture from scratch. That 
      project was assigned to me and I had to manage a team of seven people and leading them to build 
      from scratch the whole Web Client (Laravel, jQuery, Bootstrap), the REST API (node.js + mongodb), the first 
      Android application of the company and testing some parts of REST API (mocha). The team 
      was consisting of two backend developers, two frontend developers, one android developer, 
      one system adminitrator and one tester. I was using scrum methodologies to lead the process, having daily
      standup meetings that everybody was reporting his progress and we were using backlog. 
      <br><br>
      The project delivered after two months of work and right now is the current infrustructure of the company.
      After this point I have in the company the position of Lead Developer
      <br><br>
      One of the projects of the company is to create some hardware devices (routers) that are used
      to profile customers and are helpful for retailers. I had to develop part of the router
      developing some scripts in C. The firmware that we use is OpenWrt 
      <br><br>
      <a href="https://www.styloola.com" target="_blank">Styloola Website</a> 
      <b> - </b> 
      <a href="https://business.styloola.com" target="_blank">Styloola for Business</a>
      <b> - </b> 
      <a href="http://www.freewi.it" target="_blank">FreeWi</a>
      <div class="clear"></div>

      <!-- Second Label - Professional skills -->
      <h1 class="tag green-tag">Professional skills</h1>
      <div class="table-responsive">
        <table class="table table-striped">
          <!-- On rows -->
          <tr><th>Programming                  </th>    <th>Programming            </th></tr> <!-- Headers -->
          <tr><td>CSS                          </td>    <td>Bootstrap              </td></tr>
          <tr><td>CSS3                         </td>    <td>Drupal                 </td></tr>
          <tr><td>HTML                         </td>    <td>nodeJS                 </td></tr>
          <tr><td>HTML5                        </td>    <td>mongoDB                </td></tr>
          <tr><td>jQuery                       </td>    <td>Git                    </td></tr>
          <tr><td>JavaScript                   </td>    <td>MySql                  </td></tr>
          <tr><td>PHP                          </td>    <td>MVC                    </td></tr>
          <tr><td>Laravel                      </td>    <td>C                      </td></tr>
          <tr><td>Debug                        </td>    <td>ElasticSearch          </td></tr>
          <tr><td>REST                         </td>    <td>Java                   </td></tr>
          <tr><td>Web Applications             </td>    <td>Facebook API           </td></tr>
          <tr><td>Google API                   </td>    <td>Postgres               </td></tr>
          <tr><td>                             </td>    <td>                       </td></tr>
          <tr><th>Leadership                   </th>    <th>Languages              </th></tr> <!-- Headers -->
          <tr><td>Agile Methodologies          </td>    <td>Greek - Mother Tongue  </td></tr>
          <tr><td>Scrum                        </td>    <td>English - Fluent       </td></tr>
          <tr><td>Refactoring                  </td>    <td>Italian - Begginer     </td></tr>
          <tr><td>Software Project Management  </td>    <td>                       </td></tr>
        </table>
      </div>
      <div class="clear"></div>

      <!-- Third Label - Education -->
      <h1 class="tag orange-tag">Education</h1>

        <!-- University -->
        <div class="header">
          <h2>Uni. of Crete - C.S.D.</h2>
          <h3 class="text-muted">September 2006 - June 2012</h3>
        </div>

        <!-- Courses panel -->
        <div class="panel panel-default">
          <div class="panel-heading">Courses</div>
          <ul class="list-group">
            <li class="list-group-item">Digital Design (CS-120)</li>
            <li class="list-group-item">Programming (CS-150)</li>
            <li class="list-group-item">Computer Organization (CS-225)</li>
            <li class="list-group-item">Data Structures (CS-240)</li>
            <li class="list-group-item">Object-Oriented Programming (CS-252)</li>
            <li class="list-group-item">Software Technology Laboratory (CS-255)</li>
            <li class="list-group-item">Operating Systems (CS-345)</li>
            <li class="list-group-item">Files and Databases (CS-340)</li>
            <li class="list-group-item">Information System Analysis and Design (CS-351)</li>
            <li class="list-group-item">Software Engineering (CS-352)</li>
            <li class="list-group-item">Human-Computer Interaction (CS-464)</li>
            <li class="list-group-item">Human - Computer Interaction Advanced Topics (CS-564)</li>
            <li class="list-group-item">Process Management Systems (CS-565)</li>
          </ul>
        </div>

        <!-- Presentations panel -->
        <div class="panel panel-default">
          <div class="panel-heading">Presentations</div>
          <ul class="list-group">
            <li class="list-group-item">Presentation on E-Services and Peer-to-Peer Systems, comparison and side effects when combining the two technologies and case studies such as JXTA-SOAP and WSPeer.</li>
          </ul>
        </div>

        <!-- Projects panel -->
        <div class="panel panel-default">
          <div class="panel-heading">Projects completed</div>

          <ul class="list-group">
            <li class="list-group-item">Analysis, design and implementation of a Web application called SuperCars.</li>
            <li class="list-group-item">Analysis, design and implementation of a Web application called StudentBook.</li>
            <li class="list-group-item">Database schema design and documentation of a system that could automate processes that take place in a company.</li>
            <li class="list-group-item">Implemented an interactive digital book that works by recognizing fiducial markers.</li>
            <li class="list-group-item">Analysis, design and implementation of the interface of a tourist portal using the following methods:<br>
            - User Requirements Elicitation and Analysis<br>
            - Hierarchical Task Analysis</li>
          </ul>
        </div>
    </div> <!-- end of col-md-9 -->
  </div> <!-- end of row -->

@stop

@section('modals')
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
           {{ Form::open(array(
                'action' => 'HomeController@contact',
                'method' => 'POST'
            )) }}

            <!-- Success email message -->
            @if (!empty($mail_message))
              <div class="alert alert-info">
                {{ Session::get('mail_message') }}
              </div>
            @endif

            <!-- Error Handling -->
            <ul class="errors">
              @foreach($errors->all() as $message)
                <li class="alert-danger">{{ $message }}</li>
              @endforeach
            </ul>

            <div class="control-group">
              <div class="controls">
                <input type="text" class="form-control" 
                  placeholder="Full Name" id="name" name="name" required 
                  data-validation-required-message="Please enter your name">

                <p class="help-block"></p>
              </div>
            </div>         
            <div class="control-group">
              <div class="controls">
                  <input type="email" class="form-control" 
                  placeholder="Email" id="email" name="email" required 
                  data-validation-required-message="Please enter your email">

                  <p class="help-block"></p>
              </div>
            </div>         
                        
            <div class="control-group">
              <div class="controls">
                <textarea rows="10" cols="100" class="form-control" 
                  placeholder="Message" id="message" name="message" required
                  data-validation-required-message="Please enter your message" minlength="15" 
                  data-validation-minlength-message="Min 5 characters" 
                  maxlength="999" style="resize:none"></textarea>

                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <input id="email_copy" name="email_copy" type="checkbox" value=true>
                <label for="email_copy"> Send me a copy of the message to my email address</label>

                {{ Form::captcha() }}
              </div>                 
            </div>                 
            <div id="success"> </div> <!-- For success/fail messages -->
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary pull-right">Send</button><br />
          {{ Form::close() }}
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
@stop