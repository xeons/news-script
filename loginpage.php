<?php
include("checkpw.php");
include("dbconn.php");
include("top.php");
if ($username) { echo "<p>
You are already logged in as <b>$username</b><br><a href=index.php>To Control Panel</a>";
} else { 
echo "
<p>
<font face=\"Tahoma\" size=\"1\" color=\"#FFFFFF\">
News Script Login:
<form action=\"login.php\">
Username: <input type=\"text\" name=\"userid\"><br>
Password: <input type=\"password\" name=\"password\"><br>
<input type=submit value=\"Login\"><br>
<br><br>
</font>
</form>";
}include("bottom.php");?>