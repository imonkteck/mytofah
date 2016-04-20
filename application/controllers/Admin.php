<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() 
	{
		
		 parent::__construct();
		 $this->load->model('model');
		 $this->load->library('session');
		 $this->load->library('form_validation');

		 $info=$this->session->all_userdata();
		 $data['userinfo']=$info;
	    
		if(isset($info['siterole_id']))
		{
			if($info['siterole_id']!=1)
			{
				redirect(base_url()."login/index");
			}
			
		}
		if(isset($data['userinfo']['user_id'])=='')
		{
			redirect(base_url()."login/index");
		}
		
		
		
	}

	public function home() 
	{
		
		$data['pagetitle']= "Admin Dashboard";
		$data['segment']= $this->uri->segment(2); // segment
		$this->load->view('admin/home',$data);
	}
	
	 function blog() 
	 {
		 
		$data['pagetitle'] = "Admin | Blogs Managment";
		$data['basesegment'] = $this->uri->segment(2);
		$data['segment'] = $this->uri->segment(3); // segment
		$data['categories'] = $this->model->get_data('blog_category',array('status' => 1));
		$data['blogs'] = $this->model->get_data('blogs',array('status' => 1));
		
		if($data['segment'] == 'category') {
		
		
		if($this->form_validation->run('addblogcategory') == FALSE) {
		
			$this->load->view('admin/blog/addcategory',$data);
		
		} else {
		
			$blogCategory['category_name'] = $this->input->post('category_name');
			$blogCategory['category_slug'] = $this->input->post('category_slug');
			//Insert into blog category table
			$inserted = $this->model->insert_data('blog_category',$blogCategory);
			redirect('/admin/blog/category');
		
		}
		
		
		} else if($data['segment'] == 'add') {
			
			
		   if($this->form_validation->run('addblog') == FALSE) {
		
			$this->load->view('admin/blog/addblog',$data);
		
		} else {
		
		
			$blogs['blog_title'] = $this->input->post('blog_title');
			$blogs['blog_description'] = $this->input->post('blog_content');
			$blogs['blog_category'] = json_encode($this->input->post('blog_category'));
			$blogs['author'] = $this->input->post('blog_author');
			//Insert into blog category table
			$inserted = $this->model->insert_data('blogs',$blogs);
			redirect('/admin/blog/index');
		
		}
		
			
		
		} else {
		
			$this->load->view('admin/blog/blogs',$data);
		
		}
	}
	 function cms() 
	 {
		 
		$data['pagetitle']= "Admin | CMS Managment";
		$data['basesegment']= $this->uri->segment(2);
		$data['segment']= $this->uri->segment(3); // segment
		
		
		if($data['segment'] == 'aboutUs') {
		
		$data['aboutUsContent'] = $this->model->get_row('about_us',array('status' => 1));	
		
		if($this->form_validation->run('aboutUs') == FALSE) {
		
			$this->load->view('admin/cms/aboutUs',$data);
		
		} else {
		
			$cmspage['title'] = $this->input->post('title');
			$cmspage['content'] = $this->input->post('content');
			$inserted = $this->model->update_data('about_us', $cmspage, 'id', 1);
			redirect('/admin/cms/aboutUs');
		
		}
		
		
		
		} else if($data['segment'] == 'contactUs') {
		 
		 $data['contactUsContent'] = $this->model->get_row('contact_us',array('status' => 1));	
			
		 if($this->form_validation->run('contactUs') == FALSE) {
		
				$this->load->view('admin/cms/contactUs',$data);
		
		  } else {
		
			$cmspage['title'] = $this->input->post('title');
			$cmspage['address'] = $this->input->post('address');
			$cmspage['phone'] = $this->input->post('phone');
			$cmspage['email'] = $this->input->post('email');
			$cmspage['content'] = $this->input->post('content');
			
			$inserted = $this->model->update_data('contact_us', $cmspage, 'id', 1);
			redirect('/admin/cms/contactUs');
		
		}
		
		
		
	} 
		
		
	}
	
	 
	
 }
