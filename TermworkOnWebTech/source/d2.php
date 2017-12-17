<!ddoctype html>
<html>
<head>
<style>
table,tr,th,td
{
border: 1px solid black;
border-collapse: collapse;
}
</style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "select";
$p=$_POST["p"];

	
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error);
}


$sql = "SELECT * FROM PERS WHERE dno='$p'  ";

$res=mysqli_query($conn,$sql);

if(mysqli_num_rows($res)>0)
{
echo "<table>";
echo "<tr><th>dno</th><th>dname</th><th>HOD</th></tr>";

while($row=mysqli_fetch_assoc($res)){
echo "<tr>";
echo "<td>";
print $row['dno'];
echo "</td>";
echo "<td>";
print $row['dname'];
echo "</td>";
echo "<td>";
print $row['HOD'];
echo "</td>";
echo "</tr>";
}
echo "</table>";
}
else
echo " error" ;

?>
</body>
</html>