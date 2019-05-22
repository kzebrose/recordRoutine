<?php
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

  function getWebsite()
  {
    $server=$_SERVER['SERVER_NAME'];
    if(contains("zebrose",$server))
    {
      $website = $server."/exercise";
    }
    else
    {
      $website = $server;
    }
    return $website;
  }
?>
