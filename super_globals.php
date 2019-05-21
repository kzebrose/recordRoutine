<!DOCTYPE html>
<html>
<body>

<?php 
$self = $_SERVER['PHP_SELF'];
echo "_SERVER['PHP_SELF'] = $self";
echo "<br>";
$name = $_SERVER['SERVER_NAME'];
echo "_SERVER['SERVER_NAME'] = $name";
echo "<br>";
$host =  $_SERVER['HTTP_HOST'];
echo "_SERVER['HTTP_HOST'] = $host";
echo "<br>";
$referer = $_SERVER['HTTP_REFERER'];
echo "_SERVER['HTTP_REFERER'] = $referer";
echo "<br>";
$userAgent =  $_SERVER['HTTP_USER_AGENT'];
echo "_SERVER['HTTP_USER_AGENT'] = $userAgent";
echo "<br>";
$script= $_SERVER['SCRIPT_NAME'];
echo "_SERVER['SCRIPT_NAME'] = $script";
?>

</body>
</html>
