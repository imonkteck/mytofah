<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('admin/head/header');?>
<?php $this->load->view('admin/head/navigation');?>

<div class="mainpanel">
<div class="contentpanel">
<ol class="breadcrumb breadcrumb-quirk">
  <li><a href="<?php echo base_url();?>admin/home"><i class="fa fa-home mr5"></i> Home</a></li>
  <li class="active">CMS</li>
</ol>
<div class="row">
  <div class="col-md-12">
    <div class="panel">
      <div class="panel-heading nopaddingbottom">
        <h4 class="panel-title">About Us</h4>
      </div>
      <div class="panel-body">
        <hr>
        <form class="form-horizontal" method="post">
       
          <div class="form-group <?php if(form_error('title')){?>has-error<?php }?>">
            <label class="col-sm-3 control-label">Title <span class="text-danger">*</span></label>
            <div class="col-sm-8">
              <input type="text" name="title" class="form-control" placeholder="Enter title here..." value="<?php if(isset($aboutUsContent->title)){ echo $aboutUsContent->title;}?>"/>
              <label id="title-error" class="error" for="title"><?php echo form_error('title');?></label>
            </div>
          </div>
          <div class="form-group <?php if(form_error('content')){?>has-error<?php }?>">
            <label class="col-sm-3 control-label">Content<span class="text-danger">*</span></label>
            <div class="col-sm-8"> 
             <textarea rows="5" class="form-control" id="lawsContent" style="display:none;" name="content"></textarea>
              
              <div id="summernote"><?php if(isset($aboutUsContent->content)){ echo $aboutUsContent->content;}?></div>
              <label id="content-error" class="error" for="lawsContent"><?php echo form_error('content');?></label>
            </div>
          </div>
        
          <hr>
          <div class="row">
            <div class="col-sm-9 col-sm-offset-3">
              <button class="btn btn-success btn-quirk btn-wide mr5">Submit</button>
            </div>
          </div>
        </form>
      </div>
      <!-- panel-body --> 
    </div>
    <!-- panel --> 
    
  </div>
  <!-- col-md-6 --> 
  
</div>
<!--row -->

<?php $this->load->view('admin/head/footer');?>
