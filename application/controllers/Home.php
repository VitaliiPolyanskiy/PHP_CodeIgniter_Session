<?php

class Home extends CI_Controller 
{
   public function __construct()
  {
		parent::__construct();
		$this->load->library('session');
  }

  function index()
  {
	  $this->session->set_userdata('test', 'Сессионная переменная создана');
	  $data = array('username' => 'Иван', 'admin' => 'Администратор');
	  $this->session->set_userdata($data);
	  $this->ReadSessionVariable();
  }
  
  function ReadSessionVariable()
  {	
	$data['session_id'] = session_id();
	if($this->session->has_userdata('test'))
	{
		$data['test'] = $this->session->userdata('test');
	}
	if($this->session->has_userdata('username'))
	{
		$data['username'] = $this->session->userdata('username');
	}
	if($this->session->has_userdata('admin'))
	{
		$data['admin'] = $this->session->userdata('admin');
	}
	$this->load->view('Read_Session_variable', $data);
  }
  
  function DestroySessionVariable()
  {
	  $this->session->unset_userdata('test');
	  echo "<script>";
	  echo "window.location='ReadSessionVariable'";
	  echo "</script>";
  }
  
  function DestroySession()
  {
	  $this->session->sess_destroy();
	  $this->load->view('Read_Session_variable');
  }
}
?>
