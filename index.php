<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/ico/brain.png">

    <title>PsychAid</title>

   
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/my_design.css" rel="stylesheet">
   
    <link rel="stylesheet" href="css/jquery.share.css" type="text/css" />
   
    <link href="css/carousel.css" rel="stylesheet">
    <script type="text/javascript" src="js/update.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $( document ).ready(function() {

         $('#about_soft').click(function(){
         
          $('html, body').animate({
            scrollTop: $("#about_this_soft").offset().top-250
          }, 800);
          
          
        });
   
$('.back_top').click(function(){
    $('html, body').animate({scrollTop:0}, 'slow');
});


$(window).scroll(function() {
    if ($(window).scrollTop()  > $(window).height() / 2)
    {
        // middle of page hit, load extra content here
        //alert('You are in the middle of the page');

        // Uncomment out the line below to unbind the scroll event if the 
        // execution of this code is only desired once.
        // $(this).unbind('scroll');
        $(".back_top").css({"visibility": "visible"});
    }else{
      $(".back_top").css({"visibility": "hidden"});
    }
});

    });
    </script>

   
  </head>

  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img class="logo" src="img/ico/brain.png" alt="logo"> PsychAid</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                

                 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#" id="about_soft">The Software</a></li>
                    <li><a href="#">Future Plan</a></li>
                  </ul>
                </li>

                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Options <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="login_user.php">Login</a></li>
                    <li><a href="prompt.php">Sign Up</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


    
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="img/slider/c.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Too much worried? </h1>
              <p>Anxiety can lead to serious psychological problem. Don't be late to share and solve your problems. </p>
              <p><a class="btn btn-lg btn-primary" href="signup_patient.php" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/slider/b.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Do you need support?</h1>
              <p>You need support but cannot share your problems? Here we are to listen to all of your problem.</p>
              <p><a class="btn btn-lg btn-primary" href="#about_this_soft" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/slider/a.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Going to suicide? Stop a moment please!</h1>
              <p>Just take some time to think about the value of your life. We are here always beside you. Don't take any wrong decision in a hurry!</p>
              <p><a class="btn btn-lg btn-primary" href="prompt.php" role="button">Get Connected </a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div class="container marketing">

      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="icons_set/adhd_img.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>ADHD</h2>
          <p>ADHD management usually involves some combination of counseling, lifestyle changes, and medications. Medications are only recommended as a first-line treatment in children who have severe symptoms and may be considered for those with moderate symptoms who either refuse or fail to improve with counseling.</p>
          <p><a class="btn btn-default" href="prompt.php" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <img class="img-circle" src="icons_set/dyslex.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Dyslexia</h2>
          <p>Dyslexia, also known as reading disorder or alexia, is a learning difficulty characterised by trouble reading despite a normal intelligence. Different people are affected to different degrees. Problems may include sounding out words, spelling words, reading quickly, writing words, pronouncing words when reading aloud, and understanding what was read</p>
          <p><a class="btn btn-default" href="prompt.php" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="icons_set/klp.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Kleptomania</h2>
          <p>Kleptomania is the inability to refrain from the urge to steal items and is done for reasons other than personal use or financial gain. </p>
          <p><a class="btn btn-default" href="prompt.php" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette" id="about_this_soft">
        <div class="col-md-7">
          <h2 class="featurette-heading">About <span class="text-muted"> the special features of the software...</span></h2>
          <p class="lead">This goal of this software is to create  communications between the Psychiatrist and Psychological Patients. Here are the features:
<ol><li>Profile for Psychiatrists and profile for Patients</li>
<li>Patients can create problem with subject and description</li>
<li>After creating problem clients can send request to Psychiatrist with that problem</li>
<li>Psychiatrists will be able to approve particular patient</li>
<li>When Psychiatrist selects the problem a particular conversation schedule will be created</li>
<li>Conversation will be made by one to one communication to avoid chaos</li>


</ol>      

</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="icons_set/target_goal.png" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      

    
      <footer>
        <div class="back_top"><img class="logo" src="icons_set/fly.png"  /><h4>Fly to top</h4> </div>
        
        <p>&copy; 2015 PsychAid, Org. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>


<div id="demo4" class="share-affix" style="left: auto; right: 0px; top: 40%;">Share
      <a href="https://twitter.com/share?via=in1.com&amp;text=jQuery Share Social Media Plugin - Share to multiple social networks from a single form" title="Share this page on twitter" class="pop share-icon share-icon-twitter" style="display: block;"></a>
      <a href="https://www.facebook.com/sharer/sharer.php?u=www.google.com" title="Share this page on facebook" class="pop share-icon share-icon-facebook" style="display: block;"></a>
      <a href="http://www.tumblr.com/share?v=3&amp;u=http%3A%2F%2Fwww.in1.com" title="Share this page on tumblr" class="pop share-icon share-icon-tumblr" style="display: block;"></a>
      <a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fwww.in1.com&amp;media=&amp;description=Social media plugin and widget demos featuring jQuery Socialist: a social media and RSS feed plugin that combines multiple sources, and jQuery Share: a single click social sharing plugin" title="Share this page on pinterest" class="pop share-icon share-icon-pinterest" style="display: block;"></a>
      <a href="https://plusone.google.com/_/+1/confirm?hl=en&amp;url=http%3A%2F%2Fwww.in1.com" title="Share this page on googleplus" class="pop share-icon share-icon-googleplus" style="display: block;"></a>
    </div>


    </div>



   
    
  </body>
</html>
