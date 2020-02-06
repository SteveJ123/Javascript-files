<?php
/**
* Template Name: Full Width Page
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

<div class="container-fluid">


<!-- /tables/wp-content/themes/twentynineteen/load-name.php -->

<!-- /tables/wp-content/themes/twentynineteen/load-name.php -->


<form id="detail" class="ajax" action="/wp-content/themes/twentynineteen/template.php" method="post" enctype="multipart/form-data">
<div class="row border">
    <div class="col-lg-6">
        <div class="row border major-complaint-margin">
  <div class="col-lg-4 details-text-align">First Name
  <input type="text" id="firstnamesearch" name="firstname">

  </div>
  <div class="col-lg-4 details-text-align">Second Name
  <input type="text" id="secondnamesearch" name="secondname">
  </div>  
  <?php  
    
  
  if($_POST['firstname'] && $_POST['age'] == 0){
  // echo "<script>console.log($_POST['name'])</script>";
  // echo $_POST['name'];
  $searchq = $_POST['firstname'];
  
  print_r($_FILES['bloodtest']['name']);
    echo "test";
    echo "<script>console.log('submit');</script>";
    echo "<script>console.log('" . json_encode($_FILES['bloodtest']['name']) . "');</script>";

  ?>
  
  <table style="width:100%; border: 1px solid gray;">
   <tr style="width:100%; border: 1px solid gray;">
   <td style="width:33.3%; border: 1px solid gray;"> Record</td> 
   <td style="width:33.3%; border: 1px solid gray;"> Name</td>
    <td style="width:33.3%; border: 1px solid gray;">Date</td>
    <td style="width:33.3%; border: 1px solid gray;">age</td>
    <td style="width:33.3%; border: 1px solid gray;"> clientnumber</td>           
   </tr>
   
   <?php
  global $wpdb;
  $querys = $wpdb->get_results("SELECT * FROM wp_my_table WHERE name = '$searchq' ORDER BY date DESC");
?>

<?php foreach($querys as $query){?>
      <tr>    
      <td style="width:25%; border: 1px solid gray;" id="recordnumber"> <?php echo $query->id; ?></td>
      <td style="width:25%; border: 1px solid gray;"><?php echo $query->name; ?></td>
      <td style="width:25%; border: 1px solid gray;"><?php echo $query->date; ?></td>
      <td style="width:25%; border: 1px solid gray;"><?php echo $query->age; ?></td>
      <td style="width:25%; border: 1px solid gray;"><?php echo $query->clientnumber; ?></td>           
      </tr>
<?php } ?>
</table>

<?php

// $results = $wpdb->get_results("SELECT * FROM $table");

}
?>
  </div>
  <div class="row border major-complaint-margin">
  <div class="col-lg-4 details-text-align">Age&nbsp&nbsp&nbsp
  <input id="age" type="text" name="age">
  </div>
  <div class="col-lg-4 details-text-align">Sex&nbsp&nbsp&nbsp
  <input id="sex" type="text" name="sex">
  </div>
  <div class="col-lg-4 details-text-align">ID&nbsp&nbsp&nbsp&nbsp&nbsp
  <input id="id" type="text" name="id">
  </div>
</div>

  <div class="row border major-complaint-margin">
  <div class="col-lg-4 details-text-align">Date&nbsp&nbsp
  <input type="date" name="date" style="height: 36px">
  </div>
  <div class="col-lg-4 details-text-align">primary phone number
  <input type="tex" name="primaryphonenumber">
  </div>
  <div class="col-lg-4 details-text-align">secondary phone number
  <input type="tex" name="secondaryphonenumber">
  </div>
  </div>
  
  <div class="row border major-complaint-margin">
  <div class="col-lg-12 details-text-align">Address
  <textarea type="text" name="address"> </textarea>
  </div>
    </div>
  
  <div class="row border major-complaint-margin">
  <div class="col-lg-6 details-text-align">Major complaints and 
  <textarea type="tex" name="majorComplaints" class="max-width"> </textarea>
  <?php 
  if($_POST['id']){
    $searchq = $_POST['id'];
    
    global $wpdb;
  $querys = $wpdb->get_results("SELECT * FROM wp_my_table WHERE clientnumber = '$searchq'");
    // print_r($querys);
  foreach($querys as $query){ ?>

    <p style="padding:0px; margin:0px; background:gray; width: 100%">
      <?php echo $query->majorComplaints ?>
  </p>
  <?php }  
  } ?>
  </div>
  <div class="col-lg-6 details-text-align">Diagnoses
  <textarea type="tex" name="diagnoses" class="max-width">
  <?php 
  if($_POST['id']){
    $searchq = $_POST['id'];    
    global $wpdb;
  $querys = $wpdb->get_results("SELECT * FROM wp_my_table WHERE clientnumber = '$searchq'");    
  foreach($querys as $query){ ?> 
<?php echo $query->diagnoses ?>
  <?php }  
  } ?>    
</textarea>
  
  
  </div>
  
</div>


<div class="row border major-complaint-margin">
  <div class="col-lg-3">
    <select>
  <option value="volvo">A</option>
  <option value="saab">B</option>
  <option value="opel">C</option>
  <option value="audi">D</option>
  <option value="audi">E</option>
  <option value="audi">F</option>
  <option value="audi">G</option>
  <option value="audi">H</option>
  <option value="audi">I</option>
  <option value="audi">J</option>
  <option value="audi">K</option>
  <option value="audi">L</option>
  <option value="audi">X</option>
  <option value="audi">Y</option>
</select>

<select>
  <option value="volvo">↑</option>
  <option value="saab">↓</option>
  <option value="opel">↔</option>
  <option value="audi">↕</option>
</select>
      
  </div>
  <div class="col-lg-3">
      <select>
  <option value="volvo">A</option>
  <option value="saab">B</option>
  <option value="opel">C</option>
  <option value="audi">D</option>
  <option value="audi">E</option>
  <option value="audi">F</option>
  <option value="audi">G</option>
  <option value="audi">H</option>
  <option value="audi">I</option>
  <option value="audi">J</option>
  <option value="audi">K</option>
  <option value="audi">L</option>
  <option value="audi">X</option>
  <option value="audi">Y</option>
</select>

<select>
  <option value="volvo">↑</option>
  <option value="saab">↓</option>
  <option value="opel">↔</option>
  <option value="audi">↕</option>
</select>
      
  </div>
  <div class="col-lg-3">
      <select>
  <option value="volvo">A</option>
  <option value="saab">B</option>
  <option value="opel">C</option>
  <option value="audi">D</option>
  <option value="audi">E</option>
  <option value="audi">F</option>
  <option value="audi">G</option>
  <option value="audi">H</option>
  <option value="audi">I</option>
  <option value="audi">J</option>
  <option value="audi">K</option>
  <option value="audi">L</option>
  <option value="audi">X</option>
  <option value="audi">Y</option>
</select>

<select>
  <option value="volvo">↑</option>
  <option value="saab">↓</option>
  <option value="opel">↔</option>
  <option value="audi">↕</option>
</select>
  </div>
  <div class="col-lg-3">
      <select>
  <option value="volvo">A</option>
  <option value="saab">B</option>
  <option value="opel">C</option>
  <option value="audi">D</option>
  <option value="audi">E</option>
  <option value="audi">F</option>
  <option value="audi">G</option>
  <option value="audi">H</option>
  <option value="audi">I</option>
  <option value="audi">J</option>
  <option value="audi">K</option>
  <option value="audi">L</option>
  <option value="audi">X</option>
  <option value="audi">Y</option>
</select>

<select>
  <option value="volvo">I</option>
  <option value="saab">II</option>
  <option value="opel">III</option>
  <option value="audi">IV</option>
  <option value="audi">V</option>
  <option value="audi">VI</option>
  <option value="audi">VII</option>
  <option value="audi">VII</option>
</select>

<select>
  <option value="volvo">↑</option>
  <option value="saab">↓</option>
  <option value="opel">↔</option>
  <option value="audi">↕</option>
</select>
  </div>
</div>

<div class="row border major-complaint-margin">
  <div class="col-lg-3">
    <select>
  <option value="volvo">A</option>
  <option value="saab">B</option>
  <option value="opel">C</option>
  <option value="audi">D</option>
  <option value="audi">E</option>
  <option value="audi">F</option>
  <option value="audi">G</option>
  <option value="audi">H</option>
  <option value="audi">I</option>
  <option value="audi">J</option>
  <option value="audi">K</option>
  <option value="audi">L</option>
  <option value="audi">X</option>
  <option value="audi">Y</option>
</select>
<select>
  <option value="volvo">I</option>
  <option value="saab">II</option>
  <option value="opel">III</option>
  <option value="audi">IV</option>
  <option value="audi">V</option>
  <option value="audi">VI</option>
  <option value="audi">VII</option>
  <option value="audi">VII</option>
</select>

<select>
  <option value="volvo">↑</option>
  <option value="saab">↓</option>
  <option value="opel">↔</option>
  <option value="audi">↕</option>
</select>
      
  </div>
  <div class="col-lg-3">
      <select>
  <option value="volvo">A</option>
  <option value="saab">B</option>
  <option value="opel">C</option>
  <option value="audi">D</option>
  <option value="audi">E</option>
  <option value="audi">F</option>
  <option value="audi">G</option>
  <option value="audi">H</option>
  <option value="audi">I</option>
  <option value="audi">J</option>
  <option value="audi">K</option>
  <option value="audi">L</option>
  <option value="audi">X</option>
  <option value="audi">Y</option>
</select>

<select>
  <option value="volvo">I</option>
  <option value="saab">II</option>
  <option value="opel">III</option>
  <option value="audi">IV</option>
  <option value="audi">V</option>
  <option value="audi">VI</option>
  <option value="audi">VII</option>
  <option value="audi">VII</option>
</select>

<select>
  <option value="volvo">↑</option>
  <option value="saab">↓</option>
  <option value="opel">↔</option>
  <option value="audi">↕</option>
</select>
      
  </div>
  <div class="col-lg-3">
<select>
  <option value="volvo">A</option>
  <option value="saab">B</option>
  <option value="opel">C</option>
  <option value="audi">D</option>
  <option value="audi">E</option>
  <option value="audi">F</option>
  <option value="audi">G</option>
  <option value="audi">H</option>
  <option value="audi">I</option>
  <option value="audi">J</option>
  <option value="audi">K</option>
  <option value="audi">L</option>
  <option value="audi">X</option>
  <option value="audi">Y</option>
</select>

<select>
  <option value="volvo">I</option>
  <option value="saab">II</option>
  <option value="opel">III</option>
  <option value="audi">IV</option>
  <option value="audi">V</option>
  <option value="audi">VI</option>
  <option value="audi">VII</option>
  <option value="audi">VII</option>
</select>

<select>
  <option value="volvo">↑</option>
  <option value="saab">↓</option>
  <option value="opel">↔</option>
  <option value="audi">↕</option>
</select>
  </div>
  <div class="col-lg-3">
<select>
  <option value="volvo">A</option>
  <option value="saab">B</option>
  <option value="opel">C</option>
  <option value="audi">D</option>
  <option value="audi">E</option>
  <option value="audi">F</option>
  <option value="audi">G</option>
  <option value="audi">H</option>
  <option value="audi">I</option>
  <option value="audi">J</option>
  <option value="audi">K</option>
  <option value="audi">L</option>
  <option value="audi">X</option>
  <option value="audi">Y</option>
</select>

<select>
  <option value="volvo">I</option>
  <option value="saab">II</option>
  <option value="opel">III</option>
  <option value="audi">IV</option>
  <option value="audi">V</option>
  <option value="audi">VI</option>
  <option value="audi">VII</option>
  <option value="audi">VII</option>
</select>

<select>
  <option value="volvo">↑</option>
  <option value="saab">↓</option>
  <option value="opel">↔</option>
  <option value="audi">↕</option>
</select>
  </div>
</div>


<div class="row border major-complaint-margin">
  <div class="col-lg-12">Treatment III</div>
  <div class="col-lg-12">Treatment II</div>
  <div class="col-lg-12">Treatment I</div>

</div>
  </div>

  <div class="col-lg-6 col-sm-6">
<div class="row border major-complaint-margin">
  <div class="col-lg-12  details-text-align">Alert and Allergies
  <textarea type="tex" name="alertallergies" class="max-width"> </textarea>
  </div>
  
  <?php 
  if($_POST['id']){
    $searchq = $_POST['id'];
    
    global $wpdb;
  $querys = $wpdb->get_results("SELECT * FROM wp_my_table WHERE clientnumber = '$searchq'");
    // print_r($querys);
  foreach($querys as $query){ ?>

    <p style="padding:0px; margin:0px; background:gray; width: 100%">
      <?php echo $query->alertallergies ?>
  </p>
  <?php }  
  } ?>
  </div>
<div class="row border major-complaint-margin">
  <div class="col-lg-12  details-text-align">special instruction about disease and patient
  <textarea type="tex" name="specialinstructiondisease" class="max-width"> </textarea>
  </div>

  <?php 
  if($_POST['id']){
    $searchq = $_POST['id'];
    
    global $wpdb;
  $querys = $wpdb->get_results("SELECT * FROM wp_my_table WHERE clientnumber = '$searchq'");
    // print_r($querys);
  foreach($querys as $query){ ?>

    <p style="padding:0px; margin:0px; background:gray; width: 100%">
      <?php echo $query->specialinstructiondisease ?>
  </p>
  <?php }  
  } ?>
  </div>
  <div class="row border major-complaint-margin">
  <div class="col-lg-12  details-text-align">below blood test result - take photo and inser it
  <input type="file" id="bloodtest" name="bloodtest[]" size="25" multiple="" />
  <div id="image-holder1" name="image-holder1" style="display: flex; flex-wrap: wrap; padding-left: 14px;">
    
</div>  

</div>
  <?php 
  if($_POST['id']){
    $searchq = $_POST['id'];
    
    global $wpdb;
  $querys = $wpdb->get_results("SELECT * FROM wp_my_table WHERE clientnumber = '$searchq'");
    // print_r($querys);
  foreach($querys as $query){ ?>

    <p style="padding:0px; margin:0px; background:gray; width: 100%">
      <?php echo $query->bloodtest ?>
  </p>
  <?php }  
  } ?>
</div>
<div class="row border major-complaint-margin">
  <div class="col-lg-12  details-text-align">x-ray, MRI photos
  <input type="file" name="xraymri" />
  <textarea type="tex" name="xraymritext" class="max-width"> </textarea>
  </div>
  <?php 
  if($_POST['id']){
    $searchq = $_POST['id'];
    
    global $wpdb;
  $querys = $wpdb->get_results("SELECT * FROM wp_my_table WHERE clientnumber = '$searchq'");
    // print_r($querys);
  foreach($querys as $query){ ?>

    <p style="padding:0px; margin:0px; background:gray; width: 100%">
      <?php echo $query->bloodtest ?>
  </p>
  <?php }  
  } ?>
</div>

<div class="row border major-complaint-margin">
  <div class="col-lg-12  details-text-align">prescription
  <textarea type="tex" name="prescription" class="max-width"> </textarea>
  </div>
  <?php 
  if($_POST['id']){
    $searchq = $_POST['id'];
    
    global $wpdb;
  $querys = $wpdb->get_results("SELECT * FROM wp_my_table WHERE clientnumber = '$searchq'");
    // print_r($querys);
  foreach($querys as $query){ ?>

    <p style="padding:0px; margin:0px; background:gray; width: 100%">
      <?php echo $query->prescription ?>
  </p>
  <?php }  
  } ?>
</div>

<div class="row border major-complaint-margin">
  <div class="col-lg-12  details-text-align">future plan - instruction
  <textarea type="tex" name="futureplaninstruction" class="max-width"> </textarea>
  </div>
  <?php 
  if($_POST['id']){
    $searchq = $_POST['id'];
    
    global $wpdb;
  $querys = $wpdb->get_results("SELECT * FROM wp_my_table WHERE clientnumber = '$searchq'");
    // print_r($querys);
  foreach($querys as $query){ ?>

    <p style="padding:0px; margin:0px; background:gray; width: 100%">
      <?php echo $query->futureplaninstruction ?>
  </p>
  <?php }  
  } ?>
</div>

<div class="row border major-complaint-margin">
  <div class="col-lg-12  details-text-align">image data base - exercise images - diet
  <input type="file" name="exercisefile" />
  
  <textarea type="tex" name="imagedatabsehealth" class="max-width"> </textarea>
  </div>
  
</div>

</div>




</div>
</div>
  <input type="submit" value="submit" />

<?php 

if($_POST['firstname'] && $_POST['age'] && $_POST['id'] && $_POST['date']){


  //  echo "<script>console.log(".json_encode(var_export($_FILES, true)).");</script>";
    // print_r($_FILES['bloodtest']);
    // echo "test";
    // echo "<script>console.log('submit');</script>";

    

  echo  "<script>console.log('" . json_encode($_POST['firstname']) . "');</script>";
  $name = $_POST['firstname'];
  $age = $_POST['age'];
  $clientnumber =$_POST['id'];
  $date = $_POST['date'];
  $primaryphonenumber = $_POST['primaryphonenumber'];
  $secondaryphonenumber = $_POST['secondaryphonenumber'];
  $address = $_POST['address'];
  $majorComplaints = $_POST['majorComplaints'];
  $diagnoses= $_POST['diagnoses'];
  $alertallergies = $_POST['alertallergies'];
  $specialinstructiondisease = $_POST['specialinstructiondisease'];
  $bloodtest = $_POST['bloodtest'];  //$_POST['bloodtest'];  //lcoation of the file
  // echo  "<script>console.log('" . json_encode($database) . "');</script>";
  $prescription = $_POST['prescription'];
  $mri = $_POST['xraymri'];
  $futureplaninstruction = $_POST['futureplaninstruction'];
  $exercisefile = $_POST['exercisefile'];
  $imagedatabsehealth = $_POST['imagedatabsehealth']; 
     
  
  global $wpdb;
  // 'date'=>$date,
  // ,
  // ,
  // , 
  // , 
  // ,
  // 
  $wpdb->insert('wp_my_table', array('firstname'=> $name, 'clientnumber'=> $clientnumber, 'age'=> $age, 'primaryphonenumber'=>$primaryphonenumber, 'secondaryphonenumber'=> $secondaryphonenumber, 'address'=>$address, 'majorComplaints' => $majorComplaints, 'diagnoses'=>$diagnoses, 'alertallergies'=>$alertallergies, 'specialinstructiondisease'=>$specialinstructiondisease,'bloodtest'=>$bloodtest, 'prescription'=>$prescription, 'mri'=>$mri, 'futureplaninstruction'=>$futureplaninstruction,'exercisefile'=>$exercisefile, 'imagedatabsehealth'=>$imagedatabsehealth));




  }



    


?>

</form>



<!-- <h1>data from database</h1>

  <div id="client">
  <?php
  
  


//   if($_FILES){

//     $database = '';
    
// $uplo   = wp_upload_dir();
// echo  "<script>console.log('" . json_encode($_FILES["bloodtest"]) . "');</script>"; 


// function reArrayFiles($file_post){
//   $file_ary = array();    //create array $file_ary
//   $file_count = count($file_post['name']);  //array containing name file names
//   $file_keys = array_keys($file_post);   //array keys name - type - tmp_name, error - size
//   // echo "<script>console.log(' " . json_encode($file_keys) . "');</script>";  
//   for($i=0; $i<$file_count; $i++){
//   foreach($file_keys as $key){
//     $file_ary[$i][$key] = $file_post[$key][$i];
//   }
//   }
//   return $file_ary;
// }

// $filesarray = reArrayFiles($_FILES["bloodtest"]);
// // echo '<pre>'. var_dump($filesarray) .'</pre>';
// // echo  "<script>console.log('" . json_encode($filesarray) . "');</script>";

// for($i=0; $i<count($filesarray); $i++){// echo "files collection" . count($filesarray);

//   $fileName = $filesarray[$i]["name"]; // The file name
//   $fileTmpLoc = $filesarray[$i]["tmp_name"]; // File in the PHP tmp folder
//   // echo "filetmploc" . $fileTmpLoc;
//   $fileType = $filesarray[$i][$i]["type"]; // The type of file it is
//   $fileSize = $filesarray[$i][$i]["size"]; // File size in bytes
//   $fileErrorMsg = $filesarray[$i][$i]["error"]; // 0 for false... and 1 for true
    // $target_dir = $uplo['basedir']."/test/";
//     // $target_dir = "http://localhost/fileupload/wp-content/upload/2019/12/"
//     // echo $uplo;
//     // echo "<script>console.log('" . json_encode($uplo) . "');</script>";
    // $target_file = $target_dir . basename($fileName);
//     // echo "<script>console.log('" . json_encode($target_file) . "');</script>";
//     $uploadOk = 1;
//     $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

//     // Check if image file is a actual image or fake image
//     if(isset($_POST["submit"])) {
//         $check = getimagesize($fileTmpLoc);
//         if($check !== false) {
//             echo "File is an image - " . $check["mime"] . ".";
//         } else {
//             echo "File is not an image.";
//         }
//     }
//     // Check if file already exists
//     if (file_exists($target_file)) {
//         echo "Sorry, file already exists.";
//     }

//     $database .= $target_file . ';';
//     // echo  "<script>console.log('" . json_encode($target_file) . "');</script>";
//     echo "target path" . print_r(wp_upload_dir());
//         if (move_uploaded_file($fileTmpLoc, $target_file)) {
//             echo "The file ". basename( $fileName). " has been uploaded.";
//         } else {
//             echo "Sorry, there was an error uploading your file.";
//         }
 
// }



// echo "<script>console.log('" . json_encode($_POST['bloodtest']) . "');</script>";

// echo "<script>console.log('" . json_encode($_FILES['bloodtest']) . "');</script>";



  
// $name = $_POST['firstname'];
// $age = $_POST['age'];
// $clientnumber =$_POST['id'];
// $date = $_POST['date'];
// $primaryphonenumber = $_POST['primaryphonenumber'];
// $secondaryphonenumber = $_POST['secondaryphonenumber'];
// $address = $_POST['address'];
// $majorComplaints = $_POST['majorComplaints'];
// $diagnoses= $_POST['diagnoses'];
// $alertallergies = $_POST['alertallergies'];
// $specialinstructiondisease = $_POST['specialinstructiondisease'];
// $bloodtest = $database;  //$_POST['bloodtest'];  //lcoation of the file
// echo  "<script>console.log('" . json_encode($database) . "');</script>";
// $prescription = $_POST['prescription'];
// $mri = $_POST['xraymri'];
// $futureplaninstruction = $_POST['futureplaninstruction'];
// $exercisefile = $_POST['exercisefile'];
// $imagedatabsehealth = $_POST['imagedatabsehealth']; 
 

// global $wpdb;
// // 'date'=>$date,
// // ,
// // ,
// // , 
// // , 
// // ,
// // 
// $wpdb->insert('wp_my_table', array('firstname'=> $name, 'clientnumber'=> $clientnumber, 'age'=> $age, 'primaryphonenumber'=>$primaryphonenumber, 'secondaryphonenumber'=> $secondaryphonenumber, 'address'=>$address, 'majorComplaints' => $majorComplaints, 'diagnoses'=>$diagnoses, 'alertallergies'=>$alertallergies, 'specialinstructiondisease'=>$specialinstructiondisease,'bloodtest'=> "test", 'prescription'=>$prescription, 'mri'=>$mri, 'futureplaninstruction'=>$futureplaninstruction,'exercisefile'=>$exercisefile, 'imagedatabsehealth'=>$imagedatabsehealth));



// }else{



   

  // $sql = "SELECT * FROM wp_my_table LIMIT 2";
  // $results = mysqli_query($conn, $sql);
  // if(mysqli_num_rows($results) > 0){
  // while($row = mysqli_fetch_assoc($results)){
  //  echo '<p>';
  // echo $row['name'];
  //  echo '</p>';
  // }
  // }
  ?>
  
  
  </div>
  
<button class="">get data</button> -->
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<script src="<?php echo get_template_directory_uri();?>/js/tables.js"></script>
    
  </body>
</html>