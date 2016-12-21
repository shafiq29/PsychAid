 
<?php
session_start();
if(!isset($_SESSION['user'] ) || $_SESSION['mode']!="patient"){
header("Location: login_user.php");
}
include('connection.php');
$usid=$_SESSION['user_id'];
$prof_que=mysql_query("SELECT ProPic FROM patients where PatientId='$usid'");
      $prof_path= mysql_fetch_array($prof_que);
      $imgpath=$prof_path['ProPic'];
?>

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
    <link href="css/chat_box.css" rel="stylesheet">
    <link href="css/notify.css" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery.share.css" type="text/css" />
   <link rel="stylesheet" href="css/notify.css" type="text/css" />
    <link href="css/carousel.css" rel="stylesheet">
    <script type="text/javascript" src="js/update.js"></script>
    
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $( document ).ready(function() {


 function e() {


       $.getJSON("my_notice.php", "", function(e) {
            if (e.update == true) {
                 $("#test_noti").css("visibility","visible");           
                $("#test_noti").fadeOut(15000);   
            }
        });

    }

 
    $(setInterval(function() {
        return e()
    }, 1e3));

        $('.back_top').click(function(){
          $('html, body').animate({scrollTop:0}, 'slow');
        });
        $('#view_psy_com').click(function(){
         
          $('html, body').animate({
            scrollTop: $("#psy_list").offset().top-250
          }, 800);

          $.post("provide_psy_list.php", "", function(e) {
            $("#psy_list").html(e);
          })
        });

        $('#create_prob').click(function(){
         
          $('html, body').animate({
            scrollTop: $("#prob_state").offset().top-250
          }, 800);

          $.post("problem_form.php", "", function(e) {
            
            $("#prob_state").html(e);
          })
        });

        $(window).scroll(function() {
          if ($(window).scrollTop()  > $(window).height() / 2){
            $(".back_top").css({"visibility": "visible"});
          }else{
            $(".back_top").css({"visibility": "hidden"});
          }
        });

        $('#share_prob').click(function(){
         
          $('html, body').animate({
            scrollTop: $("#prob_state").offset().top-250
          }, 800);
          
          
        });
        
         $('#con_exp').click(function(){
         
          $('html, body').animate({
            scrollTop: $("#view_con").offset().top-250
          }, 800);
          $.post("show_connected_exp.php", "", function(e) {
            
            $("#view_con").html(e);
          })
          
        });
        
         $( "#ser" ).keyup(function() {
           info= $('#ser').val();

            dat={'inf': info};
             $('html, body').animate({
            scrollTop: $("#psy_list").offset().top-250
          }, 800);

          $.post("search_match.php", dat, function(e) {
            $("#psy_list").html(e);
          })
          });

      });
    </script>

   
  </head>


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
                
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Options <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                   
                    <li><a href="logout_user.php">Logout</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header"></li>
                    <li><a href="update_pro.php">Change Profile Picture</a></li>
                    <li><a href="#" id="view_psy_com">View Psychiatrist Community</a></li>
                    <li><a href="#" id="create_prob">Create Problem</a></li>
                    <li><a href="#" id="con_exp">Connected Experts</a></li>
                  </ul>
                </li>

              </ul>
              <div class="col-sm-3 col-md-3 pull-right">
            <form class="navbar-form" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Disease type" name="q" id="ser">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
        </div>  
            </div>

          </div>


        </nav>

      </div>
    </div>


  </br>
</br>
</br>
</br>
</br>
</br>
    <div class="container marketing">

      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="<?php echo $imgpath;?>" alt="Generic placeholder image" style="width: 140px; height: 140px;">
           <h2>Welcome to the community, <?php echo $_SESSION['user']."!";?></h2>
          <p>You are now a member of Patient community. Explore freely share your psychological problems and get instant support...</p>
          <p><a class="btn btn-default" href="#" role="button" id="share_prob">Share Problem?</a></p>
           
        </div>
       
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette" id="psy_list">
        <div class="col-md-7">
          <h2 class="featurette-heading">View Psychiatrist Community <span class="text-muted">Lots of experts are waiting to provide you solution...</span></h2>
          <p class="lead">Just click view psychiatrist community under the options dropdown!</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" height="300" width="300" src="icons_set/expert.ico" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider" >

      <div class="row featurette" id="prob_state">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="icons_set/Negative.png" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">You can easily reach to psychological experts! Just click create problem under options menu and select an appropriate expert...</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette" id="view_con">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Yahoo!.</span></h2>
          <p class="lead">You can easily view approved requests and see your connected experts... Just click Connected Experts under options...</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="icons_set/cons.png" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

    
      <footer>
        <div class="back_top"><img class="logo" src="icons_set/fly.png"  /><h4>Fly to top</h4> </div>
        
        <p>&copy; 2015 PsychAid, Org. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>


<div id="demo4" class="share-affix" style="left: auto; right: 0px; top: 40%;">Share
      <a href="https://twitter.com/share?via=in1.com&amp;text=jQuery Share Social Media Plugin - Share to multiple social networks from a single form" title="Share this page on twitter" class="pop share-icon share-icon-twitter" style="display: block;"></a>
      <a href="https://www.facebook.com/sharer/sharer.php?u=www.google.com" title="Share this page on facebook" class="pop share-icon share-icon-facebook" style="display: block;"></a>
      <a href="http://www.tumblr.com/share?v=3&amp;u=http%3A%2F%2Fwww.in1.com" title="Share this page on tumblr" class="pop share-icon share-icon-tumblr" style="display: block;"></a>
      <a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fwww.in1.com&amp;media=&amp;description=Social media plugin and widget demos featuring jQuery Socialist: a social media and RSS feed plugin that combines multiple sources, and jQuery Share: a single click social sharing plugin" title="Share this page on pinterest" class="pop share-icon share-icon-pinterest" style="display: block;"></a>
      <a href="https://plusone.google.com/_/+1/confirm?hl=en&amp;url=http%3A%2F%2Fwww.in1.com" title="Share this page on googleplus" class="pop share-icon share-icon-googleplus" style="display: block;"></a>
    </div>


    </div>

<div id="test_noti">One new connection with Expert. Please click Connected Experts!</div>

   
    
  </body>
</html>
