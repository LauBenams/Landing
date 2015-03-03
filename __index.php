<!doctype html>
<html>

<head>

<meta charset="UTF-8">
<title>PINPO</title>


    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>



<link rel="stylesheet" type="text/css" href="jquery.fullPage.css" />
<link rel="stylesheet" type="text/css" href="page.css" />
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

<!-- Le styles -->

    <link href="css/m-buttons.css" rel="stylesheet">
    <link href="css/m-forms.css" rel="stylesheet">
    <link href="css/countdown.css" rel="stylesheet">
    <link href="css/validationEngine.jquery.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>


<style>

    /* Sections
     * --------------------------------------- */
    #section0 img,
    #section1 img{
      margin: 20px 0 0 0;
    }
    #section2 img{
      margin: 20px 0 0 52px;
    }
    #section3 img{
      bottom: 0px;
      position: absolute;
      margin-left: -420px;
    }
    .intro p{
      width: 50%;
      margin: 0 auto;
      font-size: 1.5em;
    }
    .twitter-share-button{
      position: absolute;
      z-index: 99;
      right: 149px;
      top: 9px;
    }

  </style>

  <!--[if IE]>
    <script type="text/javascript">
       var console = { log: function() {} };
    </script>
  <![endif]-->

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

    <script src="js/jquery.js"></script>

  <script type="text/javascript" src="jquery.fullPage.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#fullpage').fullpage({
        sectionsColor: ['#23262C', '#FFFFFF', '#FFFFFF', '#23262C', 'whitesmoke', '#ccddff'],
        anchors: ['firstPage', 'secondPage', '3rdPage', '4page'],
        menu: '#mainmenu',
        scrollingSpeed: 1000
      });

    });
  </script>

        <script type="text/javascript">
        $(document).ready(function() {
          // SUCCESS AJAX CALL, replace "success: false," by:     success : function() { callSuccessFunction() },
          $("#formID").validationEngine({
            success :  false,
            failure : function() {}
          })
          //$.validationEngine.buildPrompt("#date","This is an example","error")       // Exterior prompt build example
          //$.validationEngine.closePrompt(".date")                      // Exterior prompt close example
        });
    </script>



</head>

<body>

<div id="wrapper">
 <div id="LOGO">
   <img src="LOGO.png" alt="Logo" width="30" height="50">
 </div>
  <ul class="list-inline" id="menu">
  <li data-menuanchor="firstPage"><a href="#firstPage">Home</a></li>
  <li data-menuanchor="secondPage"><a href="#secondPage"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;About</a></li>
  <li data-menuanchor="3rdPage"><a href="#3rdPage"> &nbsp; &nbsp; &nbsp; &nbsp; TEAM</a></li>
      <li data-menuanchor="4page"><a href="#4page"> &nbsp; &nbsp; &nbsp; &nbsp; CONTACT</a></li>

  </ul>
 </div>




<div id="fullpage">
  <div class="section " id="section0">
       <div id="PINPO">
      PINPO
       </div>
         <div class="Pinpoint_your_dream_flat">
       Pinpoint your dream flat !
         </div>
         <div class="blocglobal">
         <div class="bloc1">
           <img src="hori.png" alt="hori">
         </div>
         <div class="bloc2">
           <img src="droite.png" alt="droite"></div>
         </div>

     </div>


  <div class="section" id="section1">
      <div class="slide">
        <div class="container">
            <div class="row">
               <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
               <div class="feature text-center">
               <img id="step" src="STEP-1.png" alt="step1"/>
               </div>
               </div>

               <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
               <div class="feature text-center">

         <h1 id="titreslide">Walk around</h1><br><br>
                 <p>Fixez votre périmètre de recherche ou visez un quartier précis, Sélectionnez vos critères, puis recevez des suggestions de logements autour de vous!</p>
                 <img src="next.png" alt="next" />
         </div>
               </div>
            </div>
          </div>
          </div>

      <div class="slide">
      <div class="container">
            <div class="row">
               <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
               <div class="feature text-center">
                  <img id="step" src="STEP-2.png" alt="step2"/>
                </div>
                </div>

               <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
               <div class="feature text-center">
                 <h1 id="titreslide">Match & Tchat</h1><br><br>
         <p>Propriétaires et locataires, vous matchez! Alors discutez et convenez d'un rendez-vous instantanément!</p>
                 <img src="next.png" alt="next" />
           </div>
               </div>
             </div>
          </div>
          </div>

    <div class="slide">
      <div class="container">
            <div class="row">
               <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
               <div class="feature text-center">
                  <img id="step" src="STEP-2.png" alt="step3"/>
                </div>
                </div>

               <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
               <div class="feature text-center">
                 <h1 id="titreslide">Enjoy</h1><br><br>
         <p>Rendez-vous à votre visite! Un Helper ou le propriétaire vous ouvre la porte: vous venez peut-être d'entrer dans votre futur appartement...</p>
                 <img src="next.png" alt="next" />
           </div>
               </div>
             </div>
          </div>
          </div>

          <div class="slide">
      <div class="container">
            <div class="row">
               <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
               <div class="feature text-center">
                  <img id="step" src="STEP-2.png" alt="step2"/>
                </div>
                </div>

               <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
               <div class="feature text-center">
                 <h1 id="titreslide">Match & Tchat</h1><br><br>
         <p>Propriétaires et locataires, vous matchez! Alors discutez et convenez d'un rendez-vous instantanément!</p>
                 <img src="next.png" alt="next" />
           </div>
               </div>
             </div>
          </div>
          </div>

  </div>
  <div class="section" id="section2">
    <div class="container-fluid">
            <div class="row">


         <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
               <div class="feature text-center">
                 <img id="pic" src="lolo.png" alt="lolo">
               <div style="padding-left:100px; padding-top:40px;">
               Laurence Benamran
                CEO and Co-Founder
                </div>
         </div>
               </div>

               <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
               <div class="feature text-center">
               <img id="pic" src="sach.png" alt="sach">
                <div style="padding-left:100px; padding-top:40px;">
                Sacha Mourain <br>
                 COO and Co-Founder
                 </div>
               </div>
               </div>



               <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
               <div class="feature text-center">
               <img src="mat.png" alt="mat" id="pic2">
                <div style="padding-left:100px; padding-top:40px;">
                Matthieu Babe <br>
                Chief Designer and Co-Founder
                </div>

               </div>
               </div>

             </div>
         </div>
      </div>




<div class="section" id="footer">

<div class="container">

     <div class="row">


<div class="span6">

  <div class="form">

   <div id="contact_form">
      <form id="formID" action="index.php" method="post">
        <p>
          <input type="text" name="email" id="email" class="validate[required,custom[email]] text-input input-text m-wrap m-ctrl" placeholder="Your Email Address" />
          <input type="submit" name="submit" id="submit" value="Sign Up" class="m-btn" />
        </p>
      </form>
      <div id="code">
        <?php
        if (isset($_POST['submit']) or isset($_POST['submit_x']))
    {
          $to = "contact@pinpo.fr";
          $subject = "Add this address to your mailing list";
          $email_field = $_POST['email'];
          $body = "E-Mail\n$email_field";

          echo "Message Sent";
          mail($to, $subject, $body);

        } else { }
        ?>
      </div>
    </div>
    </div>
        </div>
 </div>

    <hr>
    <div class="row">
      <div class="span12">

          <h2 class="about">Time until site launch:</h2>
          <div id="counter">
            <!--counter is here -->
          </div>

        </div>
      </div>
      <hr>

      <center>
      <footer>
        <div class="row">
        <div class="span4">
          <p>&copy; <a href="http://www.pinpo.fr">PINPO</a> 2015</p>
        </div>
        </div>
      </footer>
      </center>

    </div> <!-- /container -->
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

  <script type="text/javascript" src="js/jquery.countdown.js"></script>
  <script src="js/jquery.validationEngine.js" type="text/javascript"></script>
    <script type="text/javascript">
<!--
// CHANGE THESE NUMBERS TO SPECIFY YOUR LAUNCH DATE
    $(function () {
      var liftoffTime = new Date(2015, 6 - 1, 22, 11, 00);
      $('#counter').countdown({until: liftoffTime,
        layout: '{dn} {dl}, {hn} {hl}, {mnn} {ml}, {snn} {sl}'});
    });
-->
    </script>


</div>

 </div>



</body>
</html>
