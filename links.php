<?php
include ("./functions.php");
include ("./mobile_header.html");
$website = getWebsite();
echo "<h2>website  = $website</h2>";
?>
<div class="container-fluid" style="margin:10px">
      <div class="row">
         <div class="col-xs-12 col-md-2">
         <a class='btn btn-primary' href="http://<?php echo $website; ?>/weekending/thisWeek_exercise.html">thisWeek</a>
         </div><!-- end col -->
         <div class="col-xs-12 col-md-2">
         </div><!-- end col -->
         <div class="col-xs-12 col-md-2">
           <a class="btn btn-primary" href="http://<?php echo $website; ?>/walkMobile.html">record walk on mobile</a>
         </div><!-- end col -->
         <div class="col-xs-12 col-md-2">
           <a class="btn btn-primary" href="http://<?php echo $website; ?>/break.html">record break</a>
         </div><!-- end col -->
         <div class="col-xs-12 col-md-2">
           <a class="btn btn-primary" href="http://<?php echo $website; ?>/start.php">StartPerSet</a>
         </div><!-- end col -->
         <div class="col-xs-12 col-md-2">
         </div><!-- end col -->
    </div><!-- end row -->
