<html>
<head>
  <title>php</title>
</head>
<body>
<?php
$conn=mysqli_connect("localhost","root","","tab");
if($conn===false)
{
  die("ERROR:could not connect.".mysqli_connect_error());
}
$user=$_REQUEST["username"];
$pass=$_REQUEST["password"];

$sql="INSERT INTO tabs(user,pass) VALUES('$user','$pass')";

if(mysqli_query($conn,$sql))
{
echo "<h3>DATA stored in a database successfully</h3>";
}

else{
echo "ERROR:oh! sorry $sql.".mysqli_error($conn);
}
mysqli_close($conn);
 ?>
</body>
</html>
