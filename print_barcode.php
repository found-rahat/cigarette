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


  </body>
</html>

<?php
$collection_id= $_GET['collection_id'] ;
$product_id= $_GET['product_id'] ;
$stock_id= $_GET['stock_id'] ;
$token_id= $_GET['token_id'] ;


    //Include the barcode script

    include_once $backpath.'barcode/barcode.php';

//print new stock bar code
$n=0;

?><div class="container">

<?php
    $s_products_stocks = "SELECT * FROM collect_products_stocks WHERE `stock_id` = '$stock_id' AND `product_id` = '$product_id' AND `collection_id` = '$collection_id' AND `token_id` = '$token_id'";
              $result = mysqli_query($conn, $s_products_stocks);
               if (mysqli_num_rows($result) > 0)
              {
        while ($row = mysqli_fetch_array($result)) {
          $print_stock_stocks_id= $row['id'] ;
          $print_stock_product_id= $row['product_id'] ;
          $barcode_print = "BB-".$print_stock_stocks_id;
          $n++;
          //Create the barcode

      $img			=	code128BarCode($barcode_print, 1);
          //Start output buffer to capture the image
          //Output PNG image
      ob_start();
      imagepng($img);
      $output_img		=	ob_get_clean();//Get the image from the output buffer



      ?>
      <!-- <table><tr>
        <td><?php  echo $print_stock_product_id;  echo "-";  echo $print_stock_stocks_id; echo "</br>"; echo '<img src="data:image/png;base64,' . base64_encode($output_img) . '"width="90" height="28" />'; ?></td>
        </tr>
        </table> -->
      <?php

}}

?>
</div>


<?php

//print ableavile stock bar code

$stockproduct_id= $_GET['product_id'] ;

$s_products_stocks = "SELECT * FROM collect_products_stocks WHERE `stock_id` = '$stock_id' AND `product_id` = '$product_id' AND `collection_id` = '$collection_id' AND `token_id` = '$token_id'";
          $result = mysqli_query($conn, $s_products_stocks);
           if (mysqli_num_rows($result) > 0)
          {
    while ($row = mysqli_fetch_array($result)) {
      $print_stock_stocks_id= $row['id'] ;
      $print_stock_product_id= $row['product_id'] ;
      $print_collection_datetime= $row['collection_datetime'] ;

      //Create the barcode

  // $img			=	code128BarCode($print_stock_stocks_id, 1);
  //     //Start output buffer to capture the image
  //     //Output PNG image
  // ob_start();
  // imagepng($img);
  // $output_img		=	ob_get_clean();//Get the image from the output buffer
  ?>
  <table><tr>
    <td><?php  echo "<center>"."<h4>".$print_stock_product_id;  echo " -- ";  echo $print_stock_stocks_id; echo "</br>"; echo $print_collection_datetime."</h4>"."</center>"; ?></td>
    </tr>
    </table>
  <?php


}}


    ?>
    <script type="text/javascript">
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

    <!--
    window.print();
    //-->
    </script>
