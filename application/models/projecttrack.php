<?php 
class Projecttrack extends CI_model
{
	function fetch_user_data($username,$password)
	{

		$query = $this->db->query('SELECT * from `track_user` where username="'.$username.'" and password="'.$password.'"');
		$queryResult=$query->result_array();
		if($query->num_rows()==1)
		{
		$query1=$this->db->query('select track_name from track_user_data where loginid="'.$queryResult[0]['id'].'"');
		 $queryResult1=$query1->result_array();
		 $sess_array = array(
         'userid' => $queryResult[0]['id'],
         'type'=>$queryResult[0]['type'],
         'name'=> $queryResult1[0]['track_name']
      	 );
       		$this->session->set_userdata('logindetails', $sess_array);
       		$message=1;
       		

		}
		else
		{
			$message=0;
			
		}

		return $message;

	}

	public function save_user_data($data,$data1)
	{
		$query = $this->db->insert('track_user',$data);
		$data1['loginid']=$this->db->insert_id();
		$query1 = $this->db->insert('track_user_data',$data1);
		$num = $this->db->affected_rows($query);
		$num1 = $this->db->affected_rows($query1);
		if($num == 1 && $num1 == 1){
			$message = "Successfully Inserted.";
		}else{
			$message = "Error Occurred";
		}
		return $message;
	}
	public function asign($data)
	{
		$query = $this->db->insert('track_project',$data);
		$num = $this->db->affected_rows($query);
		if($num == 1 && $num1 == 1){
			$message = "Successfully Assigned.";
		}else{
			$message = "Error Occurred";
		}
		return $message;
	}

public function getdata()
	{
		$data=array();
		$query=$this->db->query('select track_name,loginid from track_user_data');
		$data = $query->result_array();
		return $data;
	}
}
?>
