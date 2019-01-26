<!DOCTYPE html>
<html>
<head>
	<title>danusKuy</title>
	
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css';?>">

	<!--Bootstrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/magnific-popup/dist/magnific-popup.css'; ?>">
</head>
<body>
	<img src="<?php echo base_url().'assets/img/background1.jpg'?>" class="img-fluid" alt="Background Image">

	<div class="container-fluid container-filter-bar pt-4 pb-3">
		<div class="row justify-content-center">
			<div class="col-md-5">
				<h3><b>Temukan event terbaik disini</b></h3>
				<p>Atau galang dana sekarang</p>
				<?php if($this->session->has_userdata('user_id')){ ?>
					<a href="<?php echo site_url('CreateEvent_C')?>" class="btn btn-success" style="box-shadow: none;border:none">Tambahkan Event</a>
				<?php }else{ ?>
					<a href="<?php echo site_url('User')?>" class="btn btn-success" style="box-shadow: none;border:none">Tambahkan Event</a>
				<?php } ?>
				
					

			</div>
			<div class="col-md-5">
				<form>
					<div class="form-inline">
						<select id="kategoriSelect" class="form-control">
							<option selected>Pilih Kategori...</option>
							<option>Seni & Budaya</option>
							<option>Teknologi</option>
							<option>Musik</option>
							<option>Komunitas</option>
						</select>
						<input type="text" class="form-control w-50 ml-3" placeholder="Bandung, Indonesia">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--Filter Bar-->

	<div class="mx-auto col-md-10 pt-5">
		<div class="card-deck">
			<div id="list-event-card" class="row">

				<?php foreach($query as $item): ?>

				<div class="col-lg-4 col-md-6 col-sm-6 pb-5">
					<div class="card">
						<a class="img-popup-link" href="<?php echo base_url().$item->imageurl;?>"><img class="card-img-top" src="<?php echo base_url().$item->imageurl;?>" alt="Card image cap"></a>
						<div class="card-body">
							<h3 class="card-title"><?php echo $item->title; ?></h3>
							<h6 class="card-subtitle text-muted pb-3"><?php echo $item->subtitle; ?></h6>
							<p class="card-text pt-2"><?php echo $item->content; ?></p>
							<div>
								<ul class="list-inline">
									<li class="list-inline-item text-center card-list-border card-list-footer">
										<a class="card-list-text"><b>Terkumpul</br></b></a>
										<a class="card-list-subtext"><?php echo $item->terkumpul; ?></a>
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
							<a href="<?php echo site_url("Detail_C/index/".$item->id) ?>" class="event-card-link"></a>
						</div>
					</div>
				</div>

				<?php endforeach;?>
			</div>
		</div>
	</div>
	<!--List Card Event-->

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