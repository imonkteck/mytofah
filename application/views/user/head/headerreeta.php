<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>
<?php if(isset($pagetitle)){ echo $pagetitle;}?>
</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/<?php echo base_url();?>ui/user/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>ui/user/css/bootstrap.css" />
<link rel="stylesheet" href="<?php echo base_url();?>ui/user/css/custom.css" />
<link href="<?php echo base_url();?>ui/user/css/hover.css" rel="stylesheet">
<link href="<?php echo base_url();?>ui/user/css/owl.carousel.css" rel="stylesheet">
<link href="<?php echo base_url();?>ui/user/css/owl.theme.css" rel="stylesheet">
<link href="http://www.jqueryscript.net/<?php echo base_url();?>ui/user/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel='stylesheet' type='text/css' href='<?php echo base_url();?>ui/user/css/rSlider.min.css' />
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>-->
<script src="<?php echo base_url()?>ui/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>ui/user/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>ui/user/js/owl.carousel.js"></script>
<script>
    $(document).ready(function() {
      $("#owl-demo").owlCarousel({
        autoPlay: 3000,
        items : 4,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3],
		 margin:50,
      });

    });
    </script>
<style>
.item {
	margin-left: 15px;
}
</style>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>ui/model/component.css" />
<script src="<?php echo base_url();?>ui/model/modernizr.custom.js"></script>

</head>

<body>
<div class="row" style="background-color:#fc7d3a; height:2px;"></div>
<div class="container">
  <div class="col-lg-4 logo"><a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>ui/user/img/logo.jpg" class="img-responsive" /></a></div>
  <div class="col-lg-4 col-lg-offset-4">
    <div class="top-left-box"><img src="<?php echo base_url();?>ui/user/img/24X7.png" /> 1800-202-143</div>
    <div class="top-left-box"><img src="<?php echo base_url();?>ui/user/img/mail.png" /> info@mytofah.com</div>
  </div>
</div>
<div class="row">
<div class="navbar navbar-default" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li class="login-area"><img src="<?php echo base_url();?>ui/user/img/red-strip.png"><a class="md-trigger" data-modal="modal-9" href="javascript:void(0)"><img src="<?php echo base_url();?>ui/user/img/user-ico.png" /> Member sign in / Sign up</a></li>
      </ul>
	  
      <ul class="nav navbar-nav">
        <li <?php if(empty($segment)){?>class="active"<?php }?>><a href="<?php echo base_url();?>">Home</a></li>
        <li <?php if(isset($segment) && $segment == 'about'){?>class="active"<?php }?>><a href="<?php echo base_url();?>info/about">About us</a></li>
        <li <?php if(isset($segment) && $segment == 'howitwork'){?>class="active"<?php }?>><a href="<?php echo base_url();?>info/howitwork">How it Works</a></li>
        <li <?php if(isset($segment) && $segment == 'news'){?>class="active"<?php }?>><a href="<?php echo base_url();?>info/news">News &amp; Updates</a></li>
        <li <?php if(isset($segment) && $segment == 'contactus'){?>class="active"<?php }?>><a href="<?php echo base_url();?>info/contactus">Contact Us</a></li>
        <li class=""><a href="#">Blog</a></li>
        <li class=""><a href="#">Help</a></li>
        <li class=""><a href="#">Faq</a></li>
        
        <!--<li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu 2 <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">One more separated link</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>-->
      </ul>
    </div>
    <!--/.nav-collapse --> 
  </div>
</div>
<div class="bg-dummy">
