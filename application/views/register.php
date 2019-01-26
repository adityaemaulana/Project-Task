<!DOCTYPE html>
<html>
<head>
	<title>Registrasi!</title>
	<link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if lt IE 9]>
	    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!--Bootstrap JS-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/register.css">

</head>

<body>

		<div class="container">
				<div class="middle">
					<div class="row">
			<p class="teksawal" style="text-align: center;" style="font-family: karla" style="text-align: center;">Langkah Mudah Berjualan di danusYuk!</p></div>
			
				<div class="row">
					<div class="col-md-4">
						<img src="<?php echo base_url("assets/img");?>/regispenjual1.png" class="img2"><span><h1 style="font-family: karla" class="h1"><b>Langkah 1</b></h1><p class="cara">Registrasi dan aktivasi<br> akun</p></span>
					</div>
					<div class="col-md-4">
						<img src="<?php echo base_url("assets/img");?>/regispenjual3.png" class="img2"><h1 style="font-family: karla" class="h1"><b>Langkah 2</b></h1><p class="cara">Upload produkmu langsung</p></div> 
				<div class="col-md-4">
					<img src="<?php echo base_url("assets/img");?>/regispenjual4.png" class="img2"><h1 style="font-family: karla" style="padding-top: 10px;" class="h1"><b>Misi Berhasil!</b></h1><p class="cara" style="padding-top: 5px;">Kamu sudah aktif berjualan<br> di danusYuk!</p>
				</div>
				</div>
				</div>
		</header>
				<p class="satu"><b>Registrasi!</b></p>
				<form method="post" action = "<?php echo site_url('Regis_C/daftar_akun') ?>">
					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter nama lengkap">
						<label class="teks">Nama Lengkap				: </label>
						<input type="text" class="nama" name="namalgkp" value="" required>
					</div>
					<div class="form-group">
						<label for="sel1" class="teks">Gender		: </label><br>
  								<select class="asal" id="sel1" name="gender" required>
   								 <option class="teks">Select</option>
   								 <option class="teks">Laki-laki</option>
   								 <option class="teks">Perempuan</option>
  								</select>
					</div>
					<div class="validate-input" data-validate="Please enter nomor telfon">
						<label class="teks">Nomor Telefon			: </label>
						<input type="text" class="nama" name="telfon" value="" required>
					</div>

					<div class="form-group mt-2">
						<label class="teks col-md-10">Email: </label>
						<input type="email" class="nama" name="email" value="" required>
					</div>
					<div class="form-group">
						<label class="teks">Password		 		: </label>
						<input type="password" class="nama" name="password" value="" required>
					</div>
					<div class="form-group">
						<label class="teks">Alamat 		: </label>
						<input type="alamat" class="nama" name="alamat" value="" required>
					</div>
					<div class="col-md-12">
						<input type="submit" name="submit" class="button" value="Submit">
					</div>
				
			</form>
		</div>
	</p>

</div>
</main>
</div>


</body>
</html>

<!--riska chairunisa 1301164546 -->