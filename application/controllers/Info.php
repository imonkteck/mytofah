<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {
	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://localhost/mytofah/index.php/info
	
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
	
	 function about() // Maps to the info controller default method 
	{
		$data['pagetitle']='About Us | MyTofah.com';
		$data['segment'] = $this->uri->segment(2);
		$this->load->view('user/about_us',$data);
	}
	
	 function howitwork() // Maps to the info controller default method 
	{
		$data['pagetitle']='How It Works | MyTofah.com';
		$data['segment'] = $this->uri->segment(2);
		$this->load->view('user/how_it_work',$data);
	}
	
	 function news() // Maps to the info controller default method 
	{
		$data['pagetitle']='New & Updates | MyTofah.com';
		$data['segment'] = $this->uri->segment(2);
		$this->load->view('user/new_updates',$data);
	}
	
	function contactus() // Maps to the info controller default method 
	{
		$data['pagetitle']='Contact Us | MyTofah.com';
		$data['segment'] = $this->uri->segment(2);
		$this->load->view('user/contact_us',$data);
	}
	
	
}
