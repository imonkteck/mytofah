<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('admin/head/header');?>
<?php $this->load->view('admin/head/navigation');?>

<div class="mainpanel">
<div class="contentpanel">
<ol class="breadcrumb breadcrumb-quirk">
  <li><a href="<?php echo base_url();?>admin/home"><i class="fa fa-home mr5"></i> Home</a></li>
  <li class="active">Blogs</li>
</ol>
<div class="row">
  <div class="col-md-12">
    <div class="panel">
      <div class="panel-heading nopaddingbottom">
        <h4 class="panel-title">Add New Blog</h4>
      </div>
      <div class="panel-body">
        <hr>
        <form id="addblog"  class="form-horizontal" method="post">
         <div class="form-group">
            <label class="col-sm-3 control-label">Featured Image<span class="text-danger">*</span></label>
            <div class="col-sm-8">
              <input type="file" name="featured_image" class="form-control"/>
            </div>
          </div>
          <div class="form-group <?php if(form_error('blog_title')){?>has-error<?php }?>">
            <label class="col-sm-3 control-label">Title <span class="text-danger">*</span></label>
            <div class="col-sm-8">
              <input type="text" id="blog_title" name="blog_title" class="form-control" placeholder="Enter title here..."  />
               <label id="blog_title-error" class="error" for="blog_title"><?php echo form_error('blog_title');?></label>
            </div>
          </div>
          <div class="form-group <?php if(form_error('blog_content')){?>has-error<?php }?>">
            <label class="col-sm-3 control-label">Description <span class="text-danger">*</span></label>
            <div class="col-sm-8"> 
              <textarea rows="5" class="form-control" id="lawsContent" style="display:none;" name="blog_content"></textarea>
              
              <div id="summernote" name="summernote"></div>
             <label id="name-error" class="error" for="lawsContent"><?php echo form_error('blog_content');?></label>
            </div>
          </div>
          <div class="form-group <?php if(form_error('blog_category[]')){?>has-error<?php }?>">
            <label class="col-sm-3 control-label">Categories <span class="text-danger">*</span></label>
            <div class="col-sm-8">
               <select id="select2" name="blog_category[]" class="select2-selection--multiple" style="width: 100%" data-placeholder="Multiple Selection Categories" multiple>
                   <?php  if(isset($categories)){
				  foreach($categories as $blogCategories) {?>
                  <option value="<?php echo $blogCategories->id;?>"><?php echo $blogCategories->category_name;?></option>
                  <?php }}?>
                </select>
                <label class="error" for="select2"><?php echo form_error('blog_category[]');?></label>
            </div>
          </div>
            <div class="form-group <?php if(form_error('blog_author')){?>has-error<?php }?>">
            <label class="col-sm-3 control-label">Author Name <span class="text-danger">*</span></label>
            <div class="col-sm-8">
              <input type="text" name="blog_author" class="form-control" placeholder="Enter author name here..."  />
               <label id="blog_author-error" class="error" for="blog_author"><?php echo form_error('blog_author');?></label>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-9 col-sm-offset-3">
              <button class="btn btn-success btn-quirk btn-wide mr5">Submit</button>
              <button type="reset" class="btn btn-quirk btn-wide btn-default">Reset</button>
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
