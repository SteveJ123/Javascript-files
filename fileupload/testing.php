<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css" media="screen" >
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   
</head>

<body id="gradient">
    
<?php 
    include 'dbconnect.php';
    require_once('../../../wp-load.php');

    if($_POST['firstname'] && $_POST['age'] && $_POST['id'] && $_POST['date']){


        //  echo "<script>console.log(".json_encode(var_export($_FILES, true)).");</script>";
          // print_r($_FILES['bloodtest']);
          // echo "test";
          // echo "<script>console.log('submit');</script>";
          echo "<script>console.log('" . json_encode($_POST['bloodtest']) . "');</script>";
      
          
        
            
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
      $bloodtest = $_POST['bloodtest'];  //lcoation of the file
      $prescription = $_POST['prescription'];
      $mri = $_POST['xraymri'];
      $futureplaninstruction = $_POST['futureplaninstruction'];
      $exercisefile = $_POST['exercisefile'];
      $imagedatabsehealth = $_POST['imagedatabsehealth']; 
          

      $uplo   = wp_upload_dir();
    $fileName = $_FILES["bloodtest"]["name"]; // The file name
  $fileTmpLoc = $_FILES["bloodtest"]["tmp_name"]; // File in the PHP tmp folder
  $fileType = $_FILES["bloodtest"]["type"]; // The type of file it is
  $fileSize = $_FILES["bloodtest"]["size"]; // File size in bytes
  $fileErrorMsg = $_FILES["bloodtest"]["error"]; // 0 for false... and 1 for true
    $target_dir = $uplo['basedir']."/saefmh/";
    $target_file = $target_dir . basename($fileName);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($fileTmpLoc);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
        } else {
            echo "File is not an image.";
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
    }

        if (move_uploaded_file($fileTmpLoc, $target_file)) {
            echo "The file ". basename( $fileName). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
      
      global $wpdb;
      $wpdb->insert('wp_my_table', array('firstname'=> $name, 'clientnumber'=> $clientnumber, 'age'=> $age, 'primaryphonenumber'=>$primaryphonenumber, 'secondaryphonenumber'=> $secondaryphonenumber, 'address'=>$address, 'majorComplaints' => $majorComplaints, 'diagnoses'=>$diagnoses, 'alertallergies'=>$alertallergies, 'specialinstructiondisease'=>$specialinstructiondisease,
    'bloodtest'=>$bloodtest, 'prescription'=>$prescription, 'mri'=>$mri, 'futureplaninstruction'=>$futureplaninstruction,'exercisefile'=>$exercisefile, 'imagedatabsehealth'=>$imagedatabsehealth));
?>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
    <script src="<?php echo get_template_directory_uri();?>/js/tables.js"></script>



     
<script src="test.js"></script>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
</body>
</html>