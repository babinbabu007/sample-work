<?php
class First extends CI_controller
{
	public function index()
	{	
		
		 $this->load->view('first/login');
		 
	}
	public function logincheck()
	{
		$message=array();
		$username = $this->input->post('user');
		$password = $this->input->post('password');	
		$message['msg']=$this->projecttrack->fetch_user_data($username,$password);

		if($message['msg']==1)
		{	
			if($this->session->userdata['logindetails']['type']=='admin')
			{
			$data['query_result']=$this->projecttrack->getdata();
			$this->load->view('first/admin',$data);
			}
			else
			{
				$this->load->view('first/usertask');
			}

		}
		else 
		{
			$this->load->view('first/login',$message);
		}
	}
	public function signUp()
	{	
	 	 $this->load->view('first/header');
		 $this->load->view('first/userpage');
		 $this->load->view('first/footer');
	}

	public function submit_data()
	{
		$data =array();
		$data1=array();
		$data['username']=$this->input->post('username');
		$data['password']=$this->input->post('password');
		$data['type']="user";
		$data1['track_name']=$this->input->post('uname');
		$data1['track_email']=$this->input->post('email');

		$this->load->model('projecttrack');
		$result['message']= $this->projecttrack->save_user_data($data,$data1);

		$this->load->view('first/userpage',$result);
	}
	public function assignwork()
	{
		$data=array();
		$data['project_name']=$this->input->post('pname');
		$data['project_asigned']=$this->input->post('candidate');
		$data['project_sdate']=$this->input->post('sdate');
		$data['project_edate']=$this->input->post('edate');
		$result['message']=$this->projecttrack->asign($data);
		$this->load->view('first/admin',$result);

	}
}
?>