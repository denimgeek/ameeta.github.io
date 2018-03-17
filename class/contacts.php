<?php
include("globalconnect.php");
class contacts extends globalconnect{


public function createcontact($name,$email,$feedback){
			
			$link= parent::getconnection();
			$sql= "insert into db(name,email,feedback)values('$name','$email','$feedback')";
			$link->query($sql);
			if($link->affected_rows==1)
			return true;
			return false;
		}

public function getallcontacts(){
	$link=parent::getconnection();
	$sql="select * from db";
	$res = $link->query($sql);
	return $res ;
}

public function RemoveContacts($id){
		  $link = parent::getconnection();
		  $sql="delete from db where id=$id";
		  $link->query($sql);
		  if($link->affected_rows==1)
		  return true;
		  return false;
		 
		 
		 }
		 public function getcontacts($id){
			$link=parent::getconnection();
			$sql="select * from db where id=$id";
			$res=$link->query($sql);
			return $res;
		}
		 public function editcontacts($id,$name,$email,$feedback){
		 
		   $link = parent::getconnection();
		   $sql="update db set name='$name',email='$email',feedback='$feedback' where id=$id";
		   $link->query($sql);
		   if($link->affected_rows==1)
		   return true;
		   return false;
		 
		 
		 } 
		 public function signin($email,$password){
			
			$link= parent::getconnection();
			$sql= "insert into db(email,password)values('$email','$password')";
			$link->query($sql);
			if($link->affected_rows==1)
			return true;
			return false;
		}
}






























