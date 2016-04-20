<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My - Tofah</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo base_url()?>css/bootstrap.css" />
<link rel="stylesheet" href="<?php echo base_url()?>css/custom.css" />
<link href="<?php echo base_url()?>css/hover.css" rel="stylesheet">
<link href="<?php echo base_url()?>css/owl.carousel.css" rel="stylesheet">
<link href="<?php echo base_url()?>css/owl.theme.css" rel="stylesheet">
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel='stylesheet' type='text/css' href='<?php echo base_url()?>css/rSlider.min.css' />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
<script src="<?php echo base_url()?>ui/js/jquery.min.js"></script>
<script src="<?php echo base_url()?>ui/validation/validate.js"></script>
<script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>js/owl.carousel.js"></script>


<script>
    $(document).ready(function() {
      $("#owl-demo").owlCarousel({
        autoPlay: 3000,
        items : 4,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3],
		 margin:50,
      });
	  $(function(){
$('a[title]').tooltip();
});


    });
    </script>
<script type = "text/javascript" language = "javascript">
	     $(document).ready(function() {

            $("#male").click(function(){
               $(".target-male").effect( "bounce", {times:5,direction:'left'}, 1500 );
			   $(".target-female").hide()
            });
			 $("#female").click(function(){
               $(".target-female").effect( "bounce", {times:5,direction:'left'}, 1500 );
			   $(".target-male").hide()
            });
         });
			
      </script>
	  
	  <!-- DatePicker--->
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<!-- END DatePicker-->
<script src="<?php echo base_url()?>ui/js/jquery.ui.datepicker.js"></script>
</head>

<body>
<div class="row" style="background-color:#fc7d3a; height:2px;"></div>
<!--<div class="container">
  <div class="col-lg-4 logo"><a href=""><img src="img/logo.png" class="img-responsive" /></a></div>
  <div class="col-lg-4 col-lg-offset-4">
    <div class="top-left-box"><img src="img/24X7.png" /> 1800-202-143</div>
    <div class="top-left-box"><img src="img/mail.png" /> info@mytofah.com</div>
  </div>
</div>-->
<div class="row">
  <div class="navbar navbar-default" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="#"><img src="<?php echo base_url()?>img/logo.png" class="img-responsive" /></a> </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right nav-top">
         
            <div class="dropdown">
            <button class="dropdown-toggle btn-spec" type="button" data-toggle="dropdown"><img style="display:inline-block" src="<?php echo base_url()?>img/dp-thumb.jpg" /> 
            <span style="margin-left:10px; margin-bottom:10px; display:inline-block">The Designer <span class="caret"></span></span></button>
            <ul class="dropdown-menu">
            <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Registry Setting</a></li>
            <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i> Manage Registry</a></li>
            <li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Profile</a></li>
            <li><a href="<?php echo base_url()?>user/logout"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a></li>
            </ul>
            </div>
        
          
            
            <ul class="dropdown-menu">
            <li><a href="#">HTML</a></li>
            <li><a href="#">CSS</a></li>
            <li><a href="#">JavaScript</a></li>
            </ul>
          
          <!--<li><a style="color:#F00; padding:8px; margin-top:1px; font-size:12px;" href="#"><i class="fa fa-power-off"></i> Logout</a></li>-->
        </ul>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="#">Home</a></li>
          <li class=""><a href="#">About us</a></li>
          <li class=""><a href="#">How it Works</a></li>
          <li class=""><a href="#">News &amp; Updates</a></li>
          <li class=""><a href="#">Contact Us</a></li>
          <li class=""><a href="#">Blog</a></li>
          <li class=""><a href="#">Faq</a></li>
        </ul>
      </div>
      <!--/.nav-collapse --> 
    </div>
  </div>
</div>
