<!DOCTYPE html>
<html>
<head>
	<title>danusKuy</title>
	
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css'?>">

	<!--Bootstrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/magnific-popup/dist/magnific-popup.css'; ?>">

</head>
<body>
	
	<!--Large Header Image!-->
	<div class="container-img">
		<img src="<?php echo base_url().'assets/img/homedanus.jpg'?>" alt="Home Image" class="w-100">
		<div class="top-left home-text"><b>Sukseskan event kesayangan kalian</b></div>
		<div class="top-left mt-5 text-justify home-sub-text">Kumpulkan dana usaha untuk melancarkan pendanaan event favorit kalian</div>
	</div>

	<!--short description-->
	<div class="container-fluid p-5 desc-container">
		<h2 class="text-center mb-5">Kenapa galang dana usaha dengan danusKuy?</h2>
		<div class="row justify-content-center">
			<div class="col-md-6 col-sm-12">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<img src="<?php echo base_url().'assets/img/eventicon.png';?>" alt="Event Icon">
						</div>
						<div class="col-md-10">
							<ul class="desc-list">
								<li><strong>Mudah</strong>, cari dana usaha tanpa berjualan secara langsung</li>
								<li><strong>Double-benefit</strong>, galang dana sekaligus promosikan event anda</li>
								<li><strong>Fleksibel</strong>, cairkan dana kapan saja</li>
								<li><strong>Transparan</strong>, donasi dana tercatat secara real-time dan dapat dilihat siapa saja</li>
							</ul>
							
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<img src="<?php echo base_url().'assets/img/usericon.png';?>" alt="User Icon">
						</div>
						<div class="col-md-10">
							<ul class="desc-list">
								<li><strong>Lengkap</strong>, cari berbagai event favorit dari berbagai daerah</li>
								<li><strong>Fleksibel</strong>, dapatkan merchandise unik dari event secara online</li>
								<li><strong>Update</strong>, lihat keberlangsungan seluruh timeline event dengan mudah</li>
							</ul>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="text-center pt-5 text-muted">
		<h1 class="title-card-list">Event apa yang kita danusin</h1>
	</div>

	<!--Card list!-->
	<div class="mx-auto col-md-10 pt-5">
		<div class="card-deck">
			<div id="list-event-card" class="row">
				
				<?php foreach($query as $item): ?>
				
				<div class="col-lg-4 col-md-6 col-sm-6 pb-5">
					<div class="card">
						<a class="img-popup-link" href="<?php echo base_url().$item->imageurl?>"><img class="card-img-top" src="<?php echo base_url().$item->imageurl;?>" alt="Card image cap"></a>
						<div class="card-body">
							<h3 class="card-title"><?php echo $item->title; ?></h3>
							<h6 class="card-subtitle text-muted pb-3"><?php echo $item->subtitle; ?></h6>
							<p class="card-text pt-2"><?php echo $item->content; ?></p>
							<div>
								<ul class="list-inline">
									<li class="list-inline-item text-center card-list-border card-list-footer">
										<a class="card-list-text"><b>Terkumpul</br></b></a>
										<a class="card-list-subtext"><?php echo  $item->terkumpul?></a>
									</li>
									<li class="list-inline-item text-center card-list-border card-list-footer">
										<a class="card-list-text"><b>Tercapai</br></b></a>
										<a class="card-list-subtext"><?php echo round($item->terkumpul/$item->target*100)?>%</a>
									</li>
									<li class="list-inline-item list-subtext3 text-center card-list-footer">
										<a class="card-list-text"><b>Sisa Hari</br></b></a>
										<a class="card-list-subtext"><?php echo $item->hari; ?></a>
									</li>
								</ul>
							</div>
							<a href="<?php echo site_url("Detail_C/index/".$item->id."/")?>" class="event-card-link"></a>
						</div>
					</div>
				</div> 

				<?php endforeach; ?>
			</div>
		</div>
	</div>

	<a role="button" class="btn btn-outline-primary btn-dropdown mx-auto" href="<?php echo site_url('Listevent_C')?>">Lihat Semua</a>

	<!--JQuery-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Magnific Popup core JS file -->
	<script src="<?php echo base_url().'assets/magnific-popup/dist/jquery.magnific-popup.js'; ?>"></script>
	<script>
		$(document).ready(function() {
			//JS for magnific popup plugin
			$(".img-popup-link").magnificPopup({type : 'image'});
		});
	</script>
</body>
</html>