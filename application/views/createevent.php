<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!--Bootstrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<!--JQuery-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!--JQuery DatePicker-->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
	  $( function() {
	    $( "#datepicker" ).datepicker({
	    	dateFormat : "dd-mm-yy"
	    });
	  });
	</script>

	<link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css'?>">

</head>
<body>
	<?php echo $error ?>
	<div class="row justify-content-center mt-5">
		<?php echo form_open_multipart('CreateEvent_C/inputEvent', 'class="col-7" runat="server"'); ?>
			<h1 class="text-center mt-5">Daftarkan Event Anda</h1>

			<div style="background-color: white" class="px-5 py-4 mt-5 rounded">
				<h2 class="mb-5 mt-2">Informasi Event</h2>
				<div class="form-group row">
					<label for="inputTitle" class="col-sm-3 col-form-label form-event-label">Nama Event</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="inputTitle" name="title" value="<?php echo set_value('title'); ?>">
						<?php echo form_error('title'); ?>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputSubtitle" class="col-sm-3 col-form-label form-event-label">Penyelenggara Event</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="inputSubtitle" name="subtitle" value="<?php echo set_value('subtitle'); ?>">
						<?php echo form_error('subtitle'); ?>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputKategori" class="col-sm-3 col-form-label form-event-label">Kategori Event</label>
					<div class="col-sm-9">
						<select id="inputKategori" class="form-control" name="kategori">
							<option value="">Pilih Kategori</option>
							<option value="seni">Seni & Budaya</option>
							<option value="teknologi">Teknologi</option>
							<option value="musik">Musik</option>
							<option value="komunitas">Komunitas</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputTarget" class="col-sm-3 col-form-label form-event-label">Target Pendanaan</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="inputTarget" name="target" value="<?php echo set_value('target'); ?>">
						<?php echo form_error('target'); ?>
					</div>
				</div>
				<div class="form-group row">
					<label for="datepicker" class="col-sm-3 col-form-label form-event-label">Deadline Pendanaan</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="datepicker" name="deadline" value="<?php echo set_value('deadline'); ?>">
						<?php echo form_error('deadline'); ?>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputCaption" class="col-sm-3 col-form-label form-event-label">Deskripsi Singkat Event</label>
					<div class="col-sm-9">
						<textarea class="form-control" id="inputCaption" rows="3" name="caption" value="<?php echo set_value('caption'); ?>"></textarea>
						<?php echo form_error('caption'); ?>
					</div>
				</div>
			</div>

			<div style="background-color: white" class="px-5 py-4 mt-5 rounded">
				<h2 class="mb-5 mt-2">Detail Event</h2>
				<div class="form-group row">
					<label for="inputTanggal" class="col-sm-3 col-form-label form-event-label">Tanggal Event</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="inputTanggal" name="tanggal" value="<?php echo set_value('tanggal'); ?>">
						<?php echo form_error('tanggal'); ?>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputWaktu" class="col-sm-3 col-form-label form-event-label">Waktu Event</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="inputWaktu" name="waktu" value="<?php echo set_value('waktu'); ?>">
						<?php echo form_error('waktu'); ?>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputLokasi" class="col-sm-3 col-form-label form-event-label">Lokasi Event</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="inputLokasi" name="lokasi" value="<?php echo set_value('lokasi'); ?>">
						<?php echo form_error('lokasi'); ?>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputAbout" class="col-sm-3 col-form-label form-event-label">Deskripsi Event</label>
					<div class="col-sm-9">
						<textarea class="form-control" id="inputAbout" rows="3" name="about" value="<?php echo set_value('about'); ?>"></textarea>
						<?php echo form_error('about'); ?>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputCover" class="col-sm-3 col-form-label form-event-label">Poster Event</label>
					<div class="col-sm-4">
						<input type="file" class="form-control" id="inputCover" name="cover">
						<?php echo form_error('cover'); ?>
					</div>
					<div class="col-sm-5">
						<img id="poster" src="#" alt="your image" style="width: 270px;height: 270px;" />
					</div>
				</div>
			</div>

			<div><input class="btn btn-lg btn-success mt-3 ml-2" type="submit" value="Buat Event"></div>
		</form>
	</div>
	
	<script>
		$(document).ready(function(){
			alert
			if($("#poster").attr('src') == "#"){
				$("#poster").hide();
			}

			$("#inputCover").change(function(){
				$("#poster").show();
				readURL(this);
			});
		});
		function readURL(input){
			if(input.files && input.files[0]){
				var reader = new FileReader();

				reader.onload = function(e){
					$('#poster').attr('src', e.target.result);
				}

				reader.readAsDataURL(input.files[0]);
			}
		}
	</script>
</body>
</html>