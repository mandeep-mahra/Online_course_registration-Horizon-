<html>
<head>
  <title>php</title>
<style>
a {
  color: black;
  text-decoration: none;

}
.bt1{
  border: 1px solid #aaaaaa;
  background: none;
  padding: 10px 20px;
  font-size: 25px;
  font-family: sans-serif;
  cursor: pointer;
  margin: 10px;
  transition: 0.8s;
}

</style>
</head>
<body align="center">
<?php
$conn=mysqli_connect("localhost","root","","online_courses");
if($conn===false)
{
  die("ERROR:could not connect.".mysqli_connect_error());
}
$name=$_REQUEST["name"];
$dob=$_REQUEST["date"];
$email=$_REQUEST["email"];
$mob=$_REQUEST["contact"];
$gen=$_REQUEST["gen"];

$sql="INSERT INTO course_data_science(name,dob,email,con_num,gen) VALUES('$name','$dob','$email','$mob','$gen')";

if(mysqli_query($conn,$sql))
{
echo "<h3>DATA stored in a database successfully</h3>";
 echo'<a href="home.html"><button class="bt1">Go to Home</button></a>';
}

else{
echo "ERROR:oh! sorry $sql.".mysqli_error($conn);
}
mysqli_close($conn);
 ?>
</body>
</html>
