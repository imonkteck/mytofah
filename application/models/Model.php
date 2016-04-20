<?php
/*
// this is the model section for
// the whole site which is  
// used to intract with the database
// all the section will use this model to intract with the database
*/

class Model extends CI_model

{
	
	
	 function __construct()
    {
        parent::__construct();
		$this->load->library( array('session') );
    }
	
	
	function get_data($table,$field) {
			
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($field);
		$query=$this->db->get();
		return $query->result();
	} 
	
	function get_row($table,$field) {
		
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($field);
		$query=$this->db->get();
		return $query->row();
	} 
	
	
	function insert_data($table,$data) {
		
		$sql=$this->db->insert_string($table,$data);
		$this->db->query($sql);
		$last_id = $this->db->insert_id();	
		return $last_id;
		
	}
	
	function deletedata($table,$where) {
		
		$result=$this->db->delete($table,$where); 
		return $result;
	}
	
	
	function getfield_name($table,$fid,$pid) {
		
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($fid,$pid);
		$query=$this->db->get();
		return $query->row();
		
	}
	function getfield_array($table,$fid,$pid) {
		
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($fid,$pid);
		$query=$this->db->get();
		return $query->result();
		
	}
	
	
	function update($table,$data,$where) {
		
		$this->db->where($where);
		$result = $this->db->update($table,$data);
		return $result;	
		
    }
	
	function update_data($table,$data,$specificid,$currentid) {
		
		$this->db->where($specificid, $currentid);
		$this->db->update($table, $data); 
	}
	

	function check_data($table,$pid,$fid) {

		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($pid,$fid);
		$query=$this->db->get();
		return $query->result();
	} 

	
	function join_data($maintable,$join1table,$join2table,$mainid1,$mainid2,$join1id,$join2id,$whr) {

		$this->db->select('*');
		$this->db->from($maintable);
		$this->db->join($join1table, $join1table.'.'.$join1id. '=' .$maintable.'.'.$mainid1);
		$this->db->join($join2table, $join2table.'.'.$join2id. '=' .$maintable.'.'.$mainid2);
		$this->db->where($maintable.'.'.$whr, 1);
		$query = $this->db->get();
		return $query->result();
		
		
	}
	
	

	function get_distinct($table,$status,$check,$column) {
	
		$this->db->distinct();
		$this->db->select($column);
		$this->db->from($table);
		$this->db->where($status,$check); 
		$query = $this->db->get();
		return $query->row();
	}
	
	function getcheck_emaillogin($where)
       {
               $email='"'.$where.'"';
               $sql = 'SELECT  *  FROM user_registration_table where username ='.$email.' or email='.$email.'';
                $query = $this->db->query($sql);
                return $query->row();
       }
       function getcheck_passlogin($where1,$where2)
       {
               $email='"'.$where1.'"';
               $pass='"'.$where2.'"';
               $sql = 'SELECT  *  FROM user_registration_table where password='.$pass.' and (username ='.$email.' or email='.$email.') ';
               $query = $this->db->query($sql);
               return $query->row();
       }
	   
	   function get_login_data($where1,$where2)
       {
        $email='"'.$where1.'"';
		$pass='"'.$where2.'"';
        $one=1;
        $sql = 'SELECT  *  FROM user_registration_table where verification_status='.$one.' and (username ='.$email.' or email='.$email.') and password = '.$pass.' ';
                 $query = $this->db->query($sql);
                 return $query->row();
       }
	
	
}


?>
