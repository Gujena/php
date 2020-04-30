<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php

if(isset($_POST['Submit'])) {	
	$roll = $_POST['roll'];
	$name = $_POST['name'];
	$email =$_POST['email'];
	$mobile =$_POST['mobile'];
	$dept = $_POST['dept'];
	$subject = $_POST['subject'];
	$mark = $_POST['mark'];	

	

$host='localhost';
$user='root';
$pass='';
$db='test';
$con=mysqli_connect($host,$user,$pass,$db);
if($con)
   echo 'connected successfully to student database';
   echo "<br>";

$sql="insert into users (name,roll,email,mobile,dept,subject,mark) values ('$name','$roll','$email','$mobile','$dept','$subject','$mark')";

$query=mysqli_query($con,$sql);
if($query)
   	echo ' data inserted successfully';
}

?>
<br>
<center><a href="index.php">Home</a></center>

</body>
</html>

