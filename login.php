<?php  
$usernam="tdreams";
$pass="omega";
$db="news";

$conn = mysql_connect("localhost", "$usernam", "$pass") or die("Invalid server or user."); mysql_select_db("$db", $conn); 
$result = mysql_query("select password from users where userid='$userid'"); 
$realpw = @mysql_result($result, 0);
if ($realpw != $password) { 
exit("Wrong password, please try again."); }
setcookie("username", $userid, time()+86400, "/", ".tdreams.ppnhost.ws", 0);
setcookie("password", $password, time()+86400, "/", ".tdreams.ppnhost.ws", 0);
echo "<a href=index.php>Continue</a>";
?>