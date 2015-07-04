<?php include("checkpw.php"); include("dbconn.php"); include("top.php");
if ($username) { 
	echo "<br><img src=\"../images/modify_news.gif\"><br><br>";
if ($action == 1) {
$result = mysql_query("delete from news where eid='$eid'");
echo "<b>The news entry has been deleted.</b><br><br><br>";
} 
echo "
<b>Modify News:</b>
<br><br>";

$result = mysql_query("select uid from users where userid='$username'"); 
$aid=mysql_result($result, 0);
if ($username == "Brandon") {
  $resultafff = mysql_query("select * from news order by eid DESC"); 
} else {
  $resultafff = mysql_query("select * from news where pid='$aid' order by eid DESC"); 
}

if (mysql_num_rows($resultafff)) {  
  while ($row=mysql_fetch_assoc($resultafff)) {
  $eid = $row["eid"];
  $pid = $row["pid"];
  $subject = $row["subject"]; 
  $date = $row["date"]; 
  $emoticon = $row["emoticon"]; 
  $txtnews = $row["txtnews"];
  
  $userinfo = mysql_query("select * from users where uid='$pid'");
  while ($row=mysql_fetch_assoc($userinfo)) { 
  $name = $row["userid"];
  $aim = $row["aim"]; 
  $email = $row["email"]; 
  $txtnews = str_replace ("\n", "<br>", $txtnews);
  $txtnews = str_replace ("8-)", "<img src=\"smileys/cool.gif\">", $txtnews);
  $txtnews = str_replace (":-)", "<img src=\"smileys/happy.gif\">", $txtnews);
  $txtnews = str_replace (">:-(", "<img src=\"smileys/mad.gif\">", $txtnews);
  $txtnews = str_replace (">:o", "<img src=\"smileys/yelling.gif\">", $txtnews);
  $txtnews = str_replace (";-)", "<img src=\"smileys/winking.gif\">", $txtnews);
  $txtnews = str_replace (":-(", "<img src=\"smileys/sad.gif\">", $txtnews);
  $txtnews = str_replace (":-D", "<img src=\"smileys/reallyhappy.gif\">", $txtnews);
  echo "<b>Subject:</b> $subject<br><b>User:</b> $name<br>$txtnews<br><b><a href=\"modifynews.php?action=1&eid=$eid\">Delete</a>&nbsp;-&nbsp;<a href=\"editentry.php?eid=$eid\">Edit Entry</a></b><br><br>"; 
}
}
}  else { 
echo "No News post yet.";
} 
echo "<br><br>
<a href=\"index.php\"><b><u>Return to Control Panel</u></b></a>";
} else {
echo "You are not logged in.";
}
include("bottom.php"); ?>