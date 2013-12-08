<html>
  <head>
    <title>Stavros Zavrakas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/style.css" rel="stylesheet" media="screen">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  
  <body>
    <div id="wrap" class="container">
      <div class="row">
        <div class="col-md-3 col-md-3-custom">
          <h1 class="shadow text-center">Stavros Zavrakas</h1>

          <!-- frame for the personal photo-->
          <a href="#" data-toggle="modal" data-target="#myModal">
            <div id="frame">
                <img src="images/me.jpg" alt="Stavros Zavrakas">
            </div>
          </a>

          <!-- 
            Personal details 
            @see also: bootstrap glyphicons: http://bootstrapmaster.com/live/one/icons.html
          -->
          <div class="personal-data">
            <h2 class="shadow"><i class="glyphicon glyphicon-phone"></i> Phone</h2>
            <h3 class="text-muted">+39 3898 478 918</h3>
            <h3 class="text-muted">+30 6974 991 412</h3>

            <br>
            
            <h2 class="shadow"><i class="glyphicon glyphicon-envelope"></i> e-mail</h2>
            <h3 class="text-muted"><a href="mailto:stavros@zavrakas.me">stavros@zavrakas.me</a></h3>

            <br>

            <h2 class="shadow"><i class="glyphicon glyphicon-tag"></i> Address</h2>
            <h3 class="text-muted"> 
              Viale Suzzani, 18<br>
              20162 <br>
              Milano, Italy
            </h3>
          </div>
        </div>
        <div class="col-md-9 col-md-9-custom col-md9-shadow">
          <div class="header">
            <h3 class="hidden">
              <i class="glyphicon glyphicon-floppy-save"></i>
              <button type="button" class="btn btn-danger btn-lg" onclick="window.print()">Download CV</button>
            </h3> 
            <h3 class="hidden-sm hidden-xs pull-left">
              <i class="glyphicon glyphicon glyphicon-print"></i>
              <button type="button" class="btn btn-danger btn-lg" onclick="window.print()">Print CV</button>
            </h3> 
            <h3>
              <i class="glyphicon glyphicon glyphicon-envelope"></i>
              <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#contactModal">Contact me </button>
            </h3> 
          </div>
          <!-- First Label - Work experience -->
          <h1 class="tag blue-tag">Previous employment</h1>
          <div class="header">
            <h2>Rectorate Uni. of Crete</h2> 
            <h3 class="text-muted"> January 2012 - July 2012</h3>
          </div>
          <h4 class="position"><sub>Web Developer<sub></h4><br>
          Analysis, design and implementation of web application of statistical analysis for the disease of Idiopathic Thrombocytopenic Purpura (I.T.P.) behalf of the Greek Haematology Society
          
          <hr>

          <div class="header">
            <h2>Styloola</h2> 
            <h3 class="text-muted"> July 2012 - Present</h3>
          </div>
          <h4 class="position"><sub>Lead developer at Styloola<sub></h4><br>
          Managing a team of six people and leading them to build from scratch the whole Web Client and the API.

          <div class="clear"></div>

          <!-- Second Label - Professional skills -->
          <h1 class="tag green-tag">Professional skills</h1>
          <p>Below you can find all my professional skills</p>
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
              <tr><td>REST                         </td>    <td>Java                   </td></tr>
              <tr><td>Web Applications             </td>    <td>                       </td></tr>
              <tr><td>                             </td>    <td>                       </td></tr>
              <tr><th>Leadership                   </th>    <th>Languages              </th></tr> <!-- Headers -->
              <tr><td>Agile Methodologies          </td>    <td>Greek - Mother Tongue  </td></tr>
              <tr><td>Scrum                        </td>    <td>English - Fluent       </td></tr>
              <tr><td>Refactoring                  </td>    <td>Italian - Begginer     </td></tr>
              <tr><td>Software Project Management  </td>    <td>                       </td></tr>
            </table>
          </div>


        <!--
          <div class="skills pull-left">
            <div class="skills">
              <h2>Programming</h2>
              <ul>
                <li><strong>CSS</strong></li>
                <li><strong>CSS3</strong></li>
                <li><strong>HTML</strong></li>
                <li><strong>HTML5</strong></li>
                <li><strong>jQuery</strong></li>
                <li><strong>JavaScript</strong></li>
                <li><strong>PHP</strong></li>
                <li><strong>Laravel</strong></li>
                <li><strong>REST</strong></li>
                <li><strong>Web Applications</strong></li>
              </ul>
            </div>
            <div class="skills">
              <h2>Programming</h2>
              <ul>
                <li><strong>Bootstrap</strong></li>
                <li><strong>Drupal</strong></li>
                <li><strong>nodeJS</strong></li>
                <li><strong>mongoDB</strong></li>
                <li><strong>Git</strong></li>
                <li><strong>MySql</strong></li>
                <li><strong>MVC</strong></li>
                <li><strong>C</strong></li>
                <li><strong>Java</strong></li>
              </ul>
            </div>
          </div>
          <div class="pull-left">
            <div class="skills">
              <h2>Leadership</h2>
              <ul>
                <li><strong>Leadership</strong></li>
                <li><strong>Agile Methodologies</strong></li>
                <li><strong>Scrum</strong></li>
                <li><strong>Refactoring</strong></li>
                <li><strong>Software Project Management</strong></li>
              </ul>
            </div>
            <div class="skills">
              <h2>Languages</h2>
              <ul>
                <li><strong>Greek</strong> - Mother Tongue </li>
                <li><strong>English</strong> - Fluent </li>
                <li><strong>Italian</strong> - Beginner</li>
              </ul>
            </div>
          </div>
        -->


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
      <div id="push"></div> <!-- push div for sticky footer -->
    </div> <!-- end of container -->
    <div id="footer">
      <div class="container">
        <br><br><p class="text-muted text-center">&copy; 2013 <a href="http://stavros.zavrakas.gr">Stavros Zavrakas</a>.</p>
      </div>
    </div> <!-- end footer -->

    <!-- Modal Photo-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Stavros Zavrakas</h4>
          </div>
          <div class="modal-body">
            <img class="col-xs-12" src="images/me_large.jpg">
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