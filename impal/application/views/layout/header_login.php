<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() ?>assets/jquery/jquery-3.3.1.min.js" rel="stylesheet" type="text/css"/>
</head>
<body>
<!-- Image and text -->
<form style="margin-bottom: 15px;" action="<?php echo base_url() ?>index.php/login/logout">
	<nav class="navbar navbar-light bg-light">
	  <a class="navbar-brand" href="#">
	    <img src="/docs/4.1/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
	    Sistem Percetakan
	  </a>
	  <div>
	  	<?php
        	echo $_SESSION['sess_name'];
        ?>
	  	<button type="submit" class="btn btn-secondary">Logout</button>
	  </div>
	</nav>
</form>
