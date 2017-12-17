<?php
$conn=mysqli_connect('localhost','root','','l');

$U=$_POST['u'];
$P=$_POST['p'];
$qry="insert into detail values('$U','$P')";
$result=mysqli_query($conn,$qry);
if($result)
echo "Welcome New User";
else
echo "User already exists";
mysqli_close($conn);
?>
