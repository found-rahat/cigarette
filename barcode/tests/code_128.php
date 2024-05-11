<?php

    //Include the barcode script

    include_once '../barcode.php';

    //Handle if text posted


        //Create the barcode

		$img			=	code128BarCode(bssayem, 1);
        //Start output buffer to capture the image
        //Output PNG image
		ob_start();
		imagepng($img);
		$output_img		=	ob_get_clean();//Get the image from the output buffer

?>
	<?php echo '<img src="data:image/png;base64,' . base64_encode($output_img) . '" />'; ?>
