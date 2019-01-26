<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css';?>">

	<!--Bootstrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!--JQuery-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="<?php echo base_url().'assets/js/detail.js'?>"></script>
</head>
<body>
	<?php $item = $eventdata[0];?>
	<!--Event Title-->
	<div class="event-title">
		<h2 class="event-name"><?php echo $item->title?></h2>
			<div class="row">
				<img class="event-logo rounded-circle ml-3" src="<?php echo base_url().'assets/img/paramabudaya-logo.jpg' ?>" alt="">
				<h5 class="event-creator pt-1 pl-2"><?php echo $item->subtitle ?></h5>
			</div>
	</div>

	<!--Event Overview-->
	<div class="row justify-content-center mt-4">
		<div class="col-md-6">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="d-block w-100" src="<?php echo base_url().'assets/img/eventimage.png' ?>" alt="First slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="<?php echo base_url().'assets/img/image.png' ?>" alt="Second slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="<?php echo base_url().'assets/img/poster1.png'?>" alt="Third slide">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
		
		<!--Event summary card-->
		<div class="col-md-4 card-summary">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title"><b>Rp <?php echo $item->terkumpul?></b></h4>
					<h3 class="card-subtitle text-muted pb-3 mb-3 card-event-subtitle">
						terkumpul dari target <b>Rp <?php echo $item->target?></b>
					</h3>
					<h6 class="mt-3 mb-4"><b>Sebarkan danus event ini</b></h6>
					<a href="<?php echo $item->linkfb ?>" class="card-link">
						<img src="<?php echo base_url().'assets/img/facebook2.png' ?>" alt="facebook-share" style="width: 50px;height: 50px">
					</a>
					<a href="<?php echo $item->linkig ?>" class="card-link">
						<img src="<?php echo base_url().'assets/img/instagram2.png'?>"   alt="instagram-share" style="width: 50px;height: 50px">
					</a>
					<a href="<?php echo $item->linktwitter ?>" class="card-link">
						<img src="<?php echo base_url().'assets/img/twitter2.png'?>" alt="twitter-share" style="width: 50px;height: 50px">
					</a>
				</div>
			</div>

			<a class="btn btn-lg btn-help-danus mt-4 w-100" href="<?php echo site_url('Bayar_C') ?>">BANTU DANUS</a>
		</div>
	</div>
 
 	<!--Details of Event-->
	<!--Navigations-->
	<ul class="nav justify-content-center nav-details my-5">
		<li class="nav-item">
			<a href="#detailContent" class="nav-link nav-details-link">Detail</a>
		</li>
		<li class="nav-item">
			<a href="#updateContent" class="nav-link nav-details-link">Update</a>
		</li>
	</ul>	

	<div class="row justify-content-center">
		<div class="col-md-7 content">
			
			<!--Content of Detail's Page--> 
			<div class="detail-content py-5 px-5 mb-4 rounded" id="detailContent">
				<h1 class="mb-2">About</h1>
				<p class=" text-justify mb-2"><?php echo $item->about ?></p>
				<h1 class="mb-2">Date & Time</h1>
				<a><?php echo $item->date?><br></a>
				<a class="mb-3"><?php echo $item->time?></a>
				<h1 class="mb-2">Location</h1>
				<a><?php echo nl2br($item->location) ?></a>
			</div>

			<!--Content of Update's Page-->				
			<div id="updateContent">
				<?php foreach($eventupdate as $data):?>
					
				<div class="card update-content mx-auto col-md-10 my-4">
					<div class="card-header update-card-header">
						<div class="row">
							<img src="<?php echo base_url().'assets/img/paramabudaya-logo.jpg'?>" class="update-event-logo rounded-circle mx-2" alt="">
							<div>
								<a class="update-event-name"><?php echo $item->title ?> <br></a>
								<a class="update-event-creator text-muted"><?php echo $item->subtitle ?></a>
							</div>
						</div>	
					</div>
					<img class="card-img-top img mb-2 h-25" src="<?php echo base_url().$data->imageurl?>" alt="">
					<div class="row ml-3">
						<a href="#"><img src="<?php echo base_url().'assets/img/heart-shape-outline.svg'?>" class="update-icon mr-2" alt="Heart button"></a>
						<a href="#"><img src="<?php echo base_url().'assets/img/share-symbol.svg'?>" class="update-icon"  alt="Share button"></a>
					</div>
					<p class="update-card-like card-text ml-3 my-2"><?php echo $data->like ?> liked</p>
					<p class="card-text mx-3 mb-2"><?php echo $data->caption ?></p>
					<p class="card-text ml-3 pb-3 update-card-time"><small class="text-muted"><?php echo $data->updatedate ?></small></p>
				</div>

				<?php endforeach; ?>
			</div>                  	                                  

			<a class="btn btn-lg btn-help-danus w-100 mt-3" href="<?php echo site_url('Bayar_C') ?>">BANTU DANUS</a>
		</div>
	</div>
	<!--Detail Page-->

</body>
</html>