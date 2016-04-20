<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://localhost/mytofah/index.php/user
	        
	 *	- or -
	 * 		http://localhost/mytofah/index.php/user/index
	      
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://localhost/mytofah/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/login/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()// no spaces around parenthesis in function declarations 
	{
		parent::__construct();
		$this->load->library('session');
		$info=$this->session->all_userdata();
		
		$this->load->model('model');
		if(isset($info['user_id'])=='')
		{
			redirect(base_url());
		}
	}

		
	public function index() // Maps to the login controller default method 
	{
		$info=$this->session->all_userdata();
		$data['pagetitle']='Wedding Registry | MyTofah.com';
		$data['segment'] = $this->uri->segment(2);
		
		if($info['login_times'] == 0){
		  $this->load->view('user/head/header',$data);
		  $this->load->view('user/wedding_registry',$data);
		  $this->load->view('user/head/footer',$data);
		}else{
		  $this->load->view('user/dashboardheader',$data);
		  $this->load->view('user/dashboard',$data);
		  $this->load->view('user/dashboardfooter',$data);
		}
		
		
	}
     
    public function logout(){
	  $info=$this->session->all_userdata();
	  $this->session->sess_destroy();
	  redirect(base_url());
	}
     	
	
}
