<body>
<header>
  <div class="headerpanel">
    <div class="logopanel">
      <h4><a href="<?php echo base_url();?>admin/home">MY TOFAH</a></h4>
    </div>
    <!-- logopanel -->
    
    <div class="headerbar"> <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
      <div class="header-right">
        <ul class="headermenu">
          <li>
            <div class="btn-group">
              <button type="button" class="btn btn-logged" data-toggle="dropdown"><img src="<?php echo base_url();?>ui/img/logo.png" alt="" />Welcome, Admin<span class="caret"></span> </button>
              <ul class="dropdown-menu pull-right">
                <li><a href="javascript:void(0);"><i class="glyphicon glyphicon-user"></i> My Profile</a></li>
                <li><a href="javascript:void(0);"><i class="glyphicon glyphicon-cog"></i> Account Settings</a></li>
                <li><a href="<?php echo base_url();?>login/logout"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
      <!-- header-right --> 
    </div>
    <!-- headerbar --> 
  </div>
  <!-- header--> 
</header>
<section>
<div class="leftpanel">
  <div class="leftpanelinner"> 
    
    <!-- ################## LEFT PANEL PROFILE ################## -->
    
    <div class="media leftpanel-profile">
      <div class="media-left"> <a href="javascript:void(0);"> <img src="<?php echo base_url();?>ui/images/photos/loggeduser.png" alt="" class="media-object img-circle"> </a> </div>
      <div class="media-body">
        <h4 class="media-heading">Admin</h4>
        <span>Dashboard</span> </div>
    </div>
    <!-- leftpanel-profile -->
   
    <ul class="nav nav-tabs nav-justified nav-sidebar">
      <li class="tooltips active" data-toggle="tooltip" title="Main Menu"><a data-toggle="tab" data-target="#mainmenu"><i class="tooltips fa fa-ellipsis-h"></i></a></li>
      <li class="tooltips" data-toggle="tooltip" title="Log Out"><a href="<?php echo base_url();?>login/logout"><i class="fa fa-sign-out"></i></a></li>
    </ul>
    <div class="tab-content"> 
      
      <!-- ################# MAIN MENU ################### -->
      
      <div class="tab-pane active" id="mainmenu">
        <h5 class="sidebar-title">Favorites</h5>
        <ul class="nav nav-pills nav-stacked nav-quirk">
          <li <?php if(isset($segment)){if($segment == 'home'){?>class="active"<?php }} ?>><a href="<?php echo base_url();?>admin/home"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        </ul>
        <h5 class="sidebar-title">Main Menu</h5>
        <ul class="nav nav-pills nav-stacked nav-quirk">
         <li class="nav-parent <?php if(isset($segment)){if($segment == 'user_list'){?>active<?php }} ?>"><a href="javascript:void(0);"><i class="fa fa-th-list"></i> 
         <span>User Management</span></a>
            <ul class="children">
              <li <?php if(isset($segment)){if($segment == 'user_list'){?>class="active"<?php }} ?>><a href="<?php echo base_url();?>admin/user_list">Users</a></li>
            </ul>
          </li>
          <li class="nav-parent <?php if(isset($basesegment)){if($basesegment == 'cms'){?>active<?php }} ?>"><a href="javascript:void(0);"><i class="fa fa-th-list"></i> 
          <span>Content management</span></a>
            <ul class="children">
               <li <?php if(isset($segment)){if($segment == 'aboutUs'){?>class="active"<?php }} ?>><a href="<?php echo base_url();?>admin/cms/aboutUs">About us</a></li>
               <li <?php if(isset($segment)){if($segment == 'user_list'){?>class="active"<?php }} ?>><a href="javascript:void(0);">Pressroom / News Management</a></li>
               <li <?php if(isset($segment)){if($segment == 'contactUs'){?>class="active"<?php }} ?>><a href="<?php echo base_url();?>admin/cms/contactUs">Contact us</a></li>
              
            </ul>
          </li>
           <li class="nav-parent <?php if(isset($basesegment)){if($basesegment == 'blog'){?>active<?php }} ?>"><a href="javascript:void(0);"><i class="fa fa-th-list"></i> 
          <span>Blogs Managment</span></a>
            <ul class="children">
              <li <?php if(isset($segment)){if($segment == 'index'){?>class="active"<?php }} ?>><a href="<?php echo base_url();?>admin/blog/index">All Blogs</a></li>
              <li <?php if(isset($segment)){if($segment == 'add'){?>class="active"<?php }} ?>><a href="<?php echo base_url();?>admin/blog/add">Add New</a></li>
               <li <?php if(isset($segment)){if($segment == 'category'){?>class="active"<?php }} ?>><a href="<?php echo base_url();?>admin/blog/category">Categories</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- tab-pane --> 
      
    </div>
    <!-- tab-content --> 
    
  </div>
  <!-- leftpanelinner --> 
</div>
<!-- leftpanel --> 

