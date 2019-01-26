  <!DOCTYPE html>
<html>
<head>
  <title>Input Barang</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!--Open Iconic-->
  <link rel="stylesheet" href="<?php echo base_url().'assets/open-iconic-master/font/css/open-iconic-bootstrap.css';?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css?time()';?>">

</head>
<body>

  <!--Header!-->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top header-navbar">
    <a class="navbar-brand" href="<?php echo site_url('Home_C')?>"><img src="<?php echo base_url().'assets/img/logowhite.png';?>  " alt="danusyuk"></a>
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

        <img src="<?php echo base_url().'assets/img/calendar.png'?>" style="width: 30px;height: 30px">
        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black"></a>


        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="<?php echo site_url('CreateEvent_C') ?>">Tambahkan Event</a>
            <a class="dropdown-item" href="#">Edit Event</a>
        </div>
      </div>
      <div class="btn-group" role="group" aria-label="Basic example">
        <a role="button" class="btn btn-login btn-link nav-btn mx-2" href="Login.html">Login</a>
        <a class="btn btn-daftar btn-outline-primary rounded mr-4" href="regispelanggan.html">Daftar</a>
      </div>
    </div>
  </nav>


<!-- Input in here
-->
<?php
if ($this->session->flashdata('alert')=='sukses_insert'){
    echo "<script>alert('Sukses Insert Data');</script>";
}else if ($this->session->flashdata('alert')=='sukses_edit'){
    echo "<script>alert('Sukses Edit Data');</script>";
}else if ($this->session->flashdata('alert')=='sukses_hapus'){
    echo "<script>alert('Sukses Hapus Data');</script>";
}
//disini tampilkan flashdata dari controller

?>
<div class="container">
<form enctype="multipart/form-data" method="POST" action="<?php echo base_url().'index.php/Bayar_C/inputController'; ?>">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Event</label>
            <input type="text" class="form-control" id="event" name="event">
          </div>
          
          
            
            <select name="ukm" class="form-control" style="height: 35px;">
              <option value="">-- Pilih UKM --</option>
              <option value="kbms">KBMS</option>
              <option value="jawa">UKM DJAWA</option>
              <option value="rg">Rumah Gadang</option>
            </select>
          <br>
          <div class="form-group">
            <p>Gambar</p>
            <input type="file"  id="gambar" name="gambar">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama Produk</label>
            <input type="text" class="form-control" id="nama_produk" name="nama_produk">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Penjelasan</label>
            <input type="text" class="form-control" id="penjelasan" name="penjelasan">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Stok</label>
            <input type="text" class="form-control" id="stok" name="stok">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Harga</label>
            <input type="text" class="form-control" id="harga" name="harga">
          </div>

          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <input type="submit" name="input" class="btn btn-info" value="Input Data">
    </form>
</div>
<!--Ending in here
-->
</div>
  <div>
    <div class="footer-1 container-fluid mt-5">
      <div class="row pt-3">
        <div class="col-6 pl-5"><img src="<?php echo base_url().'assets/img/<logo class="png"></logo>';?>" alt="danusyuk"></div>
        <div class="col-6">
          <div class="row float-right">
            <p class="pr-4"><b>Temukan kami di:</b></p>
            <ul class="list-inline">
              <li class="list-inline-item"><a href="#"><img class="w-50" src="<?php echo base_url().'assets/img/facebook.png';?>" alt=""></a></li>
              <li class="list-inline-item"><a href="#"><img class="w-50" src="<?php echo base_url().'assets/img/twitter.png';?>" alt=""></a></li>
              <li class="list-inline-item"><a href="#"><img class="w-50" src="<?php echo base_url().'assets/img/instagram.png';?>" alt=""></a></li>
              <li class="list-inline-item"><a href="#"><img class="w-50" src="<?php echo base_url().'assets/img/google-plus.png';?>" alt=""></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="pt-3">
      <div class="col-lg-3 col-md-5 col-sm-5 pl-4">
        <p class="text-justify footer-text1">
          <a class="footer-brand"><b>danusKuy</b></a> adalah platform untuk membantu penggalangan
          dana usaha untuk event-event di sekitar anda secara
          online
        </p>
      </div>
      <p class="pl-4 footer-text2">
        <b>Copyright 2018 &copy; PT. Bantu Yuk All Rights Reserved</b>
      </p>
    </div>
  </div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable();
  } );
</script>
</body>
</html>