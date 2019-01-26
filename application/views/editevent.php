<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!--Bootstrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css'?>">

	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
	 <div class="col-8 mx-auto my-5 py-5">
		<h2>Daftar Event yang Anda Miliki</h2>
	 	<table class="table table-striped table-bordered">
		  <thead>
		    <tr>
		      <th scope="col">No.</th>
		      <th scope="col">Nama Event</th>
		      <th scope="col">Target(Rp)</th>
		      <th scope="col">Terkumpul(Rp)</th>
		      <th scope="col">Sisa hari</th>
		      <th colspan="2" scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php $i=1; foreach($query as $item): ?>
			    <tr>
			      <th scope="row"><?php echo $i++ ?></th>
			      <td><a href="<?php echo site_url('Detail_C/index/'.$item->id) ?>"><?php echo $item->title ?></a></td>
			      <td><?php echo $item->target ?></td>
			      <td><?php echo $item->terkumpul ?></td>
			      <td><?php echo $item->hari ?></td>
			      <td>
			      	<a href="<?php echo site_url('EditEvent_C/edit/'.$item->id) ?>"><i class="fa fa-pencil" aria-hidden="true" style="font-size: 1em; color:blue; padding-left: 35%"></i></a>
			      </td>
			      <td>
	  				<a href="<?php echo site_url('EditEvent_C/delete/'.$item->id) ?>"><i class="fa fa-times" aria-hidden="true"  style="font-size: 1em; color:red; padding-left: 30%"></i></a>
				  </td>
			    </tr>
			<?php endforeach ?>

		  </tbody>
		</table>
	 </div>

</body>
</html>