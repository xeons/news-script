<?php include("checkpw.php"); include("dbconn.php"); include("top.php");
if ($username) { 
	echo "<br><img src=\"../images/modify_news.gif\"><br><br>";
if ($action == 1) {
$result = mysql_query("update news set subject='$subject', emoticon='$emoticon', txtnews='$txtnews' where eid='$eid'");
echo "<b>The news entry has been updated.</b><br><br><a href=index.php>Back to Control Panel</a>";
} else {
echo "<b>Unknown Action</b><br><br><br>";
}
} else {
echo "<b>Not Logged In</b><br><br><br>";
}
include("bottom.php"); ?>