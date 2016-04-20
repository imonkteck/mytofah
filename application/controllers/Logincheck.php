<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Logincheck extends CI_Controller {
	
	
      function __construct ()
      {
		  parent::__construct();
		  $this->load->library('session');
		  $this->load->model('model');
      }	


     function adminlogin()
	 {
		 $error="";
		 $siterole="";
		 if(isset($_REQUEST['useremail']))
		 {
			 $useremail=$_REQUEST['useremail'];
			 $password=$_REQUEST['password'];
			 
			 $data=array('useremail'=>$useremail,'password'=>$password,'status'=>1);
			 
			 $data['login']=$this->model->get_data('login',$data);
			 if(count($data['login'])!=0)
			 {
				 $userid=$data['login'][0]->id;
				 $siterole=$data['login'][0]->siterole_id;
				
				$logininfo= array('session_id'=>session_id(),'useremail'=>$useremail,'user_id'=>$userid,'siterole_id'=>$siterole,'logged_in'=>TRUE);
				
				$this->session->set_userdata($logininfo);
				
				$info = $this->session->all_userdata();
				
				$data=array('session_id'=>$info['session_id'],'ip_address'=>$_SERVER['REMOTE_ADDR'],
				'user_agent'=>$this->input->user_agent(),'last_activity'=>$info['__ci_last_regenerate'],'user_id'=>$info['user_id'],'siterole_id'=>$info['siterole_id']);
				
				$data['session']=$this->model->insert_data('usersessiontable',$data);
				$error='';
			 }
			 else
			 {
				 $error="The email address and password you entered do not match.";
			 }
			 
		 }
		 
		 $arr=array('a'=>$error,'b'=>$siterole);
		 
		 print_r(json_encode($arr));
		 
	 }
	
	
}



/* End of file Logincheck.php */
/* Location: ./application/controllers/Login.php */