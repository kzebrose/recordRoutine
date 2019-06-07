<!DOCTYPE html>
<html>
<body>
<p>It appears the super globals in PHP are only available in web pages.
They do not seem to work in php scripts run from the console.</p>
<h2><?php echo $_SERVER['PHP_SELF'];?></h2>
<h2><?php echo $_SERVER['SERVER_NAME'];?></h2>
</body>
</html>
