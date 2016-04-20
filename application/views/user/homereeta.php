<?php $this->load->view('user/head/header');?>

<div class="container">
<!--Registration Modal-->
<!--<div class="md-modal md-effect-1" id="modal-1">-->
<div class="md-modal md-effect-1 mode-me" id="modal-9">
  <div class="md-content">
    <h3>Welcome to MyTofah Wedding Registry</h3>
    <div>
      <p>Discover the wedding registry for the modern couple. Sign up & start exploring.</p>
      <div style="margin-top: 10px; margin-bottom: 15px;" id="requiredFields">
                                        <div><div>
                                            <div class="mr_signup_respontable signup_FName">
                                                <label class="hide" for="FirstName">First Name</label>
                                                <input type="text" required="" placeholder="First Name" class="mr_signup_white_input " id="FirstName">
                                            </div>
                                            <div class="mr_signup_respontable signup_LName">
                                                <label class="hide" for="LastName">Last Name</label>
                                                <input type="text" required="" placeholder="Last Name" class="mr_signup_white_input " id="LastName">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="mr_signup_respontable">
                                                <label class="hide" for="txtSignupUserEmail">Email Address</label>
                                                <input type="text" required="" placeholder="Email Address" id="txtSignupUserEmail" class="mr_signup_white_input mr_signup_field txtSignupUserEmail">
                                            </div>
                                            <div class="mr_signup_respontable">
                                                <label class="hide" for="txtSignupUserEmailConfirm">Confirm Email</label>
                                                <input type="text" required="" onpaste="return false;" placeholder="Confirm Email" id="txtSignupUserEmailConfirm" class="mr_signup_white_input mr_signup_field txtSignupUserEmailConfirm">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="mr_signup_respontable">
                                                <label class="hide" for="txtSignupUserPassword">Password</label>
                                                <input type="password" required="" placeholder="Password" id="txtSignupUserPassword" class="mr_signup_white_input mr_signup_field txtSignupUserPassword">
                                            </div>
                                            <div class="mr_signup_respontable">
                                                <label class="hide" for="txtSignupUserPasswordConfirm">Confirm Password</label>
                                                <input type="password" required="" onpaste="return false;" placeholder="Confirm Password" id="txtSignupUserPasswordConfirm" class="mr_signup_white_input mr_signup_field txtSignupUserPasswordConfirm">
                                            </div>
                                        </div>
                                    </div></div>
                                    
                                    
                                    
      <button class="md-close">Close me!</button>
    </div>
  </div>
</div>
<!---->
  <div style="position:absolute; z-index:999;" class="container">
    <div class="search-container col-lg-7" style="margin-top:170px;">
      <h3>Couple / Person Search</h3>
      <div class="col-lg-10 remove-space">
        <input type="text" class="search-fld" />
      </div>
      <div class="col-lg-2">
        <button class="btn-search"><img src="<?php echo base_url();?>ui/user/img/search-icon.png" /></button>
      </div>
    </div>
    <div class="col-lg-1"><img src="<?php echo base_url();?>ui/user/img/separate.png" class="center-block" /></div>
    <div class="col-lg-4" style="margin-top:170px;">
      <div class="reg-box"><a class="hvr-bob md-trigger" data-modal="modal-1"><img src="<?php echo base_url();?>ui/user/img/registry.png" class="center-block" />Create A Registry</a></div>
    </div>
  </div>
  <div class="md-overlay"></div><!-- the overlay element -->
</div>

<div class='rSlider'> 
  <!-- begin rSlider--view -->
  <div class='rSlider--view'> 
    
    <!-- slide -->
    <div class='rSlider--slide'>
      <div class='rSlider--container'> </div>
      <div class='rSlider--image'><img src="<?php echo base_url();?>ui/user/img/slider.jpg" /></div>
      <div class='rSlider--bg-color'></div>
    </div>
    <!-- slide -->
    <div class='rSlider--slide'>
      <div class='rSlider--container'> </div>
      <div class='rSlider--image'><img src="<?php echo base_url();?>ui/user/img/slider.jpg" /></div>
      <div class='rSlider--bg-color'></div>
    </div>
  </div>
  
  <!-- Controls -->
  <div class='rSlider--dots-controls'></div>
  <div class='rSlider--arrow-controls'></div>
</div>
</div>
</div>
<div class="container">
  <div class="col-lg-12 heading"><img src="<?php echo base_url();?>ui/user/img/how-it-works.jpg" class="center-block" /></div>
  <div class="col-lg-6"><img src="<?php echo base_url();?>ui/user/img/video.jpg" class="img-responsive" /></div>
  <div class="col-lg-6">
    <h3 class="text-head">Easy Description</h3>
    <p style="text-align:justify; line-height:30px;"> consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. </p>
  </div>
  <div class="col-lg-12 heading"><img src="<?php echo base_url();?>ui/user/img/advantages.jpg" class="center-block" /></div>
  <p class="text-center">consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,</p>
  <div class="clearfix"></div>
  <br />
  <br />
  <div class="col-lg-3">
    <div class="hvr-ripple-out"><img src="<?php echo base_url();?>ui/user/img/ico-1.png" class="img-responsive center-block" /></div>
    <div class="content-head" style="color:#ef5d67">No redundant & wasteful gift</div>
  </div>
  <div class="col-lg-3">
    <div class="hvr-ripple-out"><img src="<?php echo base_url();?>ui/user/img/ico-2.png" class="img-responsive center-block" /></div>
    <div class="content-head" style="color:#59c0bf">Get What you wish for</div>
  </div>
  <div class="col-lg-3">
    <div class="hvr-ripple-out"><img src="<?php echo base_url();?>ui/user/img/ico-3.png" class="img-responsive center-block" /></div>
    <div class="content-head" style="color:#ec5832">safe & Secure Transactions</div>
  </div>
  <div class="col-lg-3">
    <div class="hvr-ripple-out"><img src="<?php echo base_url();?>ui/user/img/ico-4.png" class="img-responsive center-block" /></div>
    <div class="content-head" style="color:#2699c8">Easy Tracking System</div>
  </div>
</div>
<div class="row back-bg">
  <div class="container">
    <div class="col-lg-12 heading"><img src="<?php echo base_url();?>ui/user/img/about.png" class="center-block" /></div>
    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. </p>
  </div>
  <button class="view-all center-block"> <i class="fa fa-eye"></i> View All</button>
</div>
<div class="container">
  <div class="col-lg-12 heading"><img src="img/recent-wedding.jpg" class="center-block" /></div>
</div>
<div class="row wedding-bg">
  <div class="container">
    <div id="owl-demo" class="owl-carousel">
      <div class="item">
        <div class="wedding-box"> <img src="<?php echo base_url();?>ui/user/img/wedding.jpg" class="img-responsive" />
          <h3>Loreum lipsum </h3>
          <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, </p>
          <button class="btn-gray"> <i class="fa fa-eye"></i> View All</button>
        </div>
      </div>
      <div class="item">
        <div class="wedding-box"> <img src="<?php echo base_url();?>ui/user/img/wedding1.jpg" class="img-responsive" />
          <h3>Loreum lipsum </h3>
          <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, </p>
          <button class="btn-gray"> <i class="fa fa-eye"></i> View All</button>
        </div>
      </div>
      <div class="item">
        <div class="wedding-box"> <img src="<?php echo base_url();?>ui/user/img/wedding2.jpg" class="img-responsive" />
          <h3>Loreum lipsum </h3>
          <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, </p>
          <button class="btn-gray"> <i class="fa fa-eye"></i> View All</button>
        </div>
      </div>
      <div class="item">
        <div class="wedding-box"> <img src="<?php echo base_url();?>ui/user/img/wedding3.jpg" class="img-responsive" />
          <h3>Loreum lipsum </h3>
          <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, </p>
          <button class="btn-gray"> <i class="fa fa-eye"></i> View All</button>
        </div>
      </div>
      <div class="item">
        <div class="wedding-box"> <img src="<?php echo base_url();?>ui/user/img/wedding.jpg" class="img-responsive" />
          <h3>Loreum lipsum </h3>
          <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, </p>
          <button class="btn-gray"> <i class="fa fa-eye"></i> View All</button>
        </div>
      </div>
      <div class="item">
        <div class="wedding-box"> <img src="<?php echo base_url();?>ui/user/img/wedding2.jpg" class="img-responsive" />
          <h3>Loreum lipsum </h3>
          <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, </p>
          <button class="btn-gray"> <i class="fa fa-eye"></i> View All</button>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('user/head/footer');?>
