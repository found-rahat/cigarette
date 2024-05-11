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
 <style>
 table {
float:left;
width:15%;
}
 </style>

<?php
$print = "";
  if (!empty($_GET['print'])) {
    $print=$_GET['print'];
  }


   if ($print == "print") {


      if(!empty($_POST['stock_id'])){
      // Loop to store and display values of individual checked checkbox.
      foreach($_POST['stock_id'] as $stock_id){
    echo "";

        //print new stock bar code
        $n=0;

        ?>

        <?php
            $s_products_stocks = "SELECT * FROM collect_products_stocks WHERE `stock_id` = '$stock_id'";
                      $result = mysqli_query($conn, $s_products_stocks);
                       if (mysqli_num_rows($result) > 0)
                      {
                while ($row = mysqli_fetch_array($result)) {
                  $print_stock_stocks_id= $row['id'] ;
                  $print_stock_product_id= $row['product_id'] ;
                  $print_collection_datetime= $row['collection_datetime'];

                  $timestamp = strtotime($print_collection_datetime);
                  $new_date_format = date('d/m/y', $timestamp);

                  $time = $new_date_format;
                  $n++;
                  //Create the barcode print_stock_product_id

              ?>
              <table>
                <tr>
                <td><?php  echo "<center>"."<h2>".$time;  echo "</br>";  echo $print_stock_product_id; echo " - "; echo $print_stock_stocks_id."</h2>"."</center>";?></td>
                </tr>
              </table>
              <?php

        }}//print close
      }}//multiple id


?>    <script type="text/javascript">
   function PrintData()
{
       var divToPrint1 = document.getElementById("editable");
       var divToPrint = divToPrint1;
       divToPrint.border = 1;
       divToPrint.cellSpacing = 0;
       divToPrint.cellPadding = 2;
       divToPrint.style.borderCollapse = 'collapse';

      newWin = window.open();
      newWin.document.write(getHeader());
      newWin.document.write("<h3 align='center'>Master Designation List </h3>");
     $('tr').children().eq(3).hide();
     $('table tr').find('td:eq(3)').hide();
     newWin.document.write(divToPrint.outerHTML);
     newWin.print();
     $('tr').children().eq(3).show();
     $('table tr').find('td:eq(3)').show();
     newWin.close();
}


   window.print();

   </script><?php


 }else {
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



    $create_Collection = "";
    if (!empty($_GET['openstockcollectionid'])) {
      $openstockcollectionid = $_GET['openstockcollectionid'];
    }

    if (empty($openstockcollectionid)) {


      if (!empty($_GET['create_collection'])) {
        $create_Collection = $_GET['create_collection'];
      }


    if ($create_Collection=="new") {

      $create_Collectionid = "INSERT INTO `collect_product_info` (`create_time`) values ('".$datetime."')" ;
      if(mysqli_query($conn, $create_Collectionid))
      {
       echo '';
       ?><script>
      window.location.href = "?create_collection=done";
      </script>

      <?php
      }else {
          echo "Sorry, error .". mysqli_error($conn);
      }
            // code...
  }
    if ($create_Collection=="done") {
      echo '<div class="alert bg-success alert-success text-white" role="alert">  New Collection ID Created Successfully </div>';
    }



     ?>




    <a href="?create_collection=new"><button type="button" class="btn btn-primary">Create Collection ID</button></a>


    <div class="table-responsive">
    <table class="table table-inverse">
    <thead>
        <tr>

            <th>Collection id</th>
            <th>Time</th>
            <th>Creator</th>
            <th>Results</th>
            <th>Status</th>
            <th>Products Amount</th>
            <th>Expence Amount</th>
            <th>Total Cost</th>
            <th>Return Amount</th>
            <td>Cash Amount</td>
            <td>Paid Old Due</td>
            <td>Due Amount</td>

        </tr>
    </thead>
    <tbody>
    <?php
    $Sclid = "SELECT * FROM collect_product_info ORDER BY id DESC LIMIT 30";
    $result = mysqli_query($conn, $Sclid);
    $total_Collection_products_amount = 0;
    $total_Collection_Cash_Amount = 0;
    $total_Collection_Paid_Old_Due = 0;
    $total_Collection_Return_Amount = 0;
    $total_Collection_Due_Amount = 0;
    $total_Collection_results = 0;
    $total_Collection_total_cost = 0;


    if (mysqli_num_rows($result) > 0)
    {    while ($row = mysqli_fetch_array($result)) {

     $CollectionID = $row['id'];
     $Collectioncreate_user = $row['create_user'];
     $Collectionstatus = $row['status'];
     $Collectioncreate_time = $row['create_time'];
     $Collection_expence_amount = $row['expence_amount'];
     $total_Collection_expence_amount = $Collection_expence_amount + $Collection_expence_amount ;

     $Collection_products_amount = $row['products_amount'];
     $total_Collection_products_amount  = $Collection_products_amount + $total_Collection_products_amount ;

     $Collection_Cash_Amount = $row['Cash_Amount'];
     $total_Collection_Cash_Amount = $Collection_Cash_Amount + $total_Collection_Cash_Amount ;

     $Collection_Paid_Old_Due = $row['Paid_Old_Due'];
     $total_Collection_Paid_Old_Due =  $Collection_Paid_Old_Due + $total_Collection_Paid_Old_Due ;

     $Collection_Return_Amount = $row['Return_Amount'];
     $total_Collection_Return_Amount  = $Collection_Return_Amount + $total_Collection_Return_Amount ;

     $Collection_Due_Amount = $row['Due_Amount'];
     $total_Collection_Due_Amount =  $Collection_Due_Amount + $total_Collection_Due_Amount ;

     $Collection_results = $Collection_Cash_Amount - $Collection_Paid_Old_Due - $Collection_Return_Amount + $Collection_Due_Amount - $Collection_expence_amount - $Collection_products_amount ;
     $total_Collection_results = $Collection_results + $total_Collection_results ;

     $Collection_total_cost = $Collection_products_amount + $Collection_expence_amount;
     $total_Collection_total_cost = $Collection_total_cost + $total_Collection_total_cost ;
    ?>

        <tr>

            <td><a href="?openstockcollectionid=<?php echo $CollectionID ?>&Ctagegory=Products&products_type=new_stocks"><button type="button" class="btn btn-outline-info btn-rounded"><?php echo $CollectionID ?></button></a></td>
            <td><?php echo $Collectioncreate_time ?></td>
            <td><?php echo $Collectioncreate_user ?></td>

            <?php if ($Collection_results < 0): ?> <td><span class="badge badge-pill badge-success mb-1"><?php echo $Collection_results ?></span></td>  <?php endif; ?>
            <?php if ($Collection_results > 0): ?> <td><span class="badge badge-pill badge-danger mb-1"><?php echo $Collection_results ?></span></td>  <?php endif; ?>
            <?php if ($Collection_results == 0): ?> <td><span class="badge badge-pill badge-primary mb-1"><?php echo $Collection_results ?></span></td>  <?php endif; ?>


            <td><?php echo $Collectionstatus ?></td>
            <td><span class="badge badge-pill badge-danger mb-1"><?php echo $Collection_products_amount ?></span></td>
            <td><span class="badge badge-pill badge-danger mb-1"><?php echo $Collection_expence_amount ?></span></td>
            <td><span class="badge badge-pill badge-danger mb-1"><?php echo $Collection_total_cost ?></span></td>
            <td><?php echo $Collection_Return_Amount ?></td>
            <td><?php echo $Collection_Cash_Amount ?></td>
            <td><?php echo $Collection_Paid_Old_Due ?></td>
            <td><?php echo $Collection_Due_Amount ?></td>
        </tr>
        <?php
        }}
        ?>
        <tr>

            <td></td>
            <td>Total Info:</td>
            <td></td>

            <?php if ($total_Collection_results < 0): ?> <td><span class="badge badge-pill badge-success mb-1"><?php echo $total_Collection_results ?></span></td>  <?php endif; ?>
            <?php if ($total_Collection_results > 0): ?> <td><span class="badge badge-pill badge-danger mb-1"><?php echo $total_Collection_results ?></span></td>  <?php endif; ?>
            <?php if ($total_Collection_results == 0): ?> <td><span class="badge badge-pill badge-primary mb-1"><?php echo $total_Collection_results ?></span></td>  <?php endif; ?>


            <td></td>
            <td><?php echo $total_Collection_products_amount ?></td>
            <td><span class="badge badge-pill badge-danger mb-1"><?php echo $total_Collection_expence_amount ?></span></td>
            <td><span class="badge badge-pill badge-danger mb-1"><?php echo $total_Collection_total_cost ?></span></td>
            <td><?php echo $total_Collection_Return_Amount ?></td>
            <td><?php echo $total_Collection_Cash_Amount ?></td>
            <td><?php echo $total_Collection_Paid_Old_Due ?></td>
            <td><?php echo $total_Collection_Due_Amount ?></td>
        </tr>

    </tbody>

    </table>

    </div>

    <?php } ?>

    <?php
    //update amount
    $total_amountu = 0;
    $total_quentityu = 0;
    $Spendingst = "SELECT * FROM collect_products_stock WHERE `collection_id`='$openstockcollectionid' ORDER BY id DESC";
    $result = mysqli_query($conn, $Spendingst);
    if (mysqli_num_rows($result) > 0)
    {
    $notracknumber = mysqli_num_rows($result);
    while ($row = mysqli_fetch_array($result)) {
    $Spendingst_id = $row['id'] ;
    $Spendingst_quantity = $row['quantity'] ;
    $Spendingst_Paid_Price = $row['Paid_Price'] ;
    $total_quentityu = $total_quentityu + $Spendingst_quantity ;
    $producttotalamount = $Spendingst_quantity * $Spendingst_Paid_Price ;
    $total_amountu = $total_amountu + $producttotalamount ;
    }}

    $total_expu = 0;
    $SExpence = "SELECT * FROM `collect_expence` WHERE `collection_id`='$openstockcollectionid' ORDER BY id DESC ";
    $result = mysqli_query($conn, $SExpence);
    if (mysqli_num_rows($result) > 0)
    {
    while ($row = mysqli_fetch_array($result)) {
    $exp_id = $row['id'];
    $exp_amount = $row['Amount'];
    $total_expu = $total_expu + $exp_amount ;
    }}

    $up_collection_balance = "UPDATE `collect_product_info` SET `products_amount`='$total_amountu' , `expence_amount`='$total_expu'  WHERE `id`='$openstockcollectionid'";
    if(mysqli_query($conn, $up_collection_balance)) {
    echo"";
    }else{
    echo"Error updateing record: 1". mysqli_error($conn);
    }


    ?>

    <?php
    if (!empty($openstockcollectionid)) {


    ?>    <a href="./add_server_product.php" target="_blank"><button type="button" class="btn btn-info"><i class="ik ik-share"></i>Upload New Product</button></a><?php


    $Sclid = "SELECT * FROM collect_product_info WHERE  `id`='$openstockcollectionid' ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($conn, $Sclid);
    if (mysqli_num_rows($result) > 0)
    {    while ($row = mysqli_fetch_array($result)) {

    $Collection_expence_amount = $row['expence_amount'];
    $Collection_products_amount = $row['products_amount'];
    $Collection_Suppliers_amount = $row['Suppliers_amount'];


    }}
    ?><center>
    <a href="?openstockcollectionid=<?php echo $openstockcollectionid ?>&Ctagegory=totalinfo"><button type="button" class="btn btn btn-outline-info">Total Info</button></a>
    <a href="?openstockcollectionid=<?php echo $openstockcollectionid ?>&Ctagegory=Products&products_type=new_stocks"><button type="button" class="btn btn-outline-success">Products(<?php echo $Collection_products_amount ?>)</button></a>
    <a href="?openstockcollectionid=<?php echo $openstockcollectionid ?>&Ctagegory=Expence"><button type="button" class="btn btn-outline-danger">Expence(<?php echo $Collection_expence_amount ?>)</button></a>
    <a href="?openstockcollectionid=<?php echo $openstockcollectionid ?>&Ctagegory=Suppliers"><button type="button" class="btn btn-outline-secondary">Suppliers(<?php echo $Collection_Suppliers_amount ?>)</button></a>
    </center><?php
    $Ctagegory = $_GET["Ctagegory"];

    if ($Ctagegory == "totalinfo") {

    $editid = $_GET['editid'];

    $New_Cash_Amount = $_POST["Cash_Amount"];
    $New_Return_Amount = $_POST["Return_Amount"];

    if (isset($_POST['update_info'])) {
    $up_update_info = "UPDATE `collect_product_info` SET `Cash_Amount`='$New_Cash_Amount' , `Return_Amount`='$New_Return_Amount' WHERE `id` = '$openstockcollectionid'";
    if(mysqli_query($conn, $up_update_info)) {
    echo"New Info Updated";
    }else{
    echo"Error updateing record: ". mysqli_error($conn);
    }

    ?><script>
    window.location.replace("?openstockcollectionid=<?php echo $openstockcollectionid ?>&Ctagegory=totalinfo");
    </script> <?php
    }



    $Sclid = "SELECT * FROM `collect_product_info` WHERE `id`='$openstockcollectionid' ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($conn, $Sclid);

    if (mysqli_num_rows($result) > 0)
    {    while ($row = mysqli_fetch_array($result)) {

    $CollectionID = $row['id'];
    $Collectioncreate_user = $row['create_user'];
    $Collectionstatus = $row['status'];
    $Collectioncreate_time = $row['create_time'];
    $Collection_expence_amount = $row['expence_amount'];
    $Collection_products_amount = $row['products_amount'];
    $Collection_Cash_Amount = $row['Cash_Amount'];
    $Collection_Paid_Old_Due = $row['Paid_Old_Due'];
    $Collection_Return_Amount = $row['Return_Amount'];
    $Collection_Due_Amount = $row['Due_Amount'];
    $Collection_Suppliers_amount = $row['Suppliers_amount'];


    $total_amount_pc = $Collection_expence_amount + $Collection_products_amount ;
    $Shortorextra = $Collection_Cash_Amount - $Collection_Paid_Old_Due - $Collection_Return_Amount + $Collection_Due_Amount - $Collection_expence_amount - $Collection_products_amount ;



    ?>


    <div class="row">
    <div class="card" style="min-height: 100%;">

    <?php $yrdata= strtotime($Collectioncreate_time); ?>

        <div class="card-body ">
                              <?php $yrdata= strtotime($Collectioncreate_time); ?>
                    <div class="day-number"><?php echo "". date("d", $yrdata); ?></div>
                    <div class="date-right">
                        <div class="day-name"><?php echo "". date("l", $yrdata); ?></div>
                        <div class="month"><?php  echo date('F Y', $yrdata); ?></div>
                    </div>


            <br>
            <?php
            if ($Collectionstatus == "pending") {
              if ($editid == 20689) {
                echo "";
              }else {
                ?> <a href="?openstockcollectionid=<?php echo $openstockcollectionid ?>&Ctagegory=totalinfo&editid=20689"><button type="button" class="btn btn-dark"><i class="ik ik-edit-2"></i>Edit</button></a> <?php
              }
                  }
             ?>

             <form class="" action="" method="post">
              <?php if ($editid == 20689): ?>
               <button type="submit" name="update_info" class="btn btn-success"><i class="ik ik-check-circle"></i>UPDATE</button>
               <?php endif; ?>

            <ul>
              <li>
                  <div class="bullet bg-green"></div>
                  <div class="time">Cash/Card</div>
                  <div class="desc">
                      <h3>Cash Amount:</h3>
                      <h4><span class="badge badge-pill badge-primary mb-1"><?php echo $Collection_Cash_Amount ?></span></h4>
                      <?php if ($editid == 20689): ?>
                        <input type="number" name="Cash_Amount" value="<?php echo $Collection_Cash_Amount ?>">
                      <?php endif; ?>

                  </div>
              </li>
                  <li>
                  <div class="bullet bg-green"></div>
                  <div class="time">Paid Old TK</div>
                  <div class="desc">
                      <h3>Paid Old Due:</h3>
                      <h4><span class="badge badge-pill badge-danger mb-1"><?php echo $Collection_Paid_Old_Due ?></span></h4>
                  </div>
                </li>
                <li>
                    <div class="bullet bg-blue"></div>
                    <div class="time"><?php echo $CollectionID ?></div>
                    <div class="desc">
                        <h3>Products</h3>
                        <h4><span class="badge badge-pill badge-danger mb-1"><?php echo $Collection_products_amount ?></span></h4>
                    </div>
                </li>
                <li>
                    <div class="bullet bg-pink"></div>
                    <div class="time"><?php echo $Collectioncreate_user ?></div>
                    <div class="desc">
                        <h3>Expence</h3>
                        <h4><span class="badge badge-pill badge-danger mb-1"><?php echo $Collection_expence_amount ?></span></h4>
                    </div>
                </li>
                <li>
                    <div class="bullet bg-orange"></div>
                    <div class="time"><?php echo $Collectionstatus ?></div>
                    <div class="desc">
                        <h3>Total Amount Paid</h3>
                        <h4><span class="badge badge-pill badge-warning mb-1"><?php echo $total_amount_pc ?></span></h4>
                    </div>
                </li>
                <li>
                    <div class="bullet bg-green"></div>
                    <div class="time">Return TK</div>
                    <div class="desc">
                        <h3>Return Amount:</h3>
                        <h4><span class="badge badge-pill badge-danger mb-1"><?php echo $Collection_Return_Amount ?></span></h4>
                        <?php if ($editid == 20689): ?>
                          <input type="number" name="Return_Amount" value="<?php echo $Collection_Return_Amount ?>">
                        <?php endif; ?>
                    </div>
                </li>
                <li>
                    <div class="bullet bg-green"></div>
                    <div class="time">Baki TK</div>
                    <div class="desc">
                        <h3>Due Amount:</h3>
                        <h4><span class="badge badge-pill badge-primary mb-1"><?php echo $Collection_Due_Amount ?></span></h4>
                    </div>
                </li>
                <li>
                    <div class="bullet bg-green"></div>
                    <div class="time">Final Results</div>
                    <div class="desc">
                        <h3>Short Or Extra TK:</h3>
                        <?php if ($Shortorextra < 0): ?> <h4><span class="badge badge-pill badge-success mb-1"><?php echo $Shortorextra ?> TK Extra</span></h4>  <?php endif; ?>
                        <?php if ($Shortorextra > 0): ?> <h4><span class="badge badge-pill badge-danger mb-1"><?php echo $Shortorextra ?> Tk Short</span> </h4>  <?php endif; ?>
                        <?php if ($Shortorextra == 0): ?> <h4><span class="badge badge-pill badge-primary mb-1"><?php echo $Shortorextra ?> Accounts Complete</span> </h4>  <?php endif; ?>


                    </div>
                </li>
            </ul>
    </form>
        </div>
    </div>
    </div>


    <?php
    }}
    }






    if ($Ctagegory == "Products") {
    ?><div class="btn-group" role="group" aria-label="Basic example">
    <a href="?openstockcollectionid=<?php echo $openstockcollectionid ?>&Ctagegory=Products&products_type=new_stocks"><button type="button" class="btn btn-outline-secondary">New Stocks</button></a>
    <a href="?openstockcollectionid=<?php echo $openstockcollectionid ?>&Ctagegory=Products&products_type=all_products"><button type="button" class="btn btn-outline-secondary">ALL Products</button></a>
    </div><?php
    $products_type = $_GET["products_type"];

    if ($products_type =="new_stocks" ) {
      if (!empty($_GET['deletestockid'])) {
        $deletestockid = $_GET['deletestockid'] ;
      }
    
    if (!empty($deletestockid)) {
    // DELETE stock_results
    $dqeletestockid = "DELETE FROM `collect_products_stocks` WHERE `stock_id`='$deletestockid'";
    if(mysqli_query($conn, $dqeletestockid)) {
    echo"";
    $sdeletestockid = "Done";
    }else{
    echo"Error deleting record: ". mysqli_error($conn);
    }

    if ($sdeletestockid == "Done") {
    $dqeletestockid = "DELETE FROM `collect_products_stock` WHERE `id`='$deletestockid'";
    if(mysqli_query($conn, $dqeletestockid)) {
     echo"Delete Successfully";
    }else{
    echo"Error deleting record: ". mysqli_error($conn);
    }
    }

    }
    if (!empty($_GET['changepriceid'])) {
      $changepriceid = $_GET['changepriceid'] ;
    }

    
    if(isset($new_update_price)){
      $new_update_price = $_POST['new_update_price'];
    }
    

    if (!empty($new_update_price)) {

    // UPDATE stock_results
    $up_products_stocks = "UPDATE `collect_products_stocks` SET `buy_Price`='$new_update_price' WHERE `stock_id`='$changepriceid'";
    if(mysqli_query($conn, $up_products_stocks)) {
    echo"</br>New Price";
    }else{
    echo"Error updateing record:1 ". mysqli_error($conn);
    }

    // UPDATE stock_results
    $up_products_stock = "UPDATE `collect_products_stock` SET `Paid_Price`='$new_update_price' WHERE `id`='$changepriceid'";
    if(mysqli_query($conn, $up_products_stock)) {
    echo" Update Successfully";
    }else{
    echo"Error updateing record:1 ". mysqli_error($conn);
    }

    }

    if (!empty($changepriceid)) {
    $Schangeprice = "SELECT * FROM collect_products_stock WHERE `id`='$changepriceid' ORDER BY id DESC";
    $result_cp = mysqli_query($conn, $Schangeprice);
     if (mysqli_num_rows($result_cp) > 0)
    {  while ($row_cp = mysqli_fetch_array($result_cp)) {
      $changepriceid_id = $row_cp['id'] ;
      $changepriceid_Product_id = $row_cp['product_id'] ;
      $changepriceid_token_id= $row_cp['token_id'] ;
      $changepriceid_Product_Name = $row_cp['Product_Name'] ;
      $changepriceid_Product_SKU = $row_cp['Product_SKU'] ;
      $changepriceid_Product_img = $row_cp['Product_img'] ;
      $changepriceid_quantity = $row_cp['quantity'] ;
      $changepriceid_Paid_Price = $row_cp['Paid_Price'] ;

    }}
    ?>

    <form class="" action="" method="post" enctype="multipart/form-data">
    <label>Update price : </label>
    <span class="badge badge-pill badge-success mb-1"><?php echo $changepriceid_Product_Name ?></span>
    <img src="<?php echo  $changepriceid_Product_img; ?>" alt="<?php echo  $changepriceid_Product_img; ?>" width="100" height="100">
    <input type="text" class="form-control" style="width:20%!important" name="new_update_price" value="<?php echo $changepriceid_Paid_Price ?>"> <br>
    <button type="submit" class="btn btn-warning" name="update_price"> Update Price</button>
    </form>
    <?php
    }
    ?>


    <form class="" action="?print=print" method="post">
    <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"><h3>New Products</h3></br><input type="submit"  name="print_barcode" value="Print All Selcted" class="btn btn-secondary"></div>


            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
    <tr>

    <th>No</th>
    <th><input type="checkbox" name="selectAll" id="checkall" value="select all"></th>
    <th>Product ID</th>
    <th>Barcode</th>
    <th>Image</th>
    <th>Quantity</th>
    <th>Buy price</th>
    <th>Delete</th>
    <th>Edit Price</th>
    <th>Date</th>
    <th>SKU</th>
    <th>Name</th>

    </tr>
    </thead>
    <tbody>


    <?php
    $n = 1;
    $total_quentity = 0;
    $total_amount = 0;
    $Spendingst = "SELECT * FROM collect_products_stock WHERE `collection_id`='$openstockcollectionid' ORDER BY id DESC";
          $result = mysqli_query($conn, $Spendingst);
           if (mysqli_num_rows($result) > 0)
          {
            $notracknumber = mysqli_num_rows($result);
    while ($row = mysqli_fetch_array($result)) {
      $Spendingst_id = $row['id'] ;
      $Spendingst_Product_id = $row['product_id'] ;
      $Spendingst_token_id= $row['token_id'] ;
      $Spendingst_stock_id= $row['id'] ;
      $Spendingst_Product_Name = $row['Product_Name'] ;
      $Spendingst_Product_SKU = $row['Product_SKU'] ;
      $Spendingst_Product_img = $row['Product_img'] ;
      $Spendingst_quantity = $row['quantity'] ;
      $Spendingst_Paid_Price = $row['Paid_Price'] ;
      $Spendingst_UpdateDate = $row['Update_Date'] ;
      $Spendingst_stock = $row['stock'] ;

      $total_quentity = $total_quentity + $Spendingst_quantity ;
      $producttotalamount = $Spendingst_quantity * $Spendingst_Paid_Price ;
      $total_amount = $total_amount + $producttotalamount ;
    ?>
    <tr>
    <td><?php echo $n++ ; ?> </td>
    <td><input type="checkbox" class="checkitem" name="stock_id[]" value="<?php echo $Spendingst_stock_id ?>"></td>
    <td><?php echo  $Spendingst_Product_id; ?></td>
    <td><a href="print_barcode.php?collection_id=<?php echo $openstockcollectionid ?>&product_id=<?php echo $Spendingst_Product_id ?>&stock_id=<?php echo $Spendingst_id ?>&token_id=<?php echo $Spendingst_token_id ?>" target="_blank"><button type="button" class="btn btn-secondary"><i class="ik ik-clipboard"></i>Print</button></a></td>

    <td><img src="<?php echo  $Spendingst_Product_img; ?>" alt="<?php echo  $Spendingst_Product_img; ?>" width="100" height="100"></td>

    <td><?php echo  $Spendingst_quantity; ?></td>
    <td><?php echo  $Spendingst_Paid_Price; ?></td>
    <?php if ($Spendingst_stock == "pending" ): ?>
      <td><a href="?openstockcollectionid=<?php echo $openstockcollectionid ?>&Ctagegory=Products&products_type=new_stocks&deletestockid=<?php echo $Spendingst_id; ?>" onclick="return confirmation()"><button type="button" class="btn btn-danger"><i class="ik ik-info"></i>DELETE</button></a></td>
      <td><a href="?openstockcollectionid=<?php echo $openstockcollectionid ?>&Ctagegory=Products&products_type=new_stocks&changepriceid=<?php echo $Spendingst_id; ?>" onclick="return confirmation()"><button type="button" class="btn btn-warning"><i class="ik ik-edit-2"></i></i>Change Price</button></a></td>

    <?php else: ?>
    <td></td>
    <?php endif; ?>
    <td><?php echo  $Spendingst_UpdateDate; ?></td>
    <td><?php echo  $Spendingst_Product_SKU; ?></td>

    <td><?php echo  $Spendingst_Product_Name; ?></td>


    </tr>


    <?php
    }}
    ?>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    <center><div class="alert bg-dark alert-dark text-white" role="alert">Total Quentity: <span class="badge badge-pill badge-success mb-1"><?php echo $total_quentity ?></span>  Total Products Amount: <span class="badge badge-pill badge-success mb-1"><?php echo $total_amount ?></span> </div></center>

    </form>

    <?php

    }//new_stocks


    ?>


    <?php

    if ($products_type =="all_products" ) {

    ?>
    <tbody>
    <div class="row">
      <div class="col-md-12">
          <div class="card">

              <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
              <th>ID</th>
              <th>Name</th>
              <th>img</th>
              <th>Add Stock</th>
              <th>SKU</th>
          </tr>
        </thead>
        <tbody>
    <?php
    $SlastupSkU = "SELECT * FROM cigarette_products ORDER BY id DESC";
    $result = mysqli_query($conn, $SlastupSkU);
    $N=1 ;
    if (mysqli_num_rows($result) > 0)
    {
    while ($row = mysqli_fetch_array($result)) {
      $id = $row['id'];
      $Product_Name = $row['Product_Name'];
      $Product_SKU = $row['Product_SKU'];
      $Product_img = $row['Product_img'];


    ?>

        <tr>
          <td><?php echo $id ?></td>
          <td><?php  echo $row['Product_Name']; ?></td>
          <td><img src="<?php  echo $row['Product_img']; ?>" alt="<?php  echo $row['Product_Name']; ?>" width="100" height="100"></td>
          <td><a href="add_stock_collect.php?openstockcollectionid=<?php echo $openstockcollectionid ?>&newstockid=<?php echo $id; ?> " target="_blank"><button type="button" class="btn btn-success"><i class="ik ik-check-circle"></i>Add Stock</button></a>  </td>
          <td><?php  echo $row['Product_SKU']; ?></td>
        </tr>

    <?php

    }
    ?>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    ?><?php
    }

    }//all products


    }

    if ($Ctagegory == "Expence") {

    $deleteexpid = $_GET['deleteexpid'] ;
    if (!empty($deleteexpid)) {
    // DELETE stock_results
    $dqeleteexpid = "DELETE FROM `collect_expence` WHERE `id`='$deleteexpid'";
    if(mysqli_query($conn, $dqeleteexpid)) {
    echo"";
    }else{
    echo"Error deleting record: ". mysqli_error($conn);
    }

    }



    $Amount = $_POST['Amount'];
    $subject = $_POST['subject'];
    $Discription = $_POST['Discription'];
    $product_collection = "product_collection";

    if(isset($_POST["add_amount"])){
    $new_expence = "INSERT INTO `collect_expence`(collection_id, Amount , subject, discription, expence_user, create_time, create_date, Category)
    values('".$openstockcollectionid."','".$Amount."','".$subject."','".$Discription."','".$myusername."','".$datetime."','".$date2."','".$product_collection."')";
    if(mysqli_query($conn, $new_expence))
    {
    echo "New Expence Updated";
    }     else {
    echo "Sorry,, there was an error uploading your product.".mysqli_error($conn);
    }

    }

    ?>
    <div class="card-body">
                              <form class="forms-sample" action="" method="post">
                                <div class="form-group row">
                                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Amount</label>
                                    <div class="col-sm-9">
                                              <input type="number" name="Amount" value="" class="form-control" id="exampleInputEmail2" placeholder="Amount">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">subject</label>
                                    <div class="col-sm-9">
                                              <input type="text" name="subject" value="" class="form-control" id="exampleInputEmail2" placeholder="subject">
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Discription</label>
                                      <div class="col-sm-9">
                                                <input type="text" name="Discription" value="" class="form-control" id="exampleInputEmail2" placeholder="Discription">
                                      </div>
                                    </div>
                                    <input type="submit" name="add_amount" value="Update Amount" class="btn btn-primary mr-2">

                              </form>
                          </div>


    <div class="card-body">
      <table id="advanced_table" class="table">
          <thead>
              <tr>


                  <th>NO.</th>
                  <th>Amount</th>
                  <th>Subject</th>
                  <th>Discription</th>
                  <th>Status</th>
                  <th>Delete</th>

              </tr>
          </thead>
          <tbody>
            <?php
            $n = 1 ;
            $SExpence = "SELECT * FROM `collect_expence` WHERE  `collection_id`='$openstockcollectionid' ORDER BY id DESC ";
                      $result = mysqli_query($conn, $SExpence);
                       if (mysqli_num_rows($result) > 0)
                      {
                while ($row = mysqli_fetch_array($result)) {
                  $exp_id = $row['id'];
                  $exp_amount = $row['Amount'];
                  $exp_subject = $row['subject'];
                  $exp_discription = $row['discription'];
                  $exp_status = $row['status'];
                  $total_exp = $total_exp + $exp_amount ;


            ?>
            <tr>
              <td><?php echo $n++; ?></td>
              <td><?php echo $exp_amount ?></td>
              <td><?php echo $exp_subject ?></td>
              <td><?php echo $exp_discription ?></td>
              <td><?php echo $exp_status ?></td>
              <td><a href="?openstockcollectionid=<?php echo $openstockcollectionid ?>&Ctagegory=Expence&deleteexpid=<?php echo $exp_id; ?>" onclick="return confirmation()"><button type="button" class="btn btn-danger"><i class="ik ik-info"></i>DELETE</button></a></td>

            </tr>






    <?php
    }}
    ?>
    </tbody>
    </table>
    </div>

    <center><div class="alert bg-dark alert-dark text-white" role="alert">  Total Expence: <span class="badge badge-pill badge-danger mb-1"><?php echo $total_exp ?></span> </div></center>




    <?php



    }

    if ($Ctagegory == "Suppliers") {

    $deleteexpid = $_GET['deleteexpid'] ;
    if (!empty($deleteexpid)) {
    // DELETE stock_results
    $dqeleteexpid = "DELETE FROM `Suppliers` WHERE `id`='$deleteexpid'";
    if(mysqli_query($conn, $dqeleteexpid)) {
    echo"";
    }else{
    echo"Error deleting record: ". mysqli_error($conn);
    }

    }



    $paid_Amount = $_POST['paid_Amount'];
    $due_Amount = $_POST['due_Amount'];
    $Supplier_name = $_POST['Supplier_name'];
    $Suppliers_address = $_POST['Suppliers_address'];
    $memo_number = $_POST['memo_number'];
    $product_collection = "product_collection";

    if(isset($_POST["add_amount_Suppliers"])){
    $new_expenceSuppliers = "INSERT INTO `Suppliers`(collection_id, paid_Amount, due_amount, Supplier_name, Suppliers_address, due_user, create_time, create_date, memo_number, Category)
    values('".$openstockcollectionid."','".$paid_Amount."','".$due_Amount."','".$Supplier_name."','".$Suppliers_address."','".$myusername."','".$datetime."','".$date2."','".$memo_number."','".$product_collection."')";
    if(mysqli_query($conn, $new_expenceSuppliers))
    {
    echo "New Suppliers Updated";
    }     else {
    echo "Sorry,, there was an error Suppliers Info.".mysqli_error($conn);
    }

    }

    ?>

    <?php
    $newaddid = $_GET['newaddid'];
    $addid = $_GET['addid'];
    if (empty($addid)) {
    $addid = $newaddid ;
    }
    if (!empty($addid)) {
    $SExpence = "SELECT * FROM `Suppliers` WHERE  `Supplier_name`='$addid' ORDER BY id DESC ";
    $result = mysqli_query($conn, $SExpence);
     if (mysqli_num_rows($result) > 0)  {
    while ($row = mysqli_fetch_array($result)) {
      $addid_Supplier_name = $row['Supplier_name'];
      $addid_Suppliers_address = $row['Suppliers_address'];
      }}
    }

    if (!empty($addid)) {
    ?>

                            <div class="card-body">
                              <form class="forms-sample" action="" method="post">
                                <div class="form-group row">
                                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Supplier Name</label>
                                    <div class="col-sm-9">
                                              <input type="text" name="Supplier_name" value="<?php echo $addid_Supplier_name ?>" class="form-control" id="exampleInputEmail2" placeholder="Supplier_name">
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Suppliers Address</label>
                                      <div class="col-sm-9">
                                                <input type="text" name="Suppliers_address" value="<?php echo $addid_Suppliers_address ?>" class="form-control" id="exampleInputEmail2" placeholder="Suppliers_address">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Paid Amount</label>
                                        <div class="col-sm-9">
                                                  <input type="number" name="paid_Amount" value="0" class="form-control" id="exampleInputEmail2" placeholder="Amount">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Due Amount</label>
                                        <div class="col-sm-9">
                                                  <input type="number" name="due_Amount" value="0" class="form-control" id="exampleInputEmail2" placeholder="Amount">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Memo Number</label>
                                        <div class="col-sm-9">
                                                  <input type="text" name="memo_number" value="" class="form-control" id="exampleInputEmail2" placeholder="memo_number">
                                        </div>
                                      </div>
                                    <input type="submit" name="add_amount_Suppliers" value="Update Amount" class="btn btn-primary mr-2">

                              </form>
                          </div>


    <?php } ?>


                                  <div class="card">
                                      <div class="card-header d-block">
                                          <h3>Today Info</h3>
                                      </div>
                                      <div class="card-body p-0 table-border-style">
                                          <div class="table-responsive">
                                              <table class="table">
          <thead>
              <tr>
                  <th>NO.</th>
                  <th>Supplier_name</th>
                  <th>Suppliers_address</th>
                  <th>Paid Amount</th>
                  <th>Due Amount</th>
                  <th>Memo number</th>
                  <th>Delete</th>

              </tr>
          </thead>
          <tbody>

            <?php
            $n = 1 ;
            $SExpence = "SELECT * FROM `Suppliers` WHERE  `collection_id`='$openstockcollectionid' ORDER BY id DESC ";
                      $result = mysqli_query($conn, $SExpence);
                       if (mysqli_num_rows($result) > 0)
                      {
                while ($row = mysqli_fetch_array($result)) {
                  $Suppliers_id = $row['id'];
                  $Suppliers_paid_Amount = $row['paid_Amount'];
                  $Suppliers_due_amount = $row['due_amount'];
                  $Suppliers_memo_number= $row['memo_number'];
                  $Suppliers_Supplier_name = $row['Supplier_name'];
                  $Suppliers_Suppliers_address = $row['Suppliers_address'];
                  $total_due_paid = $total_due_paid + $Suppliers_paid_Amount ;
                  $total_new_due = $total_new_due + $Suppliers_due_amount ;
                  $total_Suppliers_amount = $total_new_due + $total_due_paid ;




            ?>
            <tr>
              <td><?php echo $n++; ?></td>
              <td><?php echo $Suppliers_Supplier_name ?></td>
              <td><?php echo $Suppliers_Suppliers_address ?></td>
              <td><?php echo $Suppliers_paid_Amount ?></td>
              <td><?php echo $Suppliers_due_amount ?></td>
              <td><?php echo $Suppliers_memo_number ?></td>
              <td><a href="?openstockcollectionid=<?php echo $openstockcollectionid ?>&Ctagegory=Suppliers&deleteexpid=<?php echo $Suppliers_id; ?>" onclick="return confirmation()"><button type="button" class="btn btn-danger"><i class="ik ik-info"></i>DELETE</button></a></td>

            </tr>






    <?php
    }}
    ?>

    </tbody>
    </table>
    </div>
    </div>
    </div>
    <?php
    $up_collection_Suppliers_amount = "UPDATE `collect_product_info` SET `Suppliers_amount`='$total_Suppliers_amount' , `Paid_Old_Due`='$total_due_paid', `Due_Amount`='$Suppliers_due_amount'  WHERE `id`='$openstockcollectionid'";
    if(mysqli_query($conn, $up_collection_Suppliers_amount)) {
    echo"";
    }else{
    echo"Error updateing record: 1". mysqli_error($conn);
    }
    ?>



    <hr>


    <div class="alert alert-success" role="alert">
    <a href="?openstockcollectionid=<?php echo $openstockcollectionid ?>&Ctagegory=Suppliers&newaddid=000" onclick="return confirmation()"><button type="button" class="btn btn-primary"><i class="ik ik-info"></i>New Supplier</button></a>

            <div class="card-body">
                <table id="advanced_table" class="table">
                    <thead>
                        <tr>

                            <th  style="width:1%!important">NO.</th>
                            <th  style="width:1%!important">Add</th>
                            <th  style="width:5%!important">Supplier_name</th>
                            <th  style="width:2%!important">Total Paid Amount</th>
                            <th  style="width:2%!important">Total Due Amount</th>
                            <th  style="width:2%!important">Results</th>
                            <th  style="width:10%!important">Suppliers_address</th>

                        </tr>
                    </thead>
                    <tbody>

                      <?php
                      $n = 1 ;
                      $SSupplier_name = "SELECT DISTINCT Supplier_name,Suppliers_address FROM `Suppliers` ORDER BY id DESC ";
                                $resultSN = mysqli_query($conn, $SSupplier_name);
                                 if (mysqli_num_rows($resultSN) > 0)  {
                          while ($rowSN = mysqli_fetch_array($resultSN)) {
                            $Supplier_name_Supplier_name = $rowSN['Supplier_name'];
                            $Supplier_name_Suppliers_address = $rowSN['Suppliers_address'];

                                    $Supplier_amount_due_amount = 0 ;
                                    $Sdue_amount = "SELECT SUM(due_amount) FROM `Suppliers` WHERE `Supplier_name`='$Supplier_name_Supplier_name' ORDER BY id DESC ";
                                              $resultdue_amount = mysqli_query($conn, $Sdue_amount);
                                               if (mysqli_num_rows($resultdue_amount) > 0)  {
                                        while ($rowdue_amount = mysqli_fetch_array($resultdue_amount)) {
                                            $Supplier_amount_due_amount = $rowdue_amount['SUM(due_amount)'];
                                                  }}

                                    $Supplier_amount_paid_Amount = 0 ;
                                    $Spaid_Amount = "SELECT SUM(paid_Amount) FROM `Suppliers` WHERE `Supplier_name`='$Supplier_name_Supplier_name' ORDER BY id DESC ";
                                    $resultpaid_Amount = mysqli_query($conn, $Spaid_Amount);
                                    if (mysqli_num_rows($resultpaid_Amount) > 0)  {
                                      while ($rowpaid_Amount = mysqli_fetch_array($resultpaid_Amount)) {
                                        $Supplier_amount_paid_Amount = $rowpaid_Amount['SUM(paid_Amount)'];
                                      }}
                                      $Supplier_total_due = $Supplier_amount_due_amount - $Supplier_amount_paid_Amount ;

                      ?>
                      <tr>
                        <td><?php echo $n++; ?></td>
                        <td><a href="?openstockcollectionid=<?php echo $openstockcollectionid ?>&Ctagegory=Suppliers&addid=<?php echo $Supplier_name_Supplier_name; ?>" onclick="return confirmation()"><button type="button" class="btn btn-success"><i class="ik ik-info"></i>PAy /Due</button></a></td>
                        <td><?php echo $Supplier_name_Supplier_name ?></td>
                        <td><?php echo $Supplier_amount_paid_Amount ?></td>
                        <td><?php echo $Supplier_amount_due_amount ?></td>
                        <td><a href="supplier_results.php?supplyer_name=<?php echo $Supplier_name_Supplier_name ?>" class="badge badge-danger mb-1"><?php echo $Supplier_total_due ?></a></td>
                        <td><?php echo $Supplier_name_Suppliers_address ?></td>

                      </tr>






            <?php
            }}
            ?>

          </table>
      </div>
    </div>


    <center><div class="alert bg-dark alert-dark text-white" role="alert">  Today Suppliers : <span class="badge badge-pill badge-success mb-1"><?php echo $total_due_paid ?> Paid </span> & <span class="badge badge-pill badge-danger mb-1"><?php echo $total_new_due ?> Due </span> </div></center>




    <?php



    }

    }

    ?>




    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

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
<script type="text/javascript" language="javascript">// <![CDATA[
  $("#checkall").change(function(){
    $(".checkitem").prop("checked",$(this).prop("checked"))
  })
  $(".checkitem").change(function(){
    if($(this).prop("checked")==false){
      $("#checkall").prop("checked",false)
    }
      if($(".checkitem:checked").length == $(".checkbox").length){
          $("#checkall").prop("checked",true)
      }
  })
</script>
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='https://www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>

</body>
</html>

<?php } ?>
