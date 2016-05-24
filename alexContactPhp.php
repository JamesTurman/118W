<html xmlns = "http://www.w3.org/1999/xhtml"> 
<title>Contact</title>
<head>
     <meta charset = "utf-8">
     <title>Contact</title>
     <link rel="stylesheet" type="text/css" href="css/main.css">
     <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
     <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
     <link rel="shortcut icon" href="assets/sj_favicon.ico">
     <link href='https://fonts.googleapis.com/css?family=Neucha|Shadows+Into+Light+Two' rel='stylesheet' type='text/css'>
     <link rel="stylesheet" href="css/jquery-ui.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
     <script type="text/javascript" src="js/main.js"></script>
     <script type="text/javascript" src="js/bootstrap.js"></script>
     <script type="text/javascript" src="js/npm.js"></script>
     <script src="js/jquery.js"></script>
    <script src="js/jquery2.js"></script>
     <script src="js/jquery-ui.js"></script>
</head>
<style>
     body { 
          background-image: url('images/background/kitchenBackground5.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;
          padding-top: 50px;
     }
</style>
<body>
     <nav class="navbar-default navbar-fixed-top">
          <div class="container-fluid">
               <div class="navbar-header">
                    <a class="navbar-brand" href="main.html"><img src="images/meowmartLogo.png" alt="meowmartLogo" height="28" width ="112"></a>
               </div>
               <ul class="nav navbar-nav">
                    <li><a href="main.html">Home</a></li>
                    <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Our Products
                              <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                   <li><a href="meowmix.html">MeowMix</a></li>
                                   <li><a href="nutrish.html">Rachael Ray Nutrish</a></li>
                                   <li><a href="iams.html">IAMS</a></li> 
                              </ul>
                         </li>
                         <li><a href="whereToBuy.html">Where to Buy</a></li>
                         <li><a href="aboutUs.html">About Us</a></li> 
                         <li class="active"><a href="contact.html">Contact a Cat</a></li> 
                         <li><a href="feedback.html">Feedback</a></li>  
               </ul>
          </div>
     </nav>
     <div class="container">
          <div class="row top-buffer-medium bottom-buffer-small transparency">
               <h1 class="text-center top-buffer-small bottom-buffer-small handwriteTwo">Thanks for contacting us!</h1>
               <h2 class="text-center top-buffer-small bottom-buffer-small handwriteOne"><br>
               <?php 
                    if ($_POST['callAlexPhone']!= NULL){
                         echo "Hi ".$_POST['callAlexFirstName'].", Alex will call you back at ".$_POST['callAlexPhone']." within 24 hours.";
                    }
                    else {
                         echo "Hi ".$_POST['emailAlexFirstName'].", we've sent you a copy of your responses to ".$_POST['emailAlexEmail']." for your records.";
                    }
                    $emailBody = "Hi ".$_POST['emailAlexFirstName'].",\n\n".
                    "Alex will be in touch soon! Your responses are written below for your records.\n\n".
                    "First Name: ".$_POST['emailAlexFirstName'].
                    "\nLast Name: ".$_POST['emailAlexLastName'].
                    "\nEmail: ".$_POST['emailAlexEmail'].
                    "\nProduct interested in: ".$_POST['emailAlexProduct'].
                    "\nComments: ".$_POST['emailAlexComments'].
                    "\n\nBest regards,".
                    "\nThe MeowMart Team";
                    $mail_host = "admin@meowmart.org";
                    mail($_POST['emailAlexEmail'], 'Thanks for the contact, '.$_POST['emailAlexFirstName'].'. Alex will be in touch soon!', $emailBody);
                    ?>
               </h2>
          </div>
    </div>
<?php
$date = date('Y/m/d');
$time = date('h:i:s A');
$callFirstName = $_POST['callAlexFirstName'];
$callLastName = $_POST['callAlexLastName'];
$callPhone = $_POST['callAlexPhone'];
$product = $_POST['callAlexProduct'];
$comments = $_POST['callAlexComments'];
$emailFirstName = $_POST['emailAlexFirstName'];
$emailLastName = $_POST['emailAlexLastName'];
$email = $_POST['emailAlexEmail'];
$emailProduct = $_POST['emailAlexProduct'];
$emailComments = $_POST['emailAlexComments'];
//connect to the database localhost = hostname alexlo333 = username UGHparth!23 = password
//change to the database specs you want to use
$connectionstring = mysql_connect('database.meowmart.org','alexlo333', 'UGHparth!23' ) 
	or die('Could not connect: ' . mysql_error());
//select the database sjparks = database name, change to database specs
mysql_select_db('meowmart')
	or die('Could not select database: ' . mysql_error());
//create insert SQL string
$Insert ="INSERT INTO Contact_Alex SET
          Record_ID      = '". ($Record_ID) ."',
          date			 = '". ($date) ."',
          time            = '". ($time) ."',
          phoneFirstName = '". (mysql_real_escape_string($callFirstName)) ."',
          phoneLastName = '". (mysql_real_escape_string($callLastName)) ."',
          phone = '". (mysql_real_escape_string($callPhone)) ."',
          phoneProduct = '". ($product) ."',
          phoneComments = '". (mysql_real_escape_string($comments)) ."',
          emailFirstName = '". (mysql_real_escape_string($emailFirstName)) ."',
          emailLastName = '". (mysql_real_escape_string($emailLastName)) ."',
          email = '". (mysql_real_escape_string($email)) ."',
          emailProduct = '". ($emailProduct) ."',
          emailComments = '". (mysql_real_escape_string($emailComments)) ."'";
          
//insert into database
$results = mysql_query($Insert)
	or die('Could not insert into database: '. mysql_error());
//disconnect from database
mysql_close($connectionstring)
	or die('Could not close database: ' . mysql_error());
?>
</body>
</html>