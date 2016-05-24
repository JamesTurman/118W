<html xmlns = "http://www.w3.org/1999/xhtml"> 
<title>feedback List</title>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Park Review</title>
	<link rel="shortcut icon" href="assets/sj_favicon.ico">
	<link rel="stylesheet" href="css/themes/default/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="assets/css/jqm-demos.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
	<script src="assets/js/index.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/jquery.mobile-1.4.5.min.js"></script>
    <script src="js/jquery2.js"></script>
	<script src="js/jquery-ui.js"></script>
</head>
<body>
     <div data-role="header">
          <h1>San Jose City Parks Assessment</h1>
     </div>
    <div class="container center-block top-buffer-small">
     <img src="assets/sjLogo.png" class="center-block">
     <h2 class="text=center"><?php
          $counter = 0;
          $totalScore = 0;
          if ($_POST['turfChoice'] != 0){
               $counter++;
               $totalScore = $totalScore+$_POST['turfChoice'];
          }
          if ($_POST['sportsFieldsChoice'] != 0){
               $counter++;
               $totalScore = $totalScore+$_POST['sportsFieldsChoice'];
          }
          if ($_POST['artificialTurfChoice'] != 0){
               $counter++;
               $totalScore = $totalScore+$_POST['artificialTurfChoice'];
          }
          if ($_POST['bleachersChoice'] != 0){
               $counter++;
               $totalScore = $totalScore+$_POST['bleachersChoice'];
          }
          if ($_POST['treesChoice'] != 0){
               $counter++;
               $totalScore = $totalScore+$_POST['treesChoice'];
          }
          if ($_POST['treeBasinsChoice'] != 0){
               $counter++;
               $totalScore = $totalScore+$_POST['treeBasinsChoice'];
          }
          if ($_POST['skinnedAreasChoice'] != 0){
               $counter++;
               $totalScore = $totalScore+$_POST['skinnedAreasChoice'];
          }
          if ($_POST['groundcoverFlowersChoice'] != 0){
               $counter++;
               $totalScore = $totalScore+$_POST['groundcoverFlowersChoice'];
          }
          if ($_POST['sidewalksChoice'] != 0){
               $counter++;
               $totalScore = $totalScore+$_POST['sidewalksChoice'];
          }
          if ($_POST['pathwaysChoice'] != 0){
               $counter++;
               $totalScore = $totalScore+$_POST['pathwaysChoice'];
          }
          if ($_POST['parkingLotsChoice'] != 0){
               $counter++;
               $totalScore = $totalScore+$_POST['parkingLotsChoice'];
          }
          if ($_POST['courtSurfacesChoice'] != 0){
               $counter++;
               $totalScore = $totalScore+$_POST['courtSurfacesChoice'];
          }
          if ($_POST['tennisCourtsChoice'] != 0){
               $counter++;
               $totalScore = $totalScore+$_POST['tennisCourtsChoice'];
          }
          if ($_POST['basketballCourtsChoice'] != 0){
               $counter++;
               $totalScore = $totalScore+$_POST['basketballCourtsChoice'];
          }
          if ($_POST['reservablePicnicTablesChoice'] != 0){
               $counter++;
               $totalScore = $totalScore+$_POST['reservablePicnicTablesChoice'];
          }
          if ($_POST['reservableBbqPitsChoice'] != 0){
               $counter++;
               $totalScore = $totalScore+$_POST['reservableBbqPitsChoice'];
          }
          if ($_POST['nonReservablePicnicTablesChoice'] != 0){
               $counter++;
               $totalScore = $totalScore+$_POST['nonReservablePicnicTablesChoice'];
          }
          if ($_POST['nonReservableBbqPitsChoice'] != 0){
               $counter++;
               $totalScore = $totalScore+$_POST['nonReservableBbqPitsChoice'];
          }
          if ($_POST['gameTablesChoice'] != 0){
               $counter++;
               $totalScore = $totalScore+$_POST['gameTablesChoice'];
          }
          if ($_POST['drinkingFountainsChoice'] != 0){
               $counter++;
               $totalScore = $totalScore+$_POST['drinkingFountainsChoice'];
          }
          if ($_POST['benchesChoice'] != 0){
               $counter++;
               $totalScore = $totalScore+$_POST['benchesChoice'];
          }
          if ($_POST['totPlaygroundsChoice'] != 0){
               $counter++;
               $totalScore = $totalScore+$_POST['totPlaygroundsChoice'];
          }
          if ($_POST['youthPlaygroundsChoice'] != 0){
               $counter++;
               $totalScore = $totalScore+$_POST['youthPlaygroundsChoice'];
          }
          if ($_POST['restroomBuildingsChoice'] != 0){
               $counter++;
               $totalScore = $totalScore+$_POST['restroomBuildingsChoice'];
          }
          if ($_POST['parCourseStationsChoice'] != 0){
               $counter++;
               $totalScore = $totalScore+$_POST['parCourseStationsChoice'];
          }
          if ($_POST['trailsChoice'] != 0){
               $counter++;
               $totalScore = $totalScore+$_POST['trailsChoice'];
          }
     ?>
     <h2 class="text-center">The average score of <?php 
     if ($_POST['nameOfFacilityText'] != NULL){
          echo $_POST['nameOfFacilityText']; 
     }
     else{
          $noParkName = "non-existent park";
          echo $noParkName;
     }
          ?> is <?php
     if ($totalScore != 0){ 
          $averageScore = $totalScore/$counter;
          echo (round($averageScore,1));
     }
     else{
          $averageScore = "non-existent. No values were entered in the form!";
          echo ($averageScore);
     }
     ?> Park ID is <?php 
     if ($_POST['parksID'] != 0){
          $yesParkID=$_POST['parksID'].".";
          echo $yesParkID;
     }
     else{
          $noParkID = "non-existent. No park ID was found.";
          echo $noParkID;
     } ?></h2>
	<a href="https://www.sanjoseparks.com/login/index.html" class="btn btn-default center-block top-buffer-small">Return to Form</a>
     </div>
<?php
$user = $_POST['user'];
$pwd = $_POST['pwd'];
$Record_ID = $_POST['Record_ID'];
$ParkID = $_POST['parksID'];
$date = date('Y/m/d');
$time = date('h:i:s A');
$nameOfFacilityText = $_POST['nameOfFacilityText'];
$averageParkScore = $_POST['averageScore'];
$supervisorText = $_POST['supervisorText'];
$raterText = $_POST['raterText'];
$turf = $_POST['turfChoice'];
$turfText = $_POST['turfText'];
$sportsFields = $_POST['sportsFieldsChoice'];
$sportsFieldsText = $_POST['sportsFieldsText'];
$artificialTurf = $_POST['artificialTurfChoice'];
$artificialTurfText = $_POST['artificialTurfText'];
$bleachers = $_POST['bleachersChoice'];
$bleachersText = $_POST['bleachersText'];
$trees = $_POST['treesChoice'];
$treesText = $_POST['treesText'];
$treeBasins = $_POST['treeBasinsChoice'];
$treeBasinsText = $_POST['treeBasinsText'];
$shrubs = $_POST['shrubsChoice'];
$shrubsText = $_POST['shrubsText'];
$skinnedAreas = $_POST['skinnedAreasChoice'];
$skinnedAreasText = $_POST['skinnedAreasText'];
$groundcoverFlowers = $_POST['groundcoverFlowersChoice'];
$groundcoverFlowersText = $_POST['groundcoverFlowersText'];
$sidewalks = $_POST['sidewalksChoice'];
$sidewalksText = $_POST['sidewalksText'];
$pathways = $_POST['pathwaysChoice'];
$pathwaysText = $_POST['pathwaysText'];
$parkingLots = $_POST['parkingLotsChoice'];
$parkingLotsText = $_POST['parkingLotsText'];
$courtSurfaces = $_POST['courtSurfacesChoice'];
$courtSurfacesText = $_POST['courtSurfacesText'];
$tennisCourts = $_POST['tennisCourtsChoice'];
$tennisCourtsText = $_POST['tennisCourtsText'];
$basketballCourts = $_POST['basketballCourtsChoice'];
$basketballCourtsText = $_POST['basketballCourtsText'];
$reservablePicnicTables = $_POST['reservablePicnicTablesChoice'];
$reservablePicnicTablesText = $_POST['reservablePicnicTablesText'];
$reservableBbqPits = $_POST['reservableBbqPitsChoice'];
$reservableBbqPitsText = $_POST['reservableBbqPitsText'];
$nonReservablePicnicTables = $_POST['nonReservablePicnicTablesChoice'];
$nonReservablePicnicTablesText = $_POST['nonReservablePicnicTablesText'];
$nonReservableBbqPits = $_POST['nonReservableBbqPitsChoice'];
$nonReservableBbqPitsText = $_POST['nonReservableBbqPitsText'];
$gameTables = $_POST['gameTablesChoice'];
$gameTablesText = $_POST['gameTablesText'];
$drinkingFountains = $_POST['drinkingFountainsChoice'];
$drinkingFountainsText = $_POST['drinkingFountainsText'];
$benches = $_POST['benchesChoice'];
$benchesText = $_POST['benchesText'];
$totPlaygroundsSurface = $_POST['totPlaygroundsSurfaceChoice'];
$totPlaygrounds = $_POST['totPlaygroundsChoice'];
$totPlaygroundsText = $_POST['totPlaygroundsText'];
$youthPlaygroundsSurface = $_POST['youthPlaygroundsSurfaceChoice'];
$youthPlaygrounds = $_POST['youthPlaygroundsChoice'];
$youthPlaygroundsText = $_POST['youthPlaygroundsText'];
$restroomBuildings = $_POST['restroomBuildingsChoice'];
$restroomBuildingsText = $_POST['restroomBuildingsText'];
$parCourseStations = $_POST['parCourseStationsChoice'];
$parCourseStationsText = $_POST['parCourseStations'];
$trails = $_POST['trailsChoice'];
$trailsText = $_POST['trailsText'];
//connect to the database localhost = hostname alexlo333 = username UGHparth!23 = password
//change to the database specs you want to use
$connectionstring = mysql_connect('database.sanjoseparks.com','alexlo333', 'UGHparth!23' ) 
	or die('Could not connect: ' . mysql_error());
//select the database sjparks = database name, change to database specs
mysql_select_db('sjparks')
	or die('Could not select database: ' . mysql_error());
//create insert SQL string
$Insert ="INSERT INTO Park_Review SET
          Record_ID      = '". ($Record_ID) ."',
          ParkID   		 = '". ($ParkID) ."',
          date			 = '". ($date) ."',
          time            = '". ($time) ."',
          nameOfFacilityText = '". ($nameOfFacilityText) ."',
          averageParkScore = '". ($averageScore) ."',
          supervisorText = '". ($supervisorText) ."',
          raterText = '". ($raterText) ."',
          turf = '". ($turf) ."',
          turfText = '". ($turfText) ."',
          sportsFields = '". ($sportsFields) ."',
          sportsFieldsText = '". ($sportsFieldsText) ."',
          artificialTurf = '". ($artificialTurf) ."',
          artificialTurfText = '". ($artificialTurfText) ."',
          bleachers = '". ($bleachers) ."',
          bleachersText = '". ($bleachersText) ."',
          trees = '". ($trees) ."',
          treesText = '". ($treesText) ."',
          treeBasins = '". ($treeBasins) ."',
          treeBasinsText = '". ($treeBasinsText) ."',
          shrubs = '". ($shrubs) ."',
          shrubsText = '". ($shrubsText) ."',
          skinnedAreas = '". ($skinnedAreas) ."',
          skinnedAreasText = '". ($skinnedAreasText) ."',
          groundcoverFlowers = '". ($groundcoverFlowers) ."',
          groundcoverFlowersText = '". ($groundcoverFlowersText) ."',
          sidewalks = '". ($sidewalks) ."',
          sidewalksText = '". ($sidewalksText) ."',
          pathways = '". ($pathways) ."',
          pathwaysText = '". ($pathwaysText) ."',
          parkingLots = '". ($parkingLots) ."',
          parkingLotsText = '". ($parkingLotsText) ."',
          courtSurfaces = '". ($courtSurfaces) ."',
          courtSurfacesText = '". ($courtSurfacesText) ."',
          tennisCourts = '". ($tennisCourts) ."',
          tennisCourtsText = '". ($tennisCourtsText) ."',
          basketballCourts = '". ($basketballCourts) ."',
          basketballCourtsText = '". ($basketballCourtsText) ."',
          reservablePicnicTables = '". ($reservablePicnicTables) ."',
          reservablePicnicTablesText = '". ($reservablePicnicTablesText) ."',
          reservableBbqPits  = '". ($reservableBbqPits) ."',
          reservableBbqPitsText = '". ($reservableBbqPitsText) ."',
          nonReservablePicnicTables = '". ($nonReservablePicnicTables) ."',
          nonReservablePicnicTablesText = '". ($nonReservablePicnicTablesText) ."',
          nonReservableBbqPits = '". ($nonReservableBbqPits) ."',
          nonReservableBbqPitsText = '". ($nonReservableBbqPitsText) ."',
          gameTables = '". ($gameTables) ."',
          gameTablesText = '". ($gameTablesText) ."',
          drinkingFountains = '". ($drinkingFountains) ."',
          drinkingFountainsText = '". ($drinkingFountainsText) ."',
          benches = '". ($benches) ."',
          benchesText = '". ($benchesText) ."',
          totPlaygroundsSurface = '". ($totPlaygroundsSurface) ."',
          totPlaygrounds = '". ($totPlaygrounds) ."',
          totPlaygroundsText = '". ($totPlaygroundsText) ."',
          youthPlaygroundsSurface = '". ($youthPlaygroundsSurface) ."',
          youthPlaygrounds = '". ($youthPlaygrounds) ."',
          youthPlaygroundsText = '". ($youthPlaygroundsText) ."',
          restroomBuildings = '". ($restroomBuildings) ."',
          restroomBuildingsText = '". ($restroomBuildingsText) ."',
          parCourseStations = '". ($parCourseStations) ."',
          parCourseStationsText = '". ($parCourseStationsText) ."',
          trails = '". ($trails) ."',
          trailsText = '". ($trailsText) ."'";
//insert into database
$results = mysql_query($Insert)
	or die('Could not insert into database: '. mysql_error());
//disconnect from database
mysql_close($connectionstring)
	or die('Could not close database: ' . mysql_error());
?>
</body>
</html>