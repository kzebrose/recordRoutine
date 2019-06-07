<!DOCTYPE html>
<html>
<body>

<?php
//send email from the command line
//  <debian prompt>/usr/sbin/exim4 -i $(whoami) <<MAIL_END
//heredoc> subject:test e-mail
//heredoc> 
//heredoc> Hello mail world
//heredoc> MAIL_END

//translates position from stripos to boolean true/false
//search is case insensitive
function contains($substring, $string)
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


$server=$_SERVER['SERVER_NAME'];
print_r($server);echo "kzdebug";
if(contains("zebrose",$server))
{
  $to = "katezebrose@gmail.com";
  $headers = "From: info@zebrose" . "\r\n";
}
else
{
  $to = "kate@kates-debian.zebrose";
  $headers = "From: kate@kates-debian.zebrose" . "\r\n" .
      "CC: kate@kates-debian.zebrose";
}

$subject = "test sending php emails(uniqueStringTrevorZebrose) ";
$txt = "you need to look for the email in the to address in box\n";

mail($to,$subject,$txt,$headers);

//look for mail in /var/mail/kate and /var/mail/$(whoami)
?>
</body>
</html>
