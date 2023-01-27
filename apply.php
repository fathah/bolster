<?php
header('Location: https://docs.google.com/forms/d/e/1FAIpQLSfMo2Q1D8pth-jrB_2kJIhcXOXISFdK9ib87LmzYpoQ9az9xQ/viewform?usp=pp_url ');


include 'db.php';

$response = '';
function mailForm($body){
$to = "info@bolstercampus.in";
$subject = "Bolster | New Admission";

$message = '<html>
<head>
<title>Bolster | New Admission</title>
</head>
<body>
'.$body.'
</body>
</html>
';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: Bolster Admission Department<no-reply-admission@bolstercampus.in>' . "\r\n";
$headers .= 'Cc: info@bolstercampus.in' . "\r\n";

mail($to,$subject,$message,$headers);
}




if(isset($_POST['submit'])){
    $fullname = mysqli_real_escape_string($fxConn,  $_POST['fullname']);
    $dob = mysqli_real_escape_string($fxConn,  $_POST['dob']);
    $guardian = mysqli_real_escape_string($fxConn,  $_POST['guardian']);
    $motherTongue = mysqli_real_escape_string($fxConn,  $_POST['motherTongue']);
    $languages = mysqli_real_escape_string($fxConn,  $_POST['languages']);
    $state = mysqli_real_escape_string($fxConn,  $_POST['state']);
    $district = mysqli_real_escape_string($fxConn,  $_POST['district']);
    $house = mysqli_real_escape_string($fxConn,  $_POST['house']);
    $village = mysqli_real_escape_string($fxConn,  $_POST['village']);
    $pin = mysqli_real_escape_string($fxConn,  $_POST['pin']);
    $email = mysqli_real_escape_string($fxConn,  $_POST['email']);
    $contact = mysqli_real_escape_string($fxConn,  $_POST['contact']);
    $stream = 'Science';
    $scholarship = mysqli_real_escape_string($fxConn,  $_POST['scholarship']);

    $examName = mysqli_real_escape_string($fxConn,  $_POST['examName']);
    $year = mysqli_real_escape_string($fxConn,  $_POST['year']);
    $mark = mysqli_real_escape_string($fxConn,  $_POST['mark']);
    $board = mysqli_real_escape_string($fxConn,  $_POST['board']);

    $contents = '
    The Application form is filled as below: <br>
    <br>
    Full Name: <b>'.$fullname.'</b><br>
    Date of Birth: <b>'.$dob.'</b><br>
    Name of Guardian: <b>'.$guardian.'</b><br>
    Mother Tongue: <b>'.$motherTongue.'</b><br>
    Languages Known: <b>'.$languages.'</b><br>
    State: <b>'.$state.'</b><br>
    District: <b>'.$district.'</b><br>
    House Name/Number: <b>'.$house.'</b><br>
    Village/Town: <b>'.$village.'</b><br>
    PIN Code: <b>'.$pin.'</b><br>
    Email Id: <b>'.$email.'</b><br>
    Contact No: <b>'.$contact.'</b><br>
    Stream: <b>'.$stream.'</b><br>
    Scholarship: <b>'.$scholarship.'</b>
    
    <br> 
    <h3>Details of Qualifying Examination </h3>
    Name of Examination:  <b>'.$examName.'</b><br>
    Year of Examination: <b>'.$year.'</b><br>
    Percentage/Grade: <b>'.$mark.'</b><br>
    Board of Examination: <b>'.$board.'</b><br>

    ';
    mailForm($contents);

    $sql = "
    INSERT INTO admission(fullname, dob,  guardian,  motherTongue, 
    languages, state, district, house, village, pin, 
    email, contact, stream, scholarship, examName, year, mark, board)
    VALUES('$fullname', '$dob',  '$guardian',  '$motherTongue', 
    '$languages', '$state', '$district', '$house', '$village', '$pin', 
    '$email', '$contact', '$stream', '$scholarship', '$examName' , '$year', '$mark', '$board')
    ";
    if(mysqli_query($fxConn, $sql))
    {
    $response = '<div class="alert alert-success">Your application is sent to us. Will get you soon.</div>';
    }
    else{
        $response = '<div class="alert alert-warning">Something went wrong! Please re-check your form or ty again later.</div>';
    }



}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Bolster Girls Campus (BGC) is a residential program for girls by Bolster Foundation.BGC offers science, commerce and humanities along with regressive coaching for different examinations.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Apply at Bolster</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
    <style>
    
    .stream {
   border-radius: 5px;
   border:1px solid #ced4da;
   width: 100%;
   height:40px;
   color: #495057;
   padding: 0.375rem 0.75rem;
   transition: 0.5s ease;
}
    
    </style>
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    
<?php include'nav.php'; ?>

    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>APPLY AT BOLSTER</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->




    <!-- Privacy Content -->
    <div class="ex-basic-2">
        <div class="container">

        <div class="col-6">
        <?php echo 
$response; ?> 
<h3>Fill the application form</h3>
        <form action="" method="post">
        
        <div class="mb-3">
    <label class="form-label">Full Name </label>
    <input type="text" class="form-control" name="fullname" required>
  </div>

  <div class="mb-3">
    <label class="form-label">Date of Birth </label>
    <input type="date" class="form-control" name="dob" required>
  </div>

  <div class="mb-3">
    <label  class="form-label">Name of Guardian </label>
    <input type="text" class="form-control" name="guardian" required>
  </div>

  <div class="mb-3">
    <label class="form-label">Mother Tongue </label>
    <input type="text" class="form-control" name="motherTongue" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Languages Known  </label>
    <input type="text" class="form-control" name="languages" required>
  </div>
  
  <div class="mb-3">
    <label class="form-label">State</label>
    <input type="text" class="form-control" name="state" required>
  </div>
  
  <div class="mb-3">
    <label class="form-label">District  </label>
    <input type="text" class="form-control" name="district" required>
  </div>
  
  <div class="mb-3">
    <label class="form-label">House Name/Number  </label>
    <input type="text" class="form-control" name="house">
  </div>
  
  <div class="mb-3">
    <label class="form-label">Village/Town  </label>
    <input type="text" class="form-control" name="village" required>
  </div>
  
  <div class="mb-3">
    <label class="form-label">PIN Code  </label>
    <input type="text" class="form-control" name="pin" required>
  </div>
  
  <div class="mb-3">
    <label class="form-label">Email ID </label>
    <input type="text" class="form-control" name="email" required>
  </div>
  
  <div class="mb-3">
    <label class="form-label">Contact No.  </label>
    <input type="text" class="form-control" name="contact" required>
  </div>
  
  <div class="mb-3">
Do you wish to apply for Bolster Foundation scholarship?
  <select class="stream" name="scholarship" required>
  <option selected> Scholarship </option>
  <option value="Yes">Yes</option>
  <option value="No">No</option>
</select>
</div>
<br> 
<h3>Details of Qualifying Examination </h3>
  <div class="mb-3">
    <label class="form-label">Name of Examination  </label>
    <input type="text" class="form-control" name="examName">
  </div>
  
  <div class="mb-3">
    <label class="form-label">Year of Examination  </label>
    <input type="text" class="form-control" name="year">
  </div>
  
  <div class="mb-3">
    <label class="form-label">Percentage/Grade  </label>
    <input type="text" class="form-control" name="mark">
  </div>
  
  <div class="mb-3">
    <label class="form-label">Board of Examination  </label>
    <input type="text" class="form-control" name="board" >
  </div>
  <div class="mb-3">

  <input type="submit" value="Submit" class="btn btn-primary" name="submit">
  </div>
        </form>




</div>
<br>
        <p>
For Admission related queries, please contact, 
<h6>
+91 9605 407 019 <br>
+91 9605 407 021
</h6>
<br>
<b><u>Admissions Policy</u>
</b> <br>
Bolster adopts a strict and firm policy of selection. Under no circumstances does a candidate gain admission without a written application and the subsequent screening, which includes both written and face-to-face interviews. Only those candidates who get through both the rounds are eventually offered a place at the campuses.
</p>




        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-2 -->
    <!-- end of privacy content -->


    

    
<?php include'footer.php'; ?>
</body>
</html>