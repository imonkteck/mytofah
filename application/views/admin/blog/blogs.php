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
      <div class="panel-heading">
        <h2>Blogs &nbsp;
          <a class="btn btn-default btn-sm" href="<?php echo base_url();?>admin/blog/add">Add New</a>
        </h2>
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table id="dataTable1" class="table table-bordered table-striped-col">
            <thead>
              <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Categories</th>
                <th>Comments</th>
                <th>Date</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
            <?php  if(isset($blogs)){
				  foreach($blogs as $blogrow) {
					  $categoryName = '';
					  $jsonecategories = json_decode($blogrow->blog_category);
					// ob_start();
					foreach($categories as $blogCategories) {
					
						foreach($jsonecategories as $cid) {
					
							if($cid == $blogCategories->id) {
					 			$categoryName .= $blogCategories->category_name.',&nbsp;';
						}
					
					}
					
				}
			?>
              <tr>
                <td><?php echo $blogrow->blog_title;?></td>
                <td><?php echo $blogrow->author;?></td>
                <td><?php echo $categoryName;?></td>
                <td>—</td>
                <td><?php echo $blogrow->created_date;?></td>
                 <td><a href="" class="text-primary">Edit</a>&nbsp;|&nbsp;<a href="" class="text-danger">Delete</a>&nbsp;|&nbsp;<a href="" class="text-success">Active</a></td>
              </tr>
               <?php }}?>
            </tbody>
          </table>
        </div>
      </div>
      <!-- panel-body --> 
    </div>
    <!-- panel --> 
    
  </div>
  <!-- col-md-6 --> 
  
</div>
<!--row -->

<?php $this->load->view('admin/head/footer');?>
