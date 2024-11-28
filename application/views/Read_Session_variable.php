<?php
$this->load->view('header');

if(isset($session_id))
	echo "Идентификатор сессии: ".$session_id.'<br>';
else
	echo "Сессия не создана";
if(isset($test))
{
	echo $test.'<br>';
}
if(isset($username))
{
	echo $username.'<br>';
}
if(isset($admin))
{
	echo $admin.'<br>';
}

$this->load->view('footer');
?>