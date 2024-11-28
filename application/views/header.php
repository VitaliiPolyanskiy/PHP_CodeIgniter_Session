<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Валидация</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />

</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
	     <li>
		      <a href="<?php echo site_url('home/index'); ?>">Создать сессионные переменные</a>
	     </li>
		  <li>
		      <a href="<?php echo site_url('home/DestroySessionVariable'); ?>">Удалить сессионную переменную</a>
	     </li>
		  <li>
		      <a href="<?php echo site_url('home/DestroySession'); ?>">Удалить сессию</a>
	     </li>
      </ul>
    </div>
  </div>
</nav>	
