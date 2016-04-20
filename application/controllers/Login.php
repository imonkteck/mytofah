<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://localhost/mytofah/index.php/login
	        
	 *	- or -
	 * 		http://localhost/mytofah/index.php/login/index
	      
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
	    //print_r($info);
	    
	}
	
	public function index() // Maps to the login controller default method 
	{
		$data['pagetitle']='Admin Login';
		$this->load->view('admin/userlogin',$data);
	}
	
	function logout() // Maps to the Admin logout URL: 
	{
		$info=$this->session->all_userdata();
		$where=array('session_id'=>$info['session_id'],'user_id'=>$info['user_id']);
		$data['desrecord']= $this->model->deletedata('usersessiontable',$where);
		$this->session->sess_destroy();
		redirect(base_url().'Login');
		
	}
}
