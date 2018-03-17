<style type="text/css">
	table{margin-top: 15%;
	}


</style>




<table align="center" border="1">
<tr>
<th>Name</th>
<th>Email</th>
<th>Feedback</th>
<th>Action</th>
</tr>
<?php
include("class/contacts.php");
$c=new contacts();
$recorset=$c->getallcontacts();
while($row=$recorset->fetch_assoc()){
	?>
	<tr>
	<td><?php echo $row["name"];?></td>
	<td><?php echo $row["email"];?></td>
	<td><?php echo $row["feedback"];?></td>
	<td><?php echo $row["image"];?></td>
	<td><a href="edit_data.php?id=<?php echo $row["id"];?>">Edit</a>    <a href="delete.php?id=<?php echo $row["id"]?>"> Delete</a></td>
	
	</tr>
	<?php
}
contacts::closeconnection();
?>
