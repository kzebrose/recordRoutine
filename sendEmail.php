<?php
//send email from the command line
//  <debian prompt>/usr/sbin/exim4 -i $(whoami) <<MAIL_END
//heredoc> subject:test e-mail
//heredoc> 
//heredoc> Hello mail world
//heredoc> MAIL_END


$to = "kate@kates-debian.zebrose";
$subject = "test sending php emails";
$txt = "you need to look at the just host disk space\n";
$headers = "From: kate@kates-debian.zebrose" . "\r\n" .
  "CC: kate@kates-debian.zebrose";

mail($to,$subject,$txt,$headers);

//look for mail in /var/mail/kate and /var/mail/$(whoami)
?>
