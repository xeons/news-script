<?php include("dbconn.php"); 
	if (isset($username)) { 
		$result = mysql_query("select password from users where userid='$username'"); 
		if (mysql_num_rows($result)) { 
			$realpw = mysql_result($result, 0); 
		} 
		if ($realpw != $password) { 
			exit("Wrong password, please try again."); 
		}
	} 
?>