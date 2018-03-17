<?php 
 $id = $_REQUEST['id'];
 include("class/contacts.php");

 $cn = new contacts();
 if($cn->RemoveContacts($id)){
 echo "<script>alert('Contacts Removed !');</script>";

}

 else 
 echo "<script>alert('Error Please Try again later !');</script>";
 contacts::closeconnection();
echo "<meta http-equiv='refresh' content='0,showContacts.php'/>";
 
?>