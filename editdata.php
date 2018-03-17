<?php
 
    /*Accepting the Hidden Field ID Here */
	$id = $_REQUEST['h_id'];
	$email = $_REQUEST['email'];
	$feedback = $_REQUEST['feedback'];
	$name= $_REQUEST['name'];

	/*Database Update Scipt goes here ....*/
	  include("class/contacts.php");
	  $contact = new contacts();
	  if($contact->editcontacts($id,$name,$email,$feedback)){
	  echo "<script>alert('Contacts Updated !');</script>";
	  echo "<meta http-equiv='refresh' content='0,showContacts.php'/>";
	  }
      else 
	  echo "<script>alert('Server Busy ! Try Later !');</script>";
	  contacts::closeconnection();
	 
 	

 ?>
