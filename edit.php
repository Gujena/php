<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	
	$id =$_POST['id'];
	$roll = $_POST['roll'];
	
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mark = $_POST['mark'];	
	
	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE users SET name='$name',roll='$roll',subject='$subject',mark='$mark' WHERE id=$id");
		
		
		header("Location: index.php");
	}

?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$roll = $res['roll'];
	$name = $res['name'];
	$subject = $res['subject'];
	$mark = $res['mark'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Roll Number</td>
				<td><input type="text" name="roll" value="<?php echo $roll;?>"></td>
			</tr>
			<tr> 
				<td>Student Name</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"></td>
			</tr>
			<tr> 
				<td>Subject</td>
				<td><input type="text" name="subject" value="<?php echo $Subject;?>"></td>
			</tr>
			<tr> 
				<td>Mark</td>
				<td><input type="text" name="mark" value="<?php echo $mark;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
