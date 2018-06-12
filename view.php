<?php
$con=mysqli_connect("localhost","root","","attendance");
$qry=mysqli_query($con,"SELECT * FROM employee");
?>
<table border="2px"><tr><td>NAME</td><td>MARK</td><td>LOGIN</td><td>LOGOUT</td><td>HOURS</td></tr>
	<?php while($r=mysqli_fetch_array($qry))
	 { ?>
	 	<tr><td><?php echo $r['ID'];?></td>
	 		<td><?php echo $r['EMP'];?></td>
	 		<td><?php echo $r['LOGIN'];?></td>
	 		<td><?php echo $r['LOGOUT'];?></td>
	 		<td><?php echo $r['HOURS'];?></td>
	 	    <td><a href="edit.php?id=<?php echo $r['ID'];?>">edit</a></td>
	 	    <td><a href="del.php?id=<?php echo $r['ID'];?>">delete</a></td>
	 	</tr><?php } ?>
	 </table>
	 <form action="create.php">
	 	<input type="submit" value="create another record">
	 </form>