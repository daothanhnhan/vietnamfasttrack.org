<?php include_once DIR_HEADER."MS_HEADER_VIETNAMFASTTRACK_0001.php";  ?>
<?php 
function curPageURL() {
     $pageURL = 'http';
     if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
     $pageURL .= "://";
     if ($_SERVER["SERVER_PORT"] != "80") {
      $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"];
     } else {
      $pageURL .= $_SERVER["SERVER_NAME"];
     }
     return $pageURL;
}
?>