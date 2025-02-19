<?php
include("config.php");
error_reporting(0);
$query="SELECT * FROM register";
$data=mysqli_query($mysqli, $query); 
$total=mysqli_num_rows($data);



if($total != 0)
{
	?>
	<table border="10px" bgcolor="lightgrey" style="border-color:yellow;">
		<tr>
			<th>id</th>
			<th>Name</th>
			<th>Email</th>
			<th>UserName</th>
			<th>Password</th>
			<th>Operation</th>
		</tr>
	

	
	
	<?php	
	while($result=mysqli_fetch_assoc($data))
	{
		echo "<tr>
			<td>".$result['id']." </td>
			<td>".$result['name']." </td>
			<td>".$result['email']." </td>
			<td>".$result['username']." </td>
			<td>".$result['password']."</td>
			<td><a href='delete.php?id=$result[id]' onclick='return checkdelete()'>Delete</a></td>
		</tr> ";
	}
}
else
{
	echo"No Record found";
}


?>
	</table>
<script>
function  checkdelete()
{
	return confirm('Are you Sure Delete this data?');
}
</script>