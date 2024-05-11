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


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Stock Info</title>

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
            <h1 class="m-0">Stock Info</h1>
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
    $Product_sku = $_GET['Product_sku'];
    $stock_status = $_GET['stock_status'];
    $payment_status = $_GET['payment_status'];
     ?>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <?php echo $Product_sku; ?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>



                  <tr>
                    <th>id</th>
                    <th>Stock id</th>
                    <th>Product Name</th>
                    <th>Product_SKU</th>
                    <th>Product_img</th>
                    <th>product_price</th>
                    <th>Collection Date</th>
                    <th>payment_status</th>
                    <th>Stock Status</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php


                    $n = 1;
                    if ($payment_status == "paid") {
                          $list_product = "SELECT * FROM `collect_products_stocks` WHERE `Product_SKU`='$Product_sku' AND `payment_status`='$payment_status'";
                    }
                    if ($stock_status == "sell") {
                          $list_product = "SELECT * FROM `collect_products_stocks` WHERE `Product_SKU`='$Product_sku' AND `stock_status`='$stock_status'";
                    }
                    $list_product = "SELECT * FROM `collect_products_stocks` WHERE `Product_SKU`='$Product_sku' AND `stock_status`='stock' AND `payment_status`='unpaid'";
                                  $result_sku = mysqli_query($conn, $list_product);
                                   if (mysqli_num_rows($result_sku) > 0) {
                            while ($row_sku = mysqli_fetch_array($result_sku)) {
                              $id = $row_sku['id'] ;
                              $product_name = $row_sku['product_name'] ;
                              $Product_SKU = $row_sku['Product_SKU'] ;
                              $Product_img = $row_sku['Product_img'] ;
                              $buy_Price = $row_sku['buy_Price'] ;
                              $stock_status = $row_sku['stock_status'] ;
                              $payment_status = $row_sku['payment_status'] ;
                              $collection_datetime = $row_sku['collection_datetime'] ;

                             ?>

                  <tr>
                    <td><?php echo $n++; ?></td>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $product_name; ?></td>
                    <td><?php echo $Product_SKU; ?></td>
                    <td><img src="<?php echo $Product_img ?>" alt="<?php echo  $Product_img; ?>" width="100" height="100"></td>
                    <td><?php echo $buy_Price; ?></td>
                    <td><?php echo $collection_datetime; ?></td>
                    <td><?php echo $payment_status; ?></td>
                    <td><?php echo $stock_status; ?></td>
                  </tr>
                <?php }} ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>id</th>
                    <th>Stock id</th>
                    <th>Product Name</th>
                    <th>Product_SKU</th>
                    <th>Product_img</th>
                    <th>product_price</th>
                    <th>Collection Date</th>
                    <th>payment_status</th>
                    <th>Stock Status</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>








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
