<!DOCTYPE html>
<html>
<head>
  <title>Pembayaran</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>./assets/css/ryan/bootstrap-4/bootstrap.css" type="text/css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>./assets/css/ryan/bootstrap-3/bootstrap.css" type="text/css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>./assets/css/ryan/style.css" type="text/css" />
  <!--Open Iconic-->
  <link rel="stylesheet" href="<?php echo base_url().'assets/open-iconic-master/font/css/open-iconic-bootstrap.css';?>">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light fixed-top header-navbar">
    <a class="navbar-brand" href="<?php echo site_url('Home_C')?>"><img src="<?php echo base_url(); ?>./assets/img/logowhite.png" alt="danusyuk"></a>
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
      <form class="form-inline w-75 col-md-9">
        <input class="nav-search-input form-control w-75" type="search" placeholder="Cari Event..." aria-label="Search">
        <button class="btn nav-search-btn" type="submit"><span class="oi oi-magnifying-glass" title="magnifying glass" aria-hidden="true"></span></button>
      </form>
      <div class="btn-group" role="group" aria-label="Basic example">
        <a role="button" class="btn btn-login btn-link nav-btn mx-2" href="Login.html">Login</a>
        <a class="btn btn-daftar btn-outline-primary rounded mr-4" href="regispelanggan.html">Daftar</a>
      </div>
    </div>
  </nav>

</div>
<div class="container">

  <div align="center" ><h1>Pilih Produk</h1>
    <p style="float: right;">My Brackets <b><?php echo $bracketsSize; ?></b></p>
  </div>    
  <table class="table table-condensed">
  <?php
        $no=1;
        $qty = 1;
        $totalHarga = 0;
        $shipping = 10000;
        foreach ($produk as $prd) {
          $totalHarga += ($prd->harga * $prd->chart);
    ?> 
    <tbody>
    
      <tr>
      
      <td><img src="<?php echo base_url(); ?>./assets/img/<?php echo $prd->gambar;?> " height="200" width="200" ></td>
     <td><h1><a href="html.html" style="color: black; text-decoration: none;" ><?php echo $prd->nama_produk; ?></a></h1><br>
      <p><?php echo $prd->penjelasan;?></p><br>
      <h2>Rp.<?php echo ($prd->harga * $prd->chart);?></h2></td>
      <td>Tambah ke Keranjang <br>
      <a href="<?php echo base_url().'index.php/Bayar_C/addToBracket/'.$prd->id; ?>"><img class="image" border="0" title="#" src="<?php echo base_url(); ?>./assets/img/add.png" width="20px" height="20px" style="margin-right: 30px "></a></td>

      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<!--<div class="container" style="margin-top: 80px">
 
</div>
-->

  
        </div>
      </div>
    </div>
  </div>
</div>
</div>
  <div>
    <div class="footer-1 container-fluid mt-5">
      <div class="row pt-3">
        <div class="col-6 pl-5"><img src="<?php echo base_url(); ?>./img/logo.png" alt="danusyuk"></div>
        <div class="col-6">
          <div class="row float-right">
            <p class="pr-4"><b>Temukan kami di:</b></p>
            <ul class="list-inline">
              <li class="list-inline-item"><a href="#"><img class="w-50" src="<?php echo base_url(); ?>./assets/img/facebook.png" alt=""></a></li>
              <li class="list-inline-item"><a href="#"><img class="w-50" src="<?php echo base_url(); ?>./assets/img/twitter.png" alt=""></a></li>
              <li class="list-inline-item"><a href="#"><img class="w-50" src="<?php echo base_url(); ?>./assets/img/instagram.png" alt=""></a></li>
              <li class="list-inline-item"><a href="#"><img class="w-50" src="<?php echo base_url(); ?>./assets/img/google-plus.png" alt=""></a></li>
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