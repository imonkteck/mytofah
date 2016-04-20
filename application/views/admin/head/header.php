<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!--<link rel="shortcut icon" href="../images/favicon.png" type="image/png">-->

<title>
<?php if(isset($pagetitle)){ echo $pagetitle;}?>
</title>
<link rel="stylesheet" href="<?php echo base_url();?>ui/lib/fontawesome/css/font-awesome.css">
<!--WYSIWYG Editor css included-->
 <link rel="stylesheet" href="<?php echo base_url();?>ui/lib/summernote/summernote.css">
 <link rel="stylesheet" href="<?php echo base_url();?>ui/lib/bootstrap3-wysihtml5-bower/bootstrap3-wysihtml5.css">

<link rel="stylesheet" href="<?php echo base_url();?>ui/css/quirk.css">
<link rel="stylesheet" href="<?php echo base_url();?>ui/lib/Hover/hover.css">
<link rel="stylesheet" href="<?php echo base_url();?>ui/lib/weather-icons/css/weather-icons.css">
<link rel="stylesheet" href="<?php echo base_url();?>ui/lib/ionicons/css/ionicons.css">
<link rel="stylesheet" href="<?php echo base_url();?>ui/lib/jquery-toggles/toggles-full.css">
<link rel="stylesheet" href="<?php echo base_url();?>ui/lib/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css">
<link rel="stylesheet" href="<?php echo base_url();?>ui/lib/select2/select2.css">
<link rel="stylesheet" href="<?php echo base_url();?>ui/lib/morrisjs/morris.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<script src="<?php echo base_url();?>ui/lib/modernizr/modernizr.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url();?>ui/validation/validate.js"></script>
<?php /*?><script src="<?php echo base_url();?>ui/validation/jquery.validate.js"></script><?php */?>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="../lib/html5shiv/html5shiv.js"></script>
  <script src="../lib/respond/respond.src.js"></script>
  <![endif]-->
</head>
