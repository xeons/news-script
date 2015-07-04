<?php include("dbconn.php"); include("checkpw.php");
if (!($subject)) {
echo "Subject Required";
exit;
}
if (!($txtnews)) {
echo "News Required";
exit;
}
$date = strftime("%A, %B %d, %Y");
if ($username) { 
$result = mysql_query("select uid from users where userid='$username'"); 
$pid = @mysql_result($result, 0);
$result = mysql_query("insert into news (subject, date, emoticon, txtnews, pid) values ('$subject', '$date', '$emoticon', '$txtnews', '$pid')"); 
echo "News Entry Recorded on $date<br><b><a href=index.php>Back to Control Panel</a></b>";
}  else { 
echo "You are not logged in, Therfore you cannot post news on Twisted Dreams. <a href=loginpage.php>Login In Now!</a>";
} ?>