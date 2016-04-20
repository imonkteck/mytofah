<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('admin/head/header');?>
<?php $this->load->view('admin/head/navigation');?>

<div class="mainpanel">
<div class="contentpanel">
<ol class="breadcrumb breadcrumb-quirk">
  <li><a href="<?php echo base_url();?>admin/home"><i class="fa fa-home mr5"></i> Home</a></li>
  <li><a href="<?php echo base_url();?>admin/blog/index">Blogs</a></li>
  <li class="active">Categories</li>
</ol>
<div class="row">
  <div class="col-md-6">
    <div class="panel">
      <div class="panel-heading nopaddingbottom">
        <h4 class="panel-title">Add New Category</h4>
       </div>
      <div class="panel-body">
        <hr>
        <form id="blogCategory" action="<?php echo base_url();?>admin/blog/category" class="form-horizontal" method="post">
          <div class="form-group <?php if(form_error('category_name')){?>has-error<?php }?>">
            <label class="col-sm-3 control-label">Name <span class="text-danger">*</span></label>
            <div class="col-sm-8">
              <input type="text" name="category_name" class="form-control" placeholder="Type your category name..." />
              <label id="category_name-error" class="error" for="category_name"><?php echo form_error('category_name');?></label>
            </div>
          </div>
          <div class="form-group <?php if(form_error('category_name')){?>has-error<?php }?>">
            <label class="col-sm-3 control-label">Slug <span class="text-danger">*</span></label>
            <div class="col-sm-8">
              <input type="text" name="category_slug" class="form-control" placeholder="Type your slug..."  />
              <label id="category_slug-error" class="error" for="category_slug"><?php echo form_error('category_slug');?></label>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-9 col-sm-offset-3">
              <button class="btn btn-success btn-quirk btn-wide mr5" type="submit">Add New</button>
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
  
  <div class="col-md-6">
    <div class="panel">
      <div class="panel-heading">
        <h4 class="panel-title">Categories</h4>
        <p>Note: Deleting a category does not delete the blogs in that category. Instead, blogs that were only assigned to the deleted category are set to the category <b>Uncategorized</b>.</p>
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table id="dataTable1" class="table table-bordered table-striped-col">
            <thead>
              <tr>
                <th>Name</th>
                <th>Slug</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php  
			  if(isset($categories)) {
				
				 foreach($categories as $blogCategories) {?>
				 
              <tr>
                <td><?php echo $blogCategories->category_name;?></td>
                <td><?php echo $blogCategories->category_slug;?></td>
                <td><a href="javascript:void(0);<?php echo $blogCategories->id;?>" class="text-primary">Edit</a><?php if($blogCategories->id!=1){?>&nbsp;|&nbsp;<a href="javascript:void(0);<?php echo $blogCategories->id;?>" class="text-danger">Delete</a><?php } ?></td>
                
              </tr>
               <?php }}?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- panel --> 
    
  </div>
  <!-- col-md-6 --> 
  
</div>
<!--row -->

<?php $this->load->view('admin/head/footer');?>
