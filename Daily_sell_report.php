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
  <title>Daily Sell Report</title>

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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $backpath; ?>plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo $backpath; ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $backpath; ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $backpath; ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $backpath; ?>dist/css/adminlte.min.css">
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
            <h1 class="m-0">Daily Sell Report</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      <div style="overflow: hidden;">

            <p style="float: right; margin-top:10px"><a href="sell_product.php" target="_blank"><button type="button" class="btn btn-info"><i class="ik ik-check-circle"></i>Sell</button></a></a>

           </p>
      </div>
    </div>


    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Total stock for cigarette</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>



                  <tr>
                    <th>Serial</th>
                    <th>Outbound date</th>
                    <th>Total outbound</th>
                    <th>Total cash outbound</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $a = 1;

                    $list_product = "SELECT DISTINCT `outbound_time` FROM `cigarete_order_outbound` WHERE `Status`='confirm' order by `outbound_time` DESC";
                                  $result_sku = mysqli_query($conn, $list_product);
                            while ($row_sku = mysqli_fetch_assoc($result_sku)) {
                              $outbound_time = $row_sku['outbound_time'] ;




                              $BandHWhite = "SELECT COUNT(*) AS `outbound_time` FROM `cigarete_order_outbound` WHERE `outbound_time`='$outbound_time'";
                              $BandHWhite_result1 = mysqli_query($conn, $BandHWhite);
                              $BandHWhite_result1_echo = mysqli_fetch_assoc($BandHWhite_result1);
                              $BandHWhite_result1_echo_print = $BandHWhite_result1_echo['outbound_time'];

                              $total_Price_sql = "SELECT SUM(`buy_price`)  `buy_price` FROM `cigarete_order_outbound` WHERE `outbound_time`= '$outbound_time'";
                              $total_Price_sql_result1 = mysqli_query($conn, $total_Price_sql);
                              $total_Price_sql_result1_echo = mysqli_fetch_assoc($total_Price_sql_result1);
                              $total_Price_sql_result1_echo_print = $total_Price_sql_result1_echo['buy_price'];


                             ?>

                  <tr>
                    <td><?php echo $a++; ?></td>
                    <td><a href="daily_day_report.php?Outbound_Time=<?php echo $outbound_time;?>"><?php echo $outbound_time; ?></a></td>
                    <td><?php echo $BandHWhite_result1_echo_print; ?></td>
                    <td><?php echo $total_Price_sql_result1_echo_print; ?></td>
                  </tr>
                <?php }?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Serial</th>
                    <th>Outbound date</th>
                    <th>Total outbound</th>
                    <th>Total cash outbound</th>
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
<script src="<?php echo $backpath; ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $backpath; ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo $backpath; ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo $backpath; ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo $backpath; ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo $backpath; ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo $backpath; ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo $backpath; ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo $backpath; ?>plugins/jszip/jszip.min.js"></script>
<script src="<?php echo $backpath; ?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo $backpath; ?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo $backpath; ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo $backpath; ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo $backpath; ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $backpath; ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo $backpath; ?>dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
