<? include("news_script/dbconn.php");
$resultafff = mysql_query("select * from news order by eid DESC"); 
if (mysql_num_rows($resultafff)) {  
  while ($row=mysql_fetch_assoc($resultafff)) {
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
  $txtnews = str_replace ("8-)", "<img src=\"news_script/smileys/cool.gif\">", $txtnews);
  $txtnews = str_replace (":-)", "<img src=\"news_script/smileys/happy.gif\">", $txtnews);
  $txtnews = str_replace (">:-(", "<img src=\"news_script/smileys/mad.gif\">", $txtnews);
  $txtnews = str_replace (">:o", "<img src=\"news_script/smileys/yelling.gif\">", $txtnews);
  $txtnews = str_replace (";-)", "<img src=\"news_script/smileys/winking.gif\">", $txtnews);
  $txtnews = str_replace (":-(", "<img src=\"news_script/smileys/sad.gif\">", $txtnews);
  $txtnews = str_replace (":-D", "<img src=\"news_script/smileys/reallyhappy.gif\">", $txtnews);
  echo "<table width=\"421\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
<tr>
<td height=\"20\" background=\"images/newshead.gif\">
<div align=\"center\"><font face=\"Arial, Helvetica, sans-serif\" size=\"1\" color=\"#FFFFFF\"><b>$subject</b></font></div>
</td>
</tr>
<tr> 
<td background=\"images/newsmid.gif\">
<table border=\"0\" cellspacing=\"5\" cellpadding=\"0\" width=\"100%\">
<tr> 
<td width=\"75%\" height=\"9\"><font face=\"Arial, Helvetica, sans-serif\" size=\"1\" color=\"#FFFFFF\">User: 
$name</font></td>
<td rowspan=\"4\" valign=\"top\"> 
<div align=\"center\">
  <img src=\"news_script/emoticons/$emoticon.gif\"><br>
</div>
</td>
</tr>
<tr> 
<td width=\"75%\" height=\"9\"><font face=\"Arial, Helvetica, sans-serif\" size=\"1\" color=\"#FFFFFF\">Date: 
$date</font></td>
</tr>
<tr> 
<td width=\"75%\" height=\"9\"><font face=\"Arial, Helvetica, sans-serif\" size=\"1\" color=\"#FFFFFF\">Email: 
<a href=\"mailto:$email\"><b>Email Me</b></a></font></td>
</tr>
<tr>
<td width=\"75%\" height=\"2\">&nbsp;</td>
</tr>
<tr> 
<td colspan=\"2\"> 
<div align=\"center\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\" color=\"#FFFFFF\"><b>$txtnews</b></font></div>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td><img src=\"images/newsfoot.gif\" width=\"421\" height=\"4\"></td>
</tr>
</table>
<br>
<br>";
} 
}
} else {
echo "No news Entries yet.<br>";
}
?>