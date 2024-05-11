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
            //product values

            $have_vlue = ["'", " ", "!","`", "<", ">", "%", "^", "[", "]", "(", ")", ":", ";", '"', "/", "?", ""];
            $replace_vlue  = ["", "", "","", "", "", "", "", "", "", "", "", "", "", "", "", "", ""];


                $Product_Name = mysqli_real_escape_string($conn, $_POST['Product_Name']);
                $Product_Name = str_replace("'","","$Product_Name");


                $Product_SKU = mysqli_real_escape_string($conn, $_POST['Product_SKU']);
                $Product_SKU = str_replace($have_vlue, $replace_vlue, $Product_SKU);

                $Product_Price = mysqli_real_escape_string($conn, $_POST['Product_Price']);
                $Product_Price = str_replace("'","","$Product_Price");



            // image upload queries
               $target_dir = "images/";
               $target_file = $target_dir . basename($_FILES["Product_img"]["name"]);
               $upload_name = $target_file;
               $formet_name = strstr($upload_name, '.'); // .jpg , .png formet [strstr = last string]
               $image_SKU_name = $Product_SKU.$formet_name ;

               $uploadOk = 1;
               $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
               // Check if image file is a actual image or fake image
               if(isset($_POST["addproduct"])) {
                   $check = getimagesize($_FILES["Product_img"]["tmp_name"]);
                   if($check !== false) {
                       echo "";
                       $uploadOk = 1;
                   } else {
                       echo "File is not an image.";
                       $uploadOk = 0;
                   }


                   // Check file size
                   if ($_FILES["Product_img"]["size"] > 500000) {
                       echo "Sorry, your file is too large.";
                       $uploadOk = 0;
                   }
                   // Allow certain file formats
                   if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                   && $imageFileType != "gif" ) {
                       echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                       $uploadOk = 0;
                   }
                   // Check if $uploadOk is set to 0 by an error
                   if ($uploadOk == 0) {
                       echo "Sorry, your image was not uploaded.";
                   // if everything is ok, try to upload file
                   } else {
                       if (move_uploaded_file($_FILES["Product_img"]["tmp_name"], "images/" . $image_SKU_name)) {

                         //if image upload succedd start database upload
                         $Addproduct = "INSERT INTO cigarette_products (Product_Name, Product_SKU, Product_img, product_price)
                         values ('".$Product_Name."','".$Product_SKU."','".$target_dir.$image_SKU_name."','".$Product_Price."')" ;
                   if(mysqli_query($conn, $Addproduct))
                         {
                          echo 'Product Upload Successfully';
                         } else {
                             echo "Sorry, error .". mysqli_error($conn);
                         }
                       } else {
                           echo "Sorry, there was an error uploading your product.";
                       }
                   }



            }






             ?>


                  <body>
                      <h2>Upload New Product </h2>

                      <div class="outer-container">
                          <form action="" method="post"
                              name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
                              <div>

                                </br><label>Product Name :</label>
                                <input type="text" name="Product_Name" value="" required>
                               </br> <label>Product SKU :</label>
                                <input type="text" name="Product_SKU" value="" required>
                              </br> <label>Product Price :</label>
                               <input type="text" name="Product_Price" value="">
                              </br> <label>Main Image:</label>
                                <input type="file" name="Product_img" value="">

                              </br> <center> <button type="submit" name="addproduct" class="btn btn-success">Add Product</button></center>


                              </div>
                          </form>
            <h3>Last 10 Products</h3>

            <?php
                $SlastupSkU = "SELECT * FROM cigarette_products ORDER BY id DESC LIMIT 10";
                $result = mysqli_query($conn, $SlastupSkU);
                $N=1 ;
            if (mysqli_num_rows($result) > 0)
            {
            ?>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Product Title</th>
                        <th>Product Price</th>
                        <th>Product SKU</th>
                        <th>Product Category</th>
                        <th>Product Image</th>
                        <th>status</th>
                      </tr>
                      </thead>
                      <tbody>
                        <?php

                        while ($row = mysqli_fetch_array($result))
                        {
                         {
                              $product_id = $row['id'];
                              $Product_Name = $row['Product_Name'];
                              $Product_SKU =$row['Product_SKU'];
                              $product_price =$row['product_price'];
                              $category =$row['category'];
                              $Product_img =$row['Product_img'];
                              $status =$row['status'];


                         ?>
                      <tr>
                        <td><?php echo $Product_Name; ?></td>
                        <td><?php echo $product_price; ?></td>
                        <td><?php echo $Product_SKU; ?></td>
                        <td><?php echo $category; ?></td>
                        <td> <img src="<?php echo $Product_img; ?>" height="80" width="150" alt="<?php echo $Product_img; ?>"> </td>
                        <td><?php echo $status; ?></td>
                      </tr>

                      <?php   }
                      } ?>
                      </tbody>
                      <tfoot>
                      <tr>
                        <th>Product Title</th>
                        <th>Product Price</th>
                        <th>Product SKU</th>
                        <th>Product Category</th>
                        <th>Product Image</th>
                        <th>status</th>
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
            <?php
            }
            ?>



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
