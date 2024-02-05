<?php

   
 if(empty($_REQUEST["data"])) {
    echo "Input is required";
  } else {
    echo htmlentities($_REQUEST["data"],ENT_QUOTES, "UTF-8");
  }

?>
