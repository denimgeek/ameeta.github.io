<?php 
   $name = NULL;$email=NULL;$feedback=NULL;
   include("class/contacts.php");
   $id = $_REQUEST['id'];
   $contact = new contacts();
   $result = $contact->getcontacts($id);
   if($row = $result->fetch_assoc()){
       $name = $row['name'];
	   $email = $row['email'];
	   $feedback = $row['feedback'];

	   }
     contacts::closeconnection();
?>
<form method="post" action="editdata.php">
Name : <input type="text" name="name" value="<?php if(!empty($name)) echo $name; ?>"><br><br>
Email : <input type="text" name="email" value="<?php if(!empty($email)) echo $email; ?>"><br><br>
Feedback : <input type="text" name="feedback" value="<?php if(!empty($feedback)) echo $feedback; ?>"><br><br>
<input type="hidden" name="h_id" value="<?php echo $id;?>">
<input type="submit" name="update" value="update">
</form>