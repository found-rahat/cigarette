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
            <h1 class="m-0">Blank Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->


                <?php
                $Sstock_id = "SELECT * FROM collect_products_stocks WHERE `stock_id` = 0 ";
                          $result = mysqli_query($conn, $Sstock_id);
                           if (mysqli_num_rows($result) > 0)
                          {
                    while ($row = mysqli_fetch_array($result)) {
                        $stock_token_id= $row['token_id'] ;

                              $Sstocks_id = "SELECT * FROM collect_products_stock WHERE `token_id` = '$stock_token_id' ORDER BY `id` DESC LIMIT 1";
                                        $results = mysqli_query($conn, $Sstocks_id);
                                         if (mysqli_num_rows($results) > 0)
                                        {
                                  while ($rows = mysqli_fetch_array($results)) {

                                      $stock_id= $rows['id'] ;
                                      $token_id= $rows['token_id'] ;
                                      $up_stock_id = "UPDATE `collect_products_stocks` SET `stock_id`='$stock_id' WHERE `token_id`='$token_id' AND `stock_id`= 0";
                                      if(mysqli_query($conn, $up_stock_id)) {
                                       echo"";
                                      }else{
                                      echo"Error updateing record: 1". mysqli_error($conn);
                                      }

                                  }}


                    }}


                 ?>
                <form action="" method="post">

                 <?php
                 function random_string($length) {
                     $key = '';
                     $keys = array_merge(range(0, 9), range('a', 'z'));

                     for ($i = 0; $i < $length; $i++) {
                         $key .= $keys[array_rand($keys)];
                     }

                     return $key;
                 }

                 $token2 = random_string(50);
                $openstockcollectionid = $_GET['openstockcollectionid'] ;
                $newstockid= $_GET['newstockid'] ;

                if (!empty($newstockid)) {
                  $addview = $newstockid;
                }elseif (!empty($newstockSKU)) {
                  $addview = $newstockSKU;
                }

                if (!empty($addview)) {


                $tokenid=1;



                  $SelectProduct = "SELECT * FROM cigarette_products WHERE `id`= '$newstockid'";
                            $result = mysqli_query($conn, $SelectProduct);
                             if (mysqli_num_rows($result) > 0)
                            {
                      while ($row = mysqli_fetch_array($result)) {

                        $S_ADD_Product_id = $row['id'] ;
                        $S_ADD_Product_Product_Name = $row['Product_Name'] ;
                        $S_ADD_Product_Product_SKU = $row['Product_SKU'] ;
                        $S_ADD_Product_Product_img = $row['Product_img'];
                        $S_ADD_Product_product_price = $row['product_price'];




                        //add qurirs
                          if (isset($_POST['addprodct'])) {

                                      $quantity = $_POST['quantity'] ;
                                      $price = $S_ADD_Product_product_price ;
                                      $new = "NEW";
                                      $stock = "stock";

                                              if ($quantity>0) {
                        for($i=1; $i<=$quantity; $i++){
                          $new_stocks = "INSERT INTO `collect_products_stocks`(collection_id, product_id , product_name,  Product_SKU, Product_img, buy_Price, collection_datetime, stock_status, token_id)
                          values('".$openstockcollectionid."','".$S_ADD_Product_id."','".$S_ADD_Product_Product_Name."','".$S_ADD_Product_Product_SKU."','".$S_ADD_Product_Product_img."','".$price."','".$datetime."','".$stock."','".$token2."')";
                          if(mysqli_query($conn, $new_stocks))
                          {
                            $newstock_update = "success";
                            }     else {
                                    echo "Sorry,, there was an error uploading your product.".mysqli_error($conn);
                                  }
                        }//for loop close




                          $up_update_info = "UPDATE `cigarette_products` SET `product_price`='$price'  WHERE `id` = '$newstockid'";
                          if(mysqli_query($conn, $up_update_info)) {
                           echo"New Info Updated";
                          }else{
                          echo"Error updateing record: ". mysqli_error($conn);
                          }

                          ?>





    <?php
                if ($newstock_update == "success") {

                    $Addproduct = "INSERT INTO `collect_products_stock`(collection_id, product_id , Product_Name,  Product_SKU, Product_img, quantity, Paid_Price, Update_Date, token_id)
                    values('".$openstockcollectionid."','".$S_ADD_Product_id."','".$S_ADD_Product_Product_Name."','".$S_ADD_Product_Product_SKU."','".$S_ADD_Product_Product_img."','".$quantity."','".$price."','".$datetime."','".$token2."')";
                    if(mysqli_query($conn, $Addproduct))
                    {
                    ?>  <script>
                        window.location.href = "collection_time.php?openstockcollectionid=<?php echo $openstockcollectionid ?>&Ctagegory=Products&products_type=new_stocks";
                      </script> <?php

                    }
                     else {
                      echo "Sorry,, there was an error uploading your product.".mysqli_error($conn);
                    }
                }//if stock added
                                              }else {
                                               echo "Quentity 0 not allow";
                                              }

                                    }
                ?>

                <span>&#8226;</span>
                <?php echo $row['Product_Name']; ?> </br>
                  <td><img src="<?php echo $row['Product_img']; ?>" alt="<?php echo $row['Product_img']; ?>" width="200" height="200"></br>

                </form><form action="" method="post">
                </br>Collection ID :  <input type="text" name="openstockcollectionid" value="<?php echo $openstockcollectionid ?>" onchange='if(this.value != 0) { this.form.submit(); }' disabled="" placeholder="Collection ID" >
                  </form>  <form action="" method="post">


                Quentity:<input type="number" name="quantity" value="" placeholder="0">

                </br>
                <?php echo $datetime ?>
                </br>
                <button type="submit" id="submit" name="addprodct"
                         class="btn-submit">New Stock Update</button>

                <?php
                }}

                }
                ?>

                <button type="submit" id="submit" name="clear" class="btn-submit">clear</button>
                <?php
                //................................................................new stock...............................





                //token empty.............................................................

                 if (empty($tokenid)): ?>

                 <div class="card-body">
                     <table id="advanced_table" class="table">
                         <thead>
                             <tr>


                                 <th>NO.</th>
                                 <th>ADD</th>
                                 <th>Product Name</th>
                                 <th>Product Image</th>
                                 <th>SKu</th>

                             </tr>
                         </thead>
                         <tbody>
                           <?php
                           $n = 1 ;
                           $SelectProduct = "SELECT * FROM cigarette_products ORDER BY Product_Name ";
                                     $result = mysqli_query($conn, $SelectProduct);
                                      if (mysqli_num_rows($result) > 0)
                                     {
                               while ($row = mysqli_fetch_array($result)) {

                           ?>
                           <tr>
                             <td><?php echo $n++; ?></td>
                             <td><a href="?newstockSKU=<?php echo $row['Product_SKU']; ?>&id=<?php echo $token2; ?> "><font color="blue">ADD Stock</font></a></td>
                             <td><?php echo $row['Product_Name']; ?></td>
                             <td> <img src="<?php echo $row['Product_img']; ?>"  alt="<?php echo $row['Product_img']; ?>" width="60" height="60"> </td>

                             <td>   <?php echo $row['Product_SKU']; ?></td>

                           </tr>






                 <?php
                 }}
                 ?>
                </tbody>
                </table>
                </div>
                 <?php endif; ?>

                  </div>
                 </form>









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
