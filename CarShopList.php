<?php
include("config.php");
error_reporting(0);
$query="SELECT * FROM carbuy";
$data=mysqli_query($mysqli, $query); 
$total=mysqli_num_rows($data);



if($total != 0)
{
	?>
	<table border="10px" bgcolor="lightgrey" style="border-color:yellow;">
		<tr>
			<th>id</th>
			<th>Name</th>
			<th>state</th>
			<th>city</th>
			<th>birthdate</th>
			<th>mobileno</th>
			<th>email</th>
			<th>adharno</th>
			<th>payment</th>
			<th>choose catagory</th>
			<th>choose modal</th>
			<th colspan="2">Operation</th>
		</tr>
	

	
	
	<?php	
	while($result=mysqli_fetch_assoc($data))
	{
		echo "<tr>
			<td>".$result['id']." </td>
			<td>".$result['name']." </td>
			<td>".$result['state']." </td>
			<td>".$result['city']." </td>
			<td>".$result['birthdate']."</td>
			<td>".$result['mobileno']."</td>
			<td>".$result['email']."</td>
			<td>".$result['adharno']."</td>
			<td>".$result['payment']."</td>
			<td>".$result['choosecatagory']."</td>
			<td>".$result['choosemodal']."</td>
			<td><a href='update1.php?id=$result[id] &name=$result[name] &state=$result[state]
			&city=$result[city] &date=$result[birthdate] &mobileno=$result[mobileno] &email=$result[email] adno=$result[adharno]
          &payment=$result[payment]	&cat=$result[choosecatagory]	&modal=$result[choosemodal]	'>Edit</a></td>
			<td><a href='Delete - Copy (2).php?id=$result[id]' onclick='return checkdelete()'>Delete</a></td>
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