<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<a href="add.html">Add New Data</a><br/><br/>
	<center>
		<h2 style="color:red;"> Student Records </h2>
		<table width='80%' border=1%>

	<tr bgcolor='#CCCCCC'>
		
		<td>Roll No</td>
		<td>Name  </td> 
		<td>Email</td>
		<td>Mobile</td>
		<td>Department</td>
		<td>Subject</td>
		<td>Mark</td>
		<td>Grade</td>
		<td>Actions</td>
	</tr>
	<?php 
	
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";

		echo "<td>".$res['roll']."</td>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['email']."</td>";
		echo "<td>".$res['mobile']."</td>";
		echo "<td>".$res['dept']."</td>";
		echo "<td>".$res['subject']."</td>";
		echo "<td>".$res['mark']."</td>";
		$a=$res['mark'];
		if($a>=90 and $a<100 )
			echo "<td>"."S"."</td>";
		elseif($a>=80 and $a<100)
			echo "<td>"."A+"."</td>";
		elseif($a>=70 and $a<100)
			echo "<td>"."A"."</td>";
		elseif($a>=60 and $a<100)
			echo "<td>"."B"."</td>";
		elseif($a>=50 and $a<100)
			echo "<td>"."C"."</td>";
		else
			echo "<td>"."Fail"."</td>";	
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
	</center>

	
</body>
</html>
