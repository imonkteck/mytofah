<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if(isset($pagetitle)) echo $pagetitle;?></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>css/bootstrap.css" />
<link rel="stylesheet" href="<?php echo base_url()?>css/custom.css" />
<link href="<?php echo base_url()?>css/hover.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/component.css" />
<link href="<?php echo base_url()?>css/owl.carousel.css" rel="stylesheet">
<link href="<?php echo base_url()?>css/owl.theme.css" rel="stylesheet">
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel='stylesheet' type='text/css' href='<?php echo base_url()?>css/rSlider.min.css' />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
<script src="<?php echo base_url()?>ui/js/jquery.min.js"></script>
<script src="<?php echo base_url()?>ui/validation/validate.js"></script>
<script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>js/modernizr.custom.js"></script>
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
    $("#close-it").click(function(e) {
       $(".mode-me,.md-overlay").hide();
        });
    

    });
    </script>
<style>
.item {
  margin-left: 15px;
}
</style>
</head>

<body>

<div class="md-modal md-effect-1 mode-me" id="modal-9">
  <div class="md-content"><br />
  <div class="pull-right" id="close-it" style="background:none; border:none; top:-28px; left:30px;"><i style="font-size:22px; color:#fff" class="fa fa-times-circle" aria-hidden="true"></i></div>
    <div class="target-male"> <img class="center-block" src="<?php echo base_url()?>img/footer-logo.png" />
      <div>
        <p style="display:block; border-bottom:dotted 1px #fff" class=" text-center">Discover the wedding registry for the modern couple.
          Sign up & start exploring.</p>
        <br />
         <span id="form-error"  style="margin-left:103px;"></span>
        <div class="col-lg-12 user-log1">
          <input type="text" placeholder="Email" name="email" id="email" onchange="login_checkemail('<?php echo base_url();?>')">
		  <span id="email-error"  style="margin-left:103px;"></span>
        </div>
        <br />
        <div class="col-lg-12 user-log1">
          <input type="password" placeholder="Password" name="pass" id="pass" onchange="login_checkepass('<?php echo base_url();?>')">
		   <span id="pass-error" style="margin-left:103px;"></span>
        </div>
        <div class="col-lg-12 text-center" style="font-size:12px; padding-top:10px;">Don't have an account? <strong class="md-close md-trigger" data-modal="modal-1" style="background-color:transparent; border:none; color:#FFF">Sign Up Now</strong></div>
        <div class="clearfix"></div>
        <br />
        <button class="md-close" onclick="login_check('<?php echo base_url()?>')">Login</button>
        
      </div>
    </div>
  </div>
</div>


<div class="md-modal md-effect-1 mode-me" id="modal-1">
  <div class="md-content"><br />
  <div class="pull-right" id="close-it" style="background:none; border:none; top:-28px; left:30px;"><i style="font-size:22px; color:#fff" class="fa fa-times-circle" aria-hidden="true"></i></div>
    <div class="target-male"> <img class="center-block" src="<?php echo base_url()?>img/footer-logo.png" />
      <div>
        <p style="display:block; border-bottom:dotted 1px #fff" class=" text-center">Discover the wedding registry for the modern couple.
         </p>
        <br />
        <form method="post" onsubmit="return signup_validation()">
        <div class="col-lg-6 user-log">
        <input type="text" placeholder="User Name" name="username" id="username" onchange="return valid_username('<?php echo base_url();?>')" />
		<span id="username-error"  style="margin-left:103px;"></span>
      </div>
      <div class="col-lg-6 user-log">
        <input type="text" placeholder="First Name" name="firstname" id="firstname"/>
		<span id="fname-error"  style="margin-left:103px;"></span>
      </div>
      <div class="col-lg-6 user-log">
        <input type="text" placeholder="Last Name" name="lastname" id="lastname"/>
		<span id="lname-error"  style="margin-left:103px;"></span>
      </div>
      <div class="col-lg-6 user-log">
        <input type="text" placeholder="Email Id" name="emailid" id="emailid" onchange="return valid_email('<?php echo base_url();?>')"/>
		<span id="emailid-error"  style="margin-left:103px;"></span>
      </div>
      <div class="col-lg-6 user-log">
        <input type="password" placeholder="Password" name="password" id="password" />
		<span id="password-error"  style="margin-left:103px;"></span>
      </div>
      <div class="col-lg-6 user-log">
        <input type="password" placeholder="Confirm Password" name="confimPass" id="confimPass" onchange="return checkpass()" />
		<span id="conf-error"  style="margin-left:103px;"></span>
      </div>
	  <input type="hidden" name="url" id="url" value="<?php echo base_url()?>" />
      <div class="clearfix"></div><br />

      
      <div class="col-lg-12 text-center" style="font-size:12px"> By creating your Zola account you agree to our <a style="color:#FFF; font-weight:bold" href="#">Terms of Use</a> and <a style="font-weight:bold; color:#FFF" href="#">Privacy Policy</a>.<br />
        Already a member? <strong class="md-close  md-trigger" data-modal="modal-9" style="background:none; border:none; color:#fff">Log In</strong> </div>
        
        
        
        <div class="clearfix"></div>
        <br />
        <button class="md-close" type="submit" name="submit">Sign Up</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!--<div class="md-modal md-effect-1" id="modal-1">
  <div class="md-content"><br />
    <img class="center-block" src="img/footer-logo.png" />
    <div>
      <p class=" text-center" style="display:block; border-bottom:dotted 1px #fff">This is a modal window. You can do the following things with it:</p>
      <br />
      <br />
      <div class="col-lg-6 user-log">
        <input type="text" placeholder="User Name" />
      </div>
      <div class="col-lg-6 user-log">
        <input type="text" placeholder="First Name" />
      </div>
      <div class="col-lg-6 user-log">
        <input type="text" placeholder="Last Name" />
      </div>
      <div class="col-lg-6 user-log">
        <input type="text" placeholder="Email Id" />
      </div>
      <div class="col-lg-6 user-log">
        <input type="password" placeholder="Password" />
      </div>
      <div class="col-lg-6 user-log">
        <input type="password" placeholder="Confirm Password" />
      </div>
      <div class="clearfix"></div>
      <br />
      <button class="md-close">Start Your Registry</button>
      <div class="clearfix"></div>
      <br />
      <div class="col-lg-12 text-center" style="font-size:12px"> By creating your Zola account you agree to our <a style="color:#FFF; font-weight:bold" href="#">Terms of Use</a> and <a style="font-weight:bold; color:#FFF" href="#">Privacy Policy</a>.<br />
        Already a member? <strong class="md-close  md-trigger" data-modal="modal-9" style="background:none; border:none; color:#fff">Log In</strong> </div>
      <div class="clearfix"></div>
      <br />
    </div>
  </div>
</div>-->






<div class="md-overlay"></div>


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
        <a class="navbar-brand" href="#"><img src="img/logo.png" class="img-responsive" /></a> </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right nav-top">
          <ul class="nav navbar-nav navbar-right">
            <li class="login-area"><img src="<?php echo base_url()?>img/red-strip.png"><a class="md-trigger" data-modal="modal-9" href="javascript:void(0)"><img src="<?php echo base_url()?>img/user-ico.png"> Member sign in / Sign up</a></li>
          </ul>
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