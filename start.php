<?php 
include ("./mobile_header.php");
?>
<body>
<div class="container-fluid" style="margin:10px">
      <div class="row center">
         <div class="col-xs-12 col-md-2">
         <a class='btn btn-primary' href="http://<?php echo $website; ?>/stretch.php">stretch</a>
         </div><!-- end col -->
         <div class="col-xs-12 col-md-2">
           <a class="btn btn-primary" href="http://<?php echo $website; ?>/singleSet.php?name=set1">setOne</a>
         </div><!-- end col -->
         <div class="col-xs-12 col-md-2">
           <a class="btn btn-primary" href="http://<?php echo $website; ?>/singleSet.php?name=set2">setTwo</a>
         </div><!-- end col -->
         <div class="col-xs-12 col-md-2">
           <a class="btn btn-primary" href="http://<?php echo $website; ?>/singleSet.php?name=set3">setThree</a>
         </div><!-- end col -->
         <div class="col-xs-12 col-md-2">
           <a class="btn btn-primary" href="http://<?php echo $website; ?>/specialSet.php">setSpecial</a>
         </div><!-- end col -->
         <div class="col-xs-12 col-md-2">
         </div><!-- end col -->
    </div><!-- end row -->
</div><!-- close container -->
<?php include 'footer.php'; ?>
