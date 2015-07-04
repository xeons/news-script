<?php

$usernam="tdreams";
$pass="omega";
$db="news";

$conn = mysql_connect("localhost", "$usernam", "$pass") or die("Invalid server or user."); mysql_select_db("$db", $conn); 
?>