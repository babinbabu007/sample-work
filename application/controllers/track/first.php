<?php
class First extends CI_controller
{
public function index()
{
	
	 $this->load->view('first/login');
}
public function logincheck()
{
$username = $this->input->post('user');
$password = $this->input->post('password');	
$this->projecttrack->fetch_user_data($username,$password);
if(isset($data))
{
	$this->load->view('first/login');
}
else
{
	
}
}
public function submit_data()
{
$username=$this->input->post('username');
$password=$this->input->post('password');
$cpassword=$this->input->post('password1');
$name=$this->input->post('uname');
$email=$this->input->post('email');
$this->projecttrack->save_user_data($username,$password,$name,$email);
}
}
?>