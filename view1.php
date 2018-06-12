<?php
$con=mysqli_connect("localhost","root","","names");
$qry=mysqli_query($con,"SELECT * FROM student");
?>
<table border="2px"><tr><td>NAME</td><td>MARK</td></tr>
	<?php while($r=mysqli_fetch_array($qry))
	 { ?>
	 	<tr><td><?php echo $r['NAME'];?></td>
	 		<td><?php echo $r['MARK'];?></td>
	 	    <td><a href="edit.php?id=<?php echo $r['ID'];?>">edit</a></td>
	 	    <td><a href="del.php?id=<?php echo $r['ID'];?>">delete</a></td>
	 	</tr><?php } ?>
	 </table>