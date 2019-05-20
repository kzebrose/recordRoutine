<?php
  //translates position from stripos to boolean true/false
  //search is case insensitive
  public function contains($substring, $string) 
  {
    $pos = stripos($string, $substring);
    if($pos === false) {
      // echo "string NOT found";
      return false;
    }
    else {
      // echo "string found ";
      return true;
    } 
  }//end contains()

include 'header.php';
echo "<title>Kates Exercise Routine</title>";
echo "</head>";
$server=$_SERVER['SERVER_NAME'];
if(contains("zebrose",$server))
{
  $website = $server."/exercise";
}
else
{
  $website = $server;
}
echo "<h2>server = $server website  = $website</h2>";
?>
<div class="container-fluid" style="margin:10px">
      <div class="row">
         <div class="col-xs-12 col-md-2">
         <a class='btn btn-primary' href="http://<?php echo $website; ?>/weekending/thisWeek_exercise.html">thisWeek</a>
         </div><!-- end col -->
         <div class="col-xs-12 col-md-2">
           <a class="btn btn-primary" href="http://<?php echo $website; ?>/walk.html">record walk</a>
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

