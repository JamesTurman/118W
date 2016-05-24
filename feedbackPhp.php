<html xmlns = "http://www.w3.org/1999/xhtml"> 
<title>feedback List</title>
<head>
     <meta charset = "utf-8">
     <title>Feedback</title>
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
                    <li class="active"><a href="main.html">Home</a></li>
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
                         <li><a href="contact.html">Contact a Cat</a></li> 
                         <li><a href="feedback.html">Feedback</a></li>  
               </ul>
          </div>
     </nav>
     <div class="container">
          <div class="row top-buffer-medium bottom-buffer-small transparency">
               <h1 class="text-center top-buffer-small bottom-buffer-small handwriteTwo">Thanks for the feedback!</h1>
               <h2 class="text-center top-buffer-small handwriteOne">
               Your responses are recorded as shown below.<br>
               First name: <?php echo $_POST['firstNameReview']?><br>
               Last name: <?php echo $_POST['lastNameReview']?><br>
               Product reviewed: <?php echo $_POST['productText']?><br>
               Product rating: <?php echo $_POST['productRating']?><br>
               Rating comments: <?php echo $_POST['comments']?><br>
               </h2>
               <h1 class="text-center top-buffer-small handwriteOne">Past reviews are shown below:</h1>
               <h3 class="text-center handwriteOne">
               <?php
                    $date = date('Y/m/d');
                    $time = date('h:i:s A');
                    $firstName = $_POST['firstNameReview'];
                    $lastName = $_POST['lastNameReview'];
                    $productName = $_POST['productText'];
                    $productRating = $_POST['productRating'];
                    $ratingText = $_POST['comments'];

                    //connect to the database localhost = hostname alexlo333 = username UGHparth!23 = password
                    //change to the database specs you want to use
                    $connectionstring = mysql_connect('database.meowmart.org','alexlo333', 'UGHparth!23' ) 
                         or die('Could not connect: ' . mysql_error());
                    //select the database sjparks = database name, change to database specs
                    mysql_select_db('meowmart')
                         or die('Could not select database: ' . mysql_error());
                    //create insert SQL string
                    $Insert ="INSERT INTO Feedback SET
                              Record_ID      = '". ($Record_ID) ."',
                              date            = '". ($date) ."',
                              time            = '". ($time) ."',
                              firstName = '". (mysql_real_escape_string($firstName)) ."',
                              lastName = '". (mysql_real_escape_string($lastName)) ."',
                              productName = '". (mysql_real_escape_string($productName)) ."',
                              productRating = '". (mysql_real_escape_string($productRating)) ."',
                              ratingText = '". (mysql_real_escape_string($ratingText)) ."'";
                              
                    //insert into database
                    $results = mysql_query($Insert)
                         or die('Could not insert into database: '. mysql_error());
                    //SQL query
                    $Query = 'SELECT * FROM Feedback WHERE 1';
                    //execute query
                    $queryexe = mysql_query($Query)
                         or die('Could not query database:'.mysql_error());
                    //query database ok
                    while($dataArray=mysql_fetch_array($queryexe, MYSQL_ASSOC))
                    {
                         echo "<tr><br>";
                         foreach($dataArray as $col_value){
                              echo "<td>\t$col_value</td><br>";
                         }
                         echo "</tr><br>";
                    }
                    //free resultset ok
                    mysql_free_result($queryexe)
                    or die ('Could not free result: ' . mysql_error());
                    //disconnect from database
                    mysql_close($connectionstring)
                         or die('Could not close database: ' . mysql_error());
               ?>
               </h3>
          </div>
    </div>
</body>
</html>