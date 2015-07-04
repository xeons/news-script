<?php include("dbconn.php"); include("checkpw.php"); include("top.php");
$date = strftime("%A, %B %d, %Y");
if ($username) { 
$userinfo = mysql_query("select * from users where userid='$username'");
while ($row=mysql_fetch_assoc($userinfo)) { 
$name = $row["userid"];
$aim = $row["aim"]; 
$email = $row["email"]; 
}
$entryinfo = mysql_query("select * from news where eid='$eid'");
while ($row=mysql_fetch_assoc($entryinfo)) { 
$subject = $row["subject"];
$postdate = $row["date"]; 
$emoticon= $row["emoticon"]; 
$txtnews= $row["txtnews"]; 
}
echo "
<form method=\"post\" action=\"postsettings.php\">
  <input type=\"hidden\" name=\"action\" value=\"1\">
  <input type=\"hidden\" name=\"eid\" value=\"$eid\">
  <table width=\"468\" border=\"0\" cellspacing=\"0\" cellpadding=\"5\">
  <tr> 
  <td width=\"69\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">Subject:</font></td>
  <td width=\"379\"> <b><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"text\" name=\"subject\" size=\"50\" maxlength=\"255\" value=\"$subject\">
  </font></b></td>
  </tr>
  <tr> 
  <td width=\"69\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">Date:</font></td>
  <td width=\"379\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">$postdate</font></td>
  </tr>
  <tr> 
  <td width=\"69\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">Name:</font></td>
  <td width=\"379\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">$name</font></td>
  </tr>
  <tr> 
  <td width=\"69\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">AIM:</font></td>
  <td width=\"379\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">$aim</font></td>
  </tr>
  <tr> 
  <td width=\"69\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">Email:</font></td>
  <td width=\"379\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">$email</font></td>
  </tr>
  <tr> 
  <td width=\"69\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">Emoticon:</font></td>
  <td width=\"379\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
<table width=\"379\" border=\"0\" cellspacing=\"3\" cellpadding=\"0\">
  <tr valign=\"middle\"> 
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"1\" checked>
  </font></td>
  <td width=\"17%\"><img src=\"emoticons/1.gif\" width=\"33\" height=\"37\"></td>
  <td width=\"4%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"2\">
  </font></td>
  <td width=\"19%\"><img src=\"emoticons/2.gif\" width=\"40\" height=\"24\"></td>
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"3\">
  </font></td>
  <td width=\"9%\"><img src=\"emoticons/3.gif\" width=\"32\" height=\"34\"></td>
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"4\">
  </font></td>
  <td width=\"8%\"><img src=\"emoticons/4.gif\" width=\"27\" height=\"47\"></td>
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"5\">
  </font></td>
  <td width=\"15%\"><img src=\"emoticons/5.gif\" width=\"49\" height=\"51\"></td>
  </tr>
  <tr valign=\"middle\"> 
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"6\">
  </font></td>
  <td width=\"17%\"><img src=\"emoticons/6.gif\" width=\"30\" height=\"39\"></td>
  <td width=\"4%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"7\">
  </font></td>
  <td width=\"19%\"><img src=\"emoticons/7.gif\" width=\"33\" height=\"32\"></td>
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"8\">
  </font></td>
  <td width=\"9%\"><img src=\"emoticons/8.gif\"></td>
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"9\">
  </font></td>
  <td width=\"8%\"><img src=\"emoticons/9.gif\" width=\"38\" height=\"39\"></td>
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"10\">
  </font></td>
  <td width=\"15%\"><img src=\"emoticons/10.gif\" width=\"33\" height=\"39\"></td>
  </tr>
  <tr valign=\"middle\"> 
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"11\">
  </font></td>
  <td width=\"17%\"><img src=\"emoticons/11.gif\" width=\"33\" height=\"44\"></td>
  <td width=\"4%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"12\">
  </font></td>
  <td width=\"19%\"><img src=\"emoticons/12.gif\"></td>
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"13\">
  </font></td>
  <td width=\"9%\"><img src=\"emoticons/13.gif\"></td>
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"14\">
  </font></td>
  <td width=\"8%\"><img src=\"emoticons/14.gif\"></td>
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"15\">
  </font></td>
  <td width=\"15%\"><img src=\"emoticons/15.gif\"></td>
  </tr>
  <tr valign=\"middle\"> 
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"16\">
  </font></td>
  <td width=\"17%\"><img src=\"emoticons/16.gif\"></td>
  <td width=\"4%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"17\">
  </font></td>
  <td width=\"19%\"><img src=\"emoticons/17.gif\"></td>
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"18\">
  </font></td>
  <td width=\"9%\"><img src=\"emoticons/18.gif\"></td>
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"19\">
  </font></td>
  <td width=\"8%\"><img src=\"emoticons/19.gif\"></td>
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"20\">
  </font></td>
  <td width=\"15%\"><img src=\"emoticons/20.gif\"></td>
  </tr>
  <tr valign=\"middle\"> 
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"21\">
  </font></td>
  <td width=\"17%\"><img src=\"emoticons/21.gif\"></td>
  <td width=\"4%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"22\">
  </font></td>
  <td width=\"19%\"><img src=\"emoticons/22.gif\"></td>
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"23\">
  </font></td>
  <td width=\"9%\"><img src=\"emoticons/23.gif\"></td>
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"24\">
  </font></td>
  <td width=\"8%\"><img src=\"emoticons/24.gif\"></td>
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"25\">
  </font></td>
  <td width=\"15%\"><img src=\"emoticons/25.gif\"></td>
  </tr>
  <tr valign=\"middle\"> 
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"26\">
  </font></td>
  <td width=\"17%\"><img src=\"emoticons/26.gif\"></td>
  <td width=\"4%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"27\">
  </font></td>
  <td width=\"19%\"><img src=\"emoticons/27.gif\"></td>
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"28\">
  </font></td>
  <td width=\"9%\"><img src=\"emoticons/28.gif\"></td>
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"29\">
  </font></td>
  <td width=\"8%\"><img src=\"emoticons/29.gif\"></td>
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"30\">
  </font></td>
  <td width=\"15%\"><img src=\"emoticons/30.gif\"></td>
  </tr>
  <tr valign=\"middle\"> 
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"31\">
  </font></td>
  <td width=\"17%\"><img src=\"emoticons/31.gif\"></td>
  <td width=\"4%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"32\">
  </font></td>
  <td width=\"19%\"><img src=\"emoticons/32.gif\"></td>
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"33\">
  </font></td>
  <td width=\"9%\"><img src=\"emoticons/33.gif\"></td>
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"34\">
  </font></td>
  <td width=\"8%\"><img src=\"emoticons/34.gif\"></td>
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"35\">
  </font></td>
  <td width=\"15%\"><img src=\"emoticons/35.gif\"></td>
  </tr>
  <tr valign=\"middle\"> 
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"36\">
  </font></td>
  <td width=\"17%\"><img src=\"emoticons/36.gif\"></td>
  <td width=\"4%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"37\">
  </font></td>
  <td width=\"19%\"><img src=\"emoticons/37.gif\"></td>
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"38\">
  </font></td>
  <td width=\"9%\"><img src=\"emoticons/38.gif\"></td>
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"39\">
  </font></td>
  <td width=\"8%\"><img src=\"emoticons/39.gif\"></td>
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"40\">
  </font></td>
  <td width=\"15%\"><img src=\"emoticons/40.gif\"></td>
  </tr>
  <tr valign=\"middle\"> 
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"41\">
  </font></td>
  <td width=\"17%\"><img src=\"emoticons/41.gif\"></td>
  <td width=\"4%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"42\">
  </font></td>
  <td width=\"19%\"><img src=\"emoticons/42.gif\"></td>
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"43\">
  </font></td>
  <td width=\"9%\"><img src=\"emoticons/43.gif\"></td>
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"44\">
  </font></td>
  <td width=\"8%\"><img src=\"emoticons/44.gif\"></td>
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"45\">
  </font></td>
  <td width=\"15%\"><img src=\"emoticons/45.gif\"></td>
  </tr>
  <tr valign=\"middle\"> 
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"46\">
  </font></td>
  <td width=\"17%\"><img src=\"emoticons/46.gif\"></td>
  <td width=\"4%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"47\">
  </font></td>
  <td width=\"19%\"><img src=\"emoticons/47.gif\"></td>
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"49\">
  </font></td>
  <td width=\"9%\"><img src=\"emoticons/49.gif\"></td>
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"48\">
  </font></td>
  <td width=\"8%\"><img src=\"emoticons/48.gif\"></td>
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"50\">
  </font></td>
  <td width=\"15%\"><img src=\"emoticons/50.gif\"></td>
  </tr>
  <tr valign=\"middle\"> 
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"51\">
  </font></td>
  <td width=\"17%\"><img src=\"emoticons/51.gif\"></td>
  <td width=\"4%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"52\">
  </font></td>
  <td width=\"19%\"><img src=\"emoticons/52.gif\"></td>
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"53\">
  </font></td>
  <td width=\"9%\"><img src=\"emoticons/53.gif\"></td>
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"54\">
  </font></td>
  <td width=\"8%\"><img src=\"emoticons/54.gif\"></td>
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"55\">
  </font></td>
  <td width=\"15%\"><img src=\"emoticons/55.gif\"></td>
  </tr>
  <tr valign=\"middle\"> 
  <td width=\"7%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"56\">
  </font></td>
  <td width=\"17%\"><img src=\"emoticons/56.gif\"></td>
  <td width=\"4%\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <input type=\"radio\" name=\"emoticon\" value=\"57\">
  </font></td>
  <td width=\"19%\"><img src=\"emoticons/57.gif\"></td>
  <td colspan=\"6\">
  <div align=\"center\"><font face=\"Tahoma\" size=\"2\">Emoticons from PsyGuy<br>
    <a href=\"http://www.psyguy.com\">http://www.psyguy.com</a></font></div>
  </td>
  </tr>
  </table>
  </font></td>
  </tr>
  <tr> 
  <td width=\"69\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\">News:</font></td>
  <td width=\"379\"> <font face=\"Arial, Helvetica, sans-serif\" size=\"2\"> 
  <textarea name=\"txtnews\" cols=\"50\" rows=\"5\">$txtnews</textarea>
  </font></td>
  </tr>
  <tr> 
  <td colspan=\"2\" height=\"28\"> 
  <div align=\"center\"> <b><font size=\"2\"><font face=\"Arial, Helvetica, sans-serif\"> 
    <input type=\"submit\" name=\"Submit\" value=\"Submit\">
    </font></font></b></div>
  </td>
  </tr>
  </table>
</form>
";
}  else { 
echo "You are not logged in.";
} include("bottom.php");?>