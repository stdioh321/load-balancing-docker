<?php
echo "<h1>";
echo "Hostname: ".gethostname(); 
echo "</h1>";
echo "<br /><br />";
$ip_server = $_SERVER['SERVER_ADDR'];
  
// Printing the stored address
echo "<h2>";
echo "Server IP Address is: $ip_server";
echo "</h2>";
?>

<link rel="stylesheet" href="bootstrap.min.css" />