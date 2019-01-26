<!DOCTYPE html>
<html>
<head>
	<title>danusKuy</title>
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

	<!--Open Iconic-->
	<link rel="stylesheet" href="<?php echo base_url().'assets/open-iconic-master/font/css/open-iconic-bootstrap.css';?>">
	
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css?time()';?>">

	<!--Bootstrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!--JQuery-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!--Bootstrap JS-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	

</head>
<body>

	<!--Header!-->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top header-navbar">
		<a class="navbar-brand" href="<?php echo site_url('Home_C')?>"><img src="<?php echo base_url().'assets/img/logowhite.png';?>	" alt="danusyuk"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto ml-2">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>Tipe event</b></a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Event</a>
						<a class="dropdown-item" href=#"">Seminar</a>
					</div>
				</li>
			</ul>
			<form class="form-inline w-75 col-md-8">
				<input class="nav-search-input form-control w-75" type="search" placeholder="Cari Event..." aria-label="Search">
				<button class="btn nav-search-btn" type="submit"><span class="oi oi-magnifying-glass" title="magnifying glass" aria-hidden="true"></span></button>
			</form>
			<div class="dropdown mr-2">

				
				<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black"><img src="<?php echo base_url().'assets/img/calendar.png'?>" style="width: 30px;height: 30px"></a>


				<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					<?php if($this->session->has_userdata('user_id')){ ?>
					<a class="dropdown-item" href="<?php echo site_url('CreateEvent_C') ?>">Tambahkan Event</a>
					<a class="dropdown-item" href="<?php echo site_url('EditEvent_C') ?>">Edit Event</a>
					<?php }else{ ?>
					<a class="dropdown-item" href="<?php echo site_url('User') ?>">Tambahkan Event</a>
					<?php } ?>
				    
				</div>
			</div>
			<div class="btn-group" role="group" aria-label="Basic example">
				
				<?php if($this->session->has_userdata('user_id')){ ?>
					<a role="button" class="btn btn-login btn-link nav-btn mx-2" href="<?php echo site_url('User')?>">Logout</a>
				<?php }else{ ?>
					<a role="button" class="btn btn-login btn-link nav-btn mx-2" href="<?php echo site_url('User')?>">Login</a>
					<a class="btn btn-daftar btn-outline-primary rounded mr-4" href="<?php echo site_url('Regis_C')?>">Daftar</a>
				<?php } ?>
				
			</div>
		</div>
	</nav>
	
	<!--Bootstrap JS-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<!--JQuery-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>