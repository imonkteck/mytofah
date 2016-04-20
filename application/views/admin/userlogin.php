<?php $this->load->view('admin/head/header');?>

<body class="signwrapper">
<div class="sign-overlay"></div>
<div class="signpanel"></div>
<div class="panel signin">
  <?php /*?><div class="panel-heading">
    <span><img src="<?php echo base_url();?>ui/img/logo.jpg" /></span>
    <h4 class="panel-title"><!--Welcome! Please signin.--></h4>
  </div><?php */?>
  <div class="panel-body">
    <div class="or">Welcome</div>
    <div id="error"></div>
    <form name="adminlogin" id="adminlogin" method="post" onSubmit="return validatelogin('<?php echo base_url();?>')">
      <div class="form-group">
        <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input type="text" class="form-control" placeholder="Enter Email" id="username" name="username">
        </div>
      </div>
      <div class="form-group">
        <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
          <input type="password" class="form-control" placeholder="Enter Password" name="password" id="password">
        </div>
      </div>
      <div><a href="#" class="forgot">Forgot password?</a></div>
      <div class="form-group">
        <input class="btn btn-success btn-quirk btn-block" type="submit" value="Sign In">
      </div>
    </form>
    <hr class="invisible">
  <div class="web"><a href="<?php echo base_url();?>" target="new">MyTofah.com</a></div>
  </div>
 
</div>
<!-- panel -->
</body>
</html>