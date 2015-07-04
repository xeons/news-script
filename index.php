 <?php include("checkpw.php"); include("top.php"); 
if ($username) { 
echo "<div align=\"center\"><br>Welcome <b>$username</b> to Twisted News!<br><a href=../main.php>Back to Twisted Dreams</a><br><br><img src=\"../images/news_system.gif\" width=\"468\" height=\"34\"><br>
  <br>
  <img src=\"../images/ad_top.gif\" width=\"468\" height=\"20\"><br>
<table width=\"468\" border=\"0\" cellspacing=\"1\" cellpadding=\"5\" align=\"center\" style=\"filter:alpha(opacity=70)\" bgcolor=\"#000000\">
<tr bgcolor=\"#3399FF\"> 
<td width=\"10%\" height=\"19\"> 
<div align=\"center\"><font color=\"#FFFFFF\"><b><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"><a href=\"postnews.php\">Post 
  News </a></font></b></font></div>
</td>
<td width=\"10%\" height=\"19\"> 
<div align=\"center\"><font color=\"#FFFFFF\"><b><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"><a href=\"modifynews.php\">Moderate 
  News </a></font></b></font></div>
</td>
<td width=\"10%\" height=\"19\"> 
<div align=\"center\"><font color=\"#FFFFFF\"><b><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"><a href=\"logout.php\">Logout 
  / Login</a></font></b></font></div>
</td>
</tr>
</table>
  <img src=\"../images/ad_bottem.gif\" width=\"468\" height=\"20\"></div>";
}  else { 
echo "<br>You are not logged into Twisted News, <b><a href=\"loginpage.php\">Click here to login!</a></b>";
} include("bottom.php"); ?>
