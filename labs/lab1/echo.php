<?php
   
 if(!isset($_REQUEST["data"])) {
    die("{\"error\":\"Please provide input field\"}");
  } else {
  echo  htmlentities($_REQUEST["data"],ENT_QUOTES);
    }

?>


 
