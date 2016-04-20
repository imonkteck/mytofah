<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
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
	    $this->load->library('email');
	    
	}

		
	public function index() // Maps to the login controller default method 
	{
		$data['pagetitle']='Wedding Registry | MyTofah.com';
		$data['segment'] = $this->uri->segment(2);
		if(isset($_REQUEST['submit'])){
    		$insert['username'] = $this->input->post('username');
    		$insert['first_name'] = $this->input->post('firstname');
    		$insert['last_name'] = $this->input->post('lastname');
    		$insert['email'] = $this->input->post('emailid');
    		$insert['password'] = $this->input->post('password');
            $this->db->insert('user_registration_table',$insert);
			$id = $this->db->insert_id();
			if(isset($id)){
			  $res = $this->sendingMail($this->input->post('emailid'),$id);
			  if($res == 1){
			    redirect(base_url());
			  }
			}
            
    	}
		
		$this->load->view('front/head/header',$data);
		$this->load->view('front/home',$data);
		$this->load->view('front/head/footer',$data);
	}
     
    public function signup(){
    	if(isset($_REQUEST['submit'])){
    		$insert['username'] = $this->input->post('username');
    		$insert['first_name'] = $this->input->post('firstname');
    		$insert['last_name'] = $this->input->post('lastname');
    		$insert['email'] = $this->input->post('emailid');
    		$insert['password'] = $this->input->post('password');
            $this->db->insert('user_registration_table',$insert);
			$id = $this->db->insert_id();
			if(isset($id)){
			  $res = $this->sendingMail($this->input->post('emailid'),$id);
			  if($res == 1){
			    redirect(base_url());
			  }
			}
            
    	}
    }

    public function logincheck(){
    	if(isset($_REQUEST['Login'])){
    	  $where = array('email'=>$_REQUEST['Email'],'password'=>$_REQUEST['Pass']);
    	  $row =  $this->model->get_row('Login',$where);
    	  if(count($row)>0){
    	  	echo 1;
    	  }else{
    	  	echo 0;
    	  }
    	}
    }	
	
	public function verification_link(){
	    $data['pagetitle']='Wedding Registry | MyTofah.com';
	    $data['segment'] = $this->uri->segment(1);
		$userid = $this->uri->segment(2);
		$key = 'asdfa$%#@dfasfasf^%$';
		$useridnew =  str_replace(array('-'), array('/'),$userid);
		$decid = $this->decryptId($useridnew,$key);
		$this->model->update('user_registration_table',array('verification_status'=>1),array('pk_user_id'=>$decid));
		//$this->load->view('front/head/header',$data);
		$this->load->view('front/verification_link',$data);
		//$this->load->view('front/head/footer',$data);
	}
	
    function decryptId($string,$key)
	{
	    $result = "";
        $string = base64_decode($string);
        $end_length = intval(substr($string, -1, 1));
        $string = substr($string, 0, -1);
        $salt_length = intval(substr($string, $end_length*-1, $end_length));
        $string = substr($string, 0, $end_length*-1+$salt_length*-1);
        for($i=0; $i<strlen($string); $i++){
                $char = substr($string, $i, 1);
                $keychar = substr($key, ($i % strlen($key))-1, 1);
                $char = chr(ord($char)-ord($keychar));
                $result.=$char;
        }
		return $result;	
	}
	
	function sendingMail($emailid,$id)
	{
		 $config = Array(
                      'protocol' => 'smtp',
                      'smtp_host' => 'ssl://smtp.googlemail.com',
                      'smtp_port' => 465,
                      'smtp_user' => 'adisoft.testing@gmail.com',
                      'smtp_pass' => 'adisoftindore',
                      'mailtype' => 'html',
                      'charset' => 'utf-8',
                      'wordwrap' => TRUE
                      );
					//$revid = strrev($id);  
					$key = 'asdfa$%#@dfasfasf^%$';
					$idReturn = $this->encryptionId($id,$key);
					$link = base_url().'verification_link/'.$idReturn;  
					  
				    $this->email->initialize($config);
				    $ccmailid = 'adisoft.testing@gmail.com';
   				
                   $this->email->set_newline("\r\n");
                   $this->email->from('adisoft.testing@gmail.com');
                   $this->email->to($emailid);
				  // $this->email->cc($ccmailid);
                   $this->email->subject('Testing');
                   $this->email->message($link);
				   if($this->email->send())
				   {
					   return 1; 
				   }
				   else
				   {
					  return 0; 
				   }
                   $data['msg']=$this->email->print_debugger();
				   print_r($data['msg']);
				  
	}	
	
	 function encryptionId($string,$key)
	{
	   
	    $result = "";
        for($i=0; $i<strlen($string); $i++){
                $char = substr($string, $i, 1);
                $keychar = substr($key, ($i % strlen($key))-1, 1);
                $char = chr(ord($char)+ord($keychar));
                $result.=$char;
        }
	  
        $salt_string = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxys0123456789~!@$^&()_`-={}|:<>?[]\;',";
		$length = rand(1, 15);
        $salt = "";
        for($i=0; $i<=$length; $i++){
                $salt .= substr($salt_string, rand(0, strlen($salt_string)), 1);
        }
        $salt_length = strlen($salt);
        $end_length = strlen(strval($salt_length));
		return str_replace(array('/'), array('-'), base64_encode($result.$salt.$salt_length.$end_length));
        //return  base64_encode($result.$salt.$salt_length.$end_length);	
	}
	
		
}
