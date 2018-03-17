<?php
session_start();
if(isset($_POST["send"])){


$email=$_POST["email"];
$password=$_POST["password"];

include("class/contacts.php");

$c=new contacts();
if($c->signup($email,$password)){

echo"<script>alert('Successfully Insert with us');</script>";
echo"<meta http-equiv='refresh' content='0,login.php'";
}

else{
		echo"<script>alert'Unknown Error';</script>";
}
}
?>
<form method="post">
Email : <input type="text" name="email"><br><br>
Password : <input type="text" name="password"><br><br>

<input type="submit" name="send" value="Signin">
</form>