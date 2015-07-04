<?php
setcookie("username", "", time()-86400, "/", ".tdreams.ppnhost.ws", 0);
setcookie("password", "", time()-86400, "/", ".tdreams.ppnhost.ws", 0);
echo "You are logged out now. <br> <a href=loginpage.php>Login as a new User!</a>";
 ?>