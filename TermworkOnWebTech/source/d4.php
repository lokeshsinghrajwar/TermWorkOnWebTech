<?php
$v=$_POST['lan'];
setcookie('Language','$v',time()+50,"/");
echo $_COOKIE['Language'];
?>