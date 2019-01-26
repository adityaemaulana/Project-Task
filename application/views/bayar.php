<!DOCTYPE html>
<html>
<head>
  <title>Pembayaran</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>./assets/css/ryan/bootstrap-4/bootstrap.css" type="text/css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>./assets/css/ryan/style.css" type="text/css" />
  <!--Open Iconic-->
  <link rel="stylesheet" href="<?php echo base_url().'assets/open-iconic-master/font/css/open-iconic-bootstrap.css';?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

</div>
  <div class="container">
     
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>ParamaBudaya2018</th>
       
      </tr>
    </thead>
    <tbody>
    <tr>
      <td style="color: grey;"><img src="<?php echo base_url(); ?>./assets/img/ukm-icon/ukm-djawa.jpg" width="20" height="20">UKM DJAWA</td>
    </tr>
    </tbody>
  </table>
</div>
<div class="container">

  <div align="center" ><h1>Pilih Produk</h1></div>    
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
     <td><h1 style="color: green">Quantity</h1><br>
    <a href="<?php echo base_url().'index.php/Bayar_C/addQtyController/'.$prd->id; ?>"><img class="image" border="0" title="#" src="<?php echo base_url(); ?>./assets/img/add.png" width="20px" height="20px" style="margin-right: 30px "></a>
      <?php 
          echo $prd->chart;
       ?>
    <a href="<?php echo base_url().'index.php/Bayar_C/subsQtyController/'.$prd->id; ?>"><img class="image" border="0" title="#" src="<?php echo base_url(); ?>./assets/img/substract.png" width="20px" height="20px" style="margin-left: 30px" ></a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<!--<div class="container" style="margin-top: 80px">
 
</div>
-->
<div class="container">
  
  <!-- Trigger the modal with a button -->
 <div align="center">
  <button type="button" class="btn btn-lg btn-bayar btn-block" id="pay-button" data-toggle="modal" data-target="#myModal">Lanjut Pembayaran</button>
 </div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
        <form method="POST" action="<?php echo base_url().'index.php/Bayar_C/paymentController'; ?>">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat"></textarea>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Metode Pembayaran</label>
            <br>
            <input type="radio" name="method" value="Transfer"> Transfer
            <br>
            <input type="radio" name="method" value="Transfer"> Bayar Di Tempat
          </div>
        
          <table class="table table-condensed">
    <thead>
      <tr>
        <th>Detail Pembayaran</th>
       
      </tr>
    </thead>
    <tbody>
    <tr>
      <td>Total Harga Barang<br>Rp <?php echo $totalHarga; ?><input type="hidden" name="total" value="<?php echo $totalHarga; ?>"></td>
      <td>Biaya Pengiriman<br>Rp <?php echo $shipping; ?><input type="hidden" name="shipping" value="<?php echo $shipping; ?>"></td>
    </tr>
    </tbody>
  </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <input type="submit" name="bayar" class="btn btn-info" value="Bayar">
    </form>
          <div class="modal fade" id="bayar" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <div class="input-group">
          
  <div class="input-group-prepend">
    <div class="input-group-text">
<form>
    <table>
  <td><input type="radio" name="bayar" value="transfer" id="transfer"><h5>Transfer</h5></td>
  <td><input type="radio" name="bayar" value="tunai" id="tunai"><h5>Bayar Ditempat</h5></td>
</form>
</table>
    </div>
  </div>

</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Bayar</button>
        </div>
      </div>
      
    </div>
  </div>
  
        </div>
      </div>
    </div>
  </div>
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