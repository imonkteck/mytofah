<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {
	
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
	   
	    
	}
	function checkvalid_username()
	{
		$user_name= $this->model->get_row('user_registration_table',array('username'=>$_REQUEST['name']));
		if(!empty($user_name))
		{
			echo 1;
		}
		else 
		{
			echo 0;
		}
		
	}
	
	function checkvalid_email()
	{
		$email= $this->model->get_row('user_registration_table',array('email'=>$_REQUEST['email']));
		if(!empty($email))
		{
			echo 1;
		}
		else 
		{
			echo 0;
		}
		
	}

 function login_email()
 {
	$email= $this->model->getcheck_emaillogin($_REQUEST['email']);
		if(!empty($email))
		{
			echo 1;
		}
		else 
		{
			echo 0;
		}
 }

 function login_pass()
 {
	$email= $this->model->getcheck_passlogin($_REQUEST['email'],$_REQUEST['pass']);
	
		if(!empty($email))
		{
			echo 1;
		}
		else 
		{
			echo 0;
		}
  }
  

  
  
  function logincheck()
{
     $error="";
         
         if(isset($_REQUEST['Email']))
         {
             $useremail=$_REQUEST['Email'];
			 $pass=$_REQUEST['Pass'];
             $data['login']=$this->model->get_login_data($useremail,$pass);
             if(count($data['login'])!=0)
             {
                 $userid=$data['login']->pk_user_id;
                
                
                $logininfo= array('session_id'=>session_id(),'useremail'=>$useremail,'user_id'=>$userid,'logged_in'=>TRUE,'login_times'=>$data['login']->no_of_times,'Item'=>'');
                
                $this->session->set_userdata($logininfo);
                
                $info = $this->session->all_userdata();
                
                /*$data=array('session_id'=>$info['session_id'],'ip_address'=>$_SERVER['REMOTE_ADDR'],
                'user_agent'=>$this->input->user_agent(),'last_activity'=>$info['__ci_last_regenerate'],'user_id'=>$info['user_id'],'siterole_id'=>$info['siterole_id']);
                
                $data['session']=$this->model->insert_data('usersessiontable',$data);*/
                $error='';
                echo "1";
                
             }
             else
             {
                 echo 0;
             }
             
         }
         
        
}

public function item_info(){
   if(isset($_REQUEST['itemset']))
       {
               $info=$this->session->all_userdata();
			   $count = $info['count'];
			   $i=1;
			   if($info['Item'] !=''){
			   foreach($info['Item'] as $item){
			    
		          $iteminfo[$i]['itemname']=$item['itemname'];
                  $iteminfo[$i]['cost']=$item['cost'];
                  $iteminfo[$i]['weburl']=$item['weburl'];
                  $iteminfo[$i]['item_specification']=$item['item_specification'];
				  $i++;
		       }
			  }
			   $count++;
			   $iteminfo[$count]['itemname']=$_REQUEST['itemname'];
               $iteminfo[$count]['cost']=$_REQUEST['cost'];
               $iteminfo[$count]['weburl']=$_REQUEST['weburl'];
               $iteminfo[$count]['item_specification']=$_REQUEST['item_specification'];
			   $item = array('Item'=>$iteminfo,'count'=> $count);
               $this->session->set_userdata($item);
			   $info=$this->session->all_userdata();
			   echo 1;
			   
       }
}

function personal_info()
{
       if(isset($_REQUEST['name']))
       {
               $personalinfo['your_name']=$_REQUEST['name'];
               $personalinfo['spouse_name']=$_REQUEST['spouse_name'];
               $personalinfo['wedding_date']=$_REQUEST['wedding_date'];
               $personalinfo['email']=$_REQUEST['email'];
               $personalinfo['venue']=$_REQUEST['venue'];
               $personalinfo['phone']=$_REQUEST['contact_no'];
               $personalinfo['couple_summary']=$_REQUEST['summary'];
			   $personalinfo['days']=$_REQUEST['days'];
			   $personalinfo['count'] = 0;
			   $personalinfo['Item'] = '';
               $this->session->set_userdata($personalinfo);
			   $info=$this->session->all_userdata();
			 
       }
}	

 function insert_registrydata()
    {
        if(isset($_REQUEST['regitration']))
        {
            $info=$this->session->all_userdata();
            
                  $insert['your_name']=$info['your_name'];
                  $insert['spouse_name']=$info['spouse_name'];
                  $insert['wedding_date']=date('Y-m-d',strtotime($info['wedding_date']));
                  $insert['venue']=$info['venue'];
                  $insert['email']=$info['email'];    
                  $insert['phone']=$info['phone'];    
                  $insert['couple_summary']=$info['couple_summary'];
                  $insert['fk_user_id']=$info['user_id'];
                  $insert['no_of_days']=$info['days'];
                  $this->db->insert('wedding_page_table',$insert);
                  $pageid=$this->db->insert_id();
             if($info['Item'] !=''){
               foreach($info['Item'] as $item)
               {
                
                  $insertitem['item_name']=$item['itemname'];
                  $insertitem['approx_cost']=$item['cost'];
                  $insertitem['web_url']=$item['weburl'];
                  $insertitem['item_specification']=$item['item_specification'];
                  $insertitem['fk_user_id']=$info['user_id'];
                  $insertitem['fk_wedding_page_id']=$pageid;    
                  $this->db->insert('wishlist_item_table',$insertitem);
               }
             }
                  $Newinfo = array('login_times'=>1);
				  $this->session->set_userdata($Newinfo);
                  $update['no_of_times']=1;
                  $this->model->update('user_registration_table',$update,array('pk_user_id'=>$info['user_id']));
				  echo 1;
             
        }
    }
     	

}