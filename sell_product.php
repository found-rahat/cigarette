<?php
//backpath value
if (empty($backpath)) {
 $backpath = "" ;
}
//database value
if (empty($dbconnect)) {
 $dbconnect = "dbconn.php" ;
}
require_once($dbconnect);
//datetime value
if (empty($date_time)) {
 $date_time = "time_function.php" ;
}
require_once($date_time);
error_reporting(0);

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $backpath; ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo $backpath; ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo $backpath; ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo $backpath; ?>plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $backpath; ?>dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo $backpath; ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo $backpath; ?>plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo $backpath; ?>plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <!-- Navbar -->
  <?php require_once("header_menu.php"); ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php require_once("left_menu.php"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Sell Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <?php

if (isset($_POST['confirm'])) {
$confirmall="yes";
}

if ($clearconfirm=="confirm") {
$confirmall="yes";
}
if ($confirmall=="yes") {


$Sstock_id = "SELECT * FROM `cigarete_order_outbound` WHERE `Outbound_confirm_type`='pending' ORDER BY id DESC";
    $result = mysqli_query($conn, $Sstock_id);
      if (mysqli_num_rows($result) > 0)
    {
while ($row = mysqli_fetch_array($result)) {
$outbound_stock_id = $row['stock_id'];

$upo_Sbuzzblu_order_list = "UPDATE `collect_products_stocks` SET `stock_status`='sell', `payment_status`='paid'  WHERE  `id` = '$outbound_stock_id'";
if(mysqli_query($conn, $upo_Sbuzzblu_order_list)) {
echo"Success";
}else{
echo"Error updateing record: ". mysqli_error($conn);
}



}}
if ($confirmall == "yes") {
$up_confirmation_outbound = "UPDATE `cigarete_order_outbound` SET `Outbound_confirm_type`='confirm', `stock_id_status`='sell', `Status`='confirm'  WHERE `Outbound_confirm_type` = 'pending'";
if(mysqli_query($conn, $up_confirmation_outbound)) {
  echo"Order Successfully confirmed";
}else{
echo"Error updateing record: ". mysqli_error($conn);
}
}
}


    //input value start

    $outbound_stock_id =  $_POST['stock_id'];


    $deleteorder = $_GET['deleteid'];
    if (!empty($deleteorder)) {
      $DLT_outboundprossessing_order = "DELETE FROM `cigarete_order_outbound`  WHERE `stock_id`='$deleteorder'";
      if(mysqli_query($conn, $DLT_outboundprossessing_order)) {
       echo"";
      }else{
      echo"Error deleting record: ". mysqli_error($conn);
      }
    }


    if (!empty($outbound_stock_id)) {
    $notempty =  $outbound_stock_id ;
    }elseif (empty($outbound_stock_id)) {
    $outbound_stock_id =  "empty" ;
    }


    $orderchecking = "SELECT * FROM cigarete_order_outbound WHERE `stock_id`='$outbound_stock_id' ";
              $result = mysqli_query($conn, $orderchecking);
               if (mysqli_num_rows($result) > 0)
              {
                $alreadyexist = mysqli_num_rows($result);
        while ($row = mysqli_fetch_array($result)) {
            echo "";
        }}
$zero=0;
if (!empty($notempty)) {
if ($alreadyexist == $zero) {


if (!empty($outbound_stock_id)) {
$SelectProduct_U_outbound_Track_number = "SELECT * FROM `collect_products_stocks` WHERE `id`='$outbound_stock_id'";

}
$result = mysqli_query($conn, $SelectProduct_U_outbound_Track_number);
if (mysqli_num_rows($result) > 0)  {

while ($row = mysqli_fetch_array($result)) {



$outbound_Track_number_id = $row['id'];
$outbound_Track_number_collection_id = $row['collection_id'];
$outbound_Track_number_stock_id = $row['stock_id'];
$outbound_Track_number_token_id = $row['token_id'];
$outbound_Track_number_product_id = $row['product_id'];
$outbound_Track_number_product_name = $row['product_name'];
$outbound_Track_number_Product_SKU = $row['Product_SKU'];
$outbound_Track_number_Product_img = $row['Product_img'];
$outbound_Track_number_buy_Price = $row['buy_Price'];
$outbound_Track_number_collection_datetime = $row['collection_datetime'];
$outbound_Track_number_collection_time = $row['collection_time'];
$outbound_Track_number_stock_status = $row['stock_status'];
$outbound_Track_number_payment_status = $row['payment_status'];


  $affiliate_buying_price = "SELECT `product_price` FROM `cigarette_products` WHERE `Product_SKU`='$outbound_Track_number_Product_SKU '";
          $resul_buying = mysqli_query($conn, $affiliate_buying_price);
           if (mysqli_num_rows($resul_buying) > 0)  {
            while ($rowbuyin = mysqli_fetch_array($resul_buying)) {
              $server_buying_price = $rowbuyin["product_price"];

            }
          }

    $copyoutound = "INSERT INTO `cigarete_order_outbound`(`collection_id`, `stock_id`, `token_id`, `product_id`, `product_name`, `Product_SKU`, `buy_price`, `Product_img`, `outbound_time`, `collection_datetime`, `collection_time`)
  values('".$outbound_Track_number_collection_id."','".$outbound_Track_number_id."','".$outbound_Track_number_token_id."','".$outbound_Track_number_product_id."','".$outbound_Track_number_product_name."','".$outbound_Track_number_Product_SKU."','".$outbound_Track_number_buy_Price."','".$outbound_Track_number_Product_img."','".$date."','".$outbound_Track_number_collection_datetime."','".$outbound_Track_number_collection_time."')";
  if(mysqli_query($conn, $copyoutound)) {
   ?><div class="alert bg-success alert-success text-white" role="alert">  Valid Package  </div><?php
   ?><audio autoplay>
   <source src="../sound/valid.mp3" type="audio/mpeg">
   </audio><?php
  }else{
  echo"track error ". mysqli_error($conn);
  }



}}




//if not zero
}else {
?><div class="alert bg-danger alert-danger text-white" role="alert">Dublicate Tracking ID</div>
<audio autoplay>
<source src="../sound/dublicate.mp3" type="audio/mpeg">
</audio>
<script>
setTimeout(function(){
window.location.href = '?new=2&tocken=<?php echo $token ?>';
}, 1500);
</script>
<?php
}

}
     ?>



  <center>
    <?php $S_outbound_Track_number_p = "SELECT * FROM `cigarete_order_outbound` WHERE `Outbound_confirm_type`='pending' ORDER BY id DESC";
              $result = mysqli_query($conn, $S_outbound_Track_number_p);
               if (mysqli_num_rows($result) > 0)  {
        while ($row10 = mysqli_fetch_array($result)) {
          $stock_id01 = $row10["stock_id"];

        }} ?>
        <?php $input=$_GET['input']; ?>
    <form class="" action="" method="post">
      <input type="text" id="search-form" name="stock_id" value="" onchange='if(this.value != 0) { this.form.submit(); }' <?php if (!empty($input)) { ?>disabled="" <?php } ?> placeholder="Order Number" autofocus>
    </form>
  </center>
<div class="card">
<div class="card-body p-0 table-border-style">
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
          <tr>
            <th>No</th>
            <th>Order Number</th>
            <th>Unit Price</th>
            <th>Website IMG </th>
            <th>Product Name </th>
            <th>Date Time </th>
            <th>Delete</th>
          </tr>
        </thead>
    <tbody>
  <?php
  $n=1;
  $S_outbound_Track_number_p = "SELECT * FROM `cigarete_order_outbound` WHERE `Outbound_confirm_type`='pending' ORDER BY id DESC";
            $result = mysqli_query($conn, $S_outbound_Track_number_p);
             if (mysqli_num_rows($result) > 0)  {
      while ($row = mysqli_fetch_array($result)) {

      $P_outbound_Track_number_id = $row['id'] ;
      $P_outbound_Track_number_product_name = $row['product_name'] ;
      $P_outbound_Track_number_buy_price = $row['buy_price'] ;
      $P_outbound_Track_number_Product_img = $row['Product_img'] ;
      $P_outbound_Track_number_token_id = $row['token_id'] ;
      $P_outbound_Track_number_collection_datetime = $row['collection_datetime'] ;
      $P_outbound_Track_number_stock_id = $row['stock_id'] ;


  ?>

    <tr>
    <td><?php echo $n++ ; ?> </td>
    <td><?php echo  $P_outbound_Track_number_stock_id; ?></td>
    <td><?php echo $P_outbound_Track_number_buy_price;  ?></td>
    <td><img src="<?php echo  $P_outbound_Track_number_Product_img; ?>" alt="<?php echo  $P_outbound_Track_number_Product_img; ?>" width="100" height="100"></td>
    <td style="font-size:15px"><?php echo $P_outbound_Track_number_product_name; ?></td>
    <td><?php echo  $P_outbound_Track_number_collection_datetime; ?></td>
    <td><a href="?deleteid=<?php echo  $P_outbound_Track_number_stock_id; ?>&tocken=<?php echo $P_outbound_Track_number_token_id ?>"><button type="button" class="btn btn-danger"><i class="ik ik-info"></i>Delete</button></a></td>
    </tr>






  <?php

      }}


  ?>
  </tbody>
  </table>
  </div>
  </div>
  </div>

  <center>
  <form class="" action="" method="post">
    <button type="submit" id="submit" name="clear" class="btn btn-dark">Clear</button>
    <button type="submit" id="submit" name="confirm" class="btn btn-success">Confirm</button>
  </form>
  </br> <a href="/"><i class="ik ik-home"></i></a> </center>











    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo $backpath; ?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo $backpath; ?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo $backpath; ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo $backpath; ?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo $backpath; ?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo $backpath; ?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo $backpath; ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo $backpath; ?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo $backpath; ?>plugins/moment/moment.min.js"></script>
<script src="<?php echo $backpath; ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo $backpath; ?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo $backpath; ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $backpath; ?>dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo $backpath; ?>dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo $backpath; ?>dist/js/pages/dashboard.js"></script>
</body>
</html>
