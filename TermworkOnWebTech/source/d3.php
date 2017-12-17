<?php
//start the session 
session_start();
?>
<!doctype html>
<html>
<body>
<?php
//set session variables
$_SESSION["username"]=".$_POST[username].";
$_SESSION["password"]=".$_POST[password].";
echo "session variables are set.";
echo "Username is".$_SESSION["username"].".<br>";
echo "Password is".$_SESSION["password"].".";
?>
</body>
</html>