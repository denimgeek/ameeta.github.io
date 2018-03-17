<style type="text/css">
	table{margin-top: 15%;
	}


</style>




<table align="center" border="1">
<tr>
<th>Name</th>
<td><input type="text" name ="name" value="name"></td>
</tr>
<tr>
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
	<td><?php echo $row["email"];?></td>
	

	
	</tr>
	<?php
}
contacts::closeconnection();
?>
