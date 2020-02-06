<?php
/**
* Template Name: upload page
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
?>


<?php 
include 'dbconnect.php';
// require_once('../../../wp-load.php');
$path = preg_replace('/wp-content(?!.*wp-content).*/','',__DIR__);
include($path.'wp-load.php');
echo "<script>console.log('test');</script>";

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 101 Template</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/tables/wp-content/themes/twentynineteen/css/tables.css" />
    <?php //echo get_template_directory_uri();?>
  </head>
  <body>

  <?php 
  if( $_FILES["test"]){
      echo "submit";
      print_r($_FILES["test"]);
  }
  
  ?>


    <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="test" />
    <input type="submit" value="submit" />
</form>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<script src="<?php echo get_template_directory_uri();?>/js/tables.js"></script>
    
  </body>
</html>