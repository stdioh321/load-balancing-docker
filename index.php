<?php
echo "<h1>";
echo "Hostname: ".gethostname(); 
echo "</h1>";
echo "<br /><br />";
$ip_server = $_SERVER['SERVER_ADDR'];
  
// Printing the stored address
echo "Server IP Address is: $ip_server";
?>