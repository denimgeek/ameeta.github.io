<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register Now :</title>
<style>
body{background-image:url(image/ERDF066photo2-3730jcWDd.jpg);}
form{
	background-image: url(image/518071-background-hd_xO1TwRc.jpg);
	width: 40%;
	padding: 14px;
	position: absolute;
	left: 61px;
	top: 94px;
	height: 416px;
	}
	
	#map{position:absolute;}
	
	th{color:#100C63;
	}
	
	input[type=text],textarea{
		
		background:none;
		border-left:hidden;
		border-right:hidden;
		border-top:none;
		width:150%;
		
		
		}
		input[type=submit]{
			border:none;
			padding:10px;
			background-color:#7EE454;
			
			}
			input[type=submit]:hover{
			border:none;
			padding:10px;
			background-color:#2DDD25;
			
			}
			
				input[type=reset]{
			border:none;
			padding:10px;
			background-color:#F53C3F;
			
			}
			input[type=reset]:hover{
			border:none;
			padding:10px;
			background-color:#E91616;
			
			}
			#map{
	position: absolute;
	left: 669px;
	top: 90px;
}
h1{color:#063B0F;
text-shadow:5px 5px 5px #92F8F9;} 
#img1{
	position: absolute;
	left: 61px;
	top: 415px;
	width: 536px;
	height: 126px;
}
</style>

</head>
<body>
<?php 
   if(isset($_REQUEST['submit'])){
	    /*Accepting all the params */
		$name = $_REQUEST['name'];
		$email =   $_REQUEST['email'];
		$feedback = $_REQUEST['feedback'];
		
		 include("class/contacts.php");
		 $c = new contacts();
		 if($c->createcontact($name,$email,$feedback)){
		 echo "<script>alert('You have Successfully Registered With Us !');</script>";
		 echo "<meta http-equiv='refresh' content='0,showcontacts.php'/>";
		 }
		 else 
		 echo "<script>alert('Unknown Error ! Please Try after some time !');</script>";
	     contacts::closeconnection();
			}
			
			 
		
	   
?>
<form name="frm" method="post" enctype="multipart/form-data" onsubmit="return isFileSize()">
<h1 align="center">Register With Us</h1>
<table>
<tr>
<th>Name :</th>
<td><input type="text" name="name" required placeholder="Name .."/></td>
</tr>
<tr>
<th>Email :</th>
<td><input type="text" name="email" ></td>
</tr>
<tr>
<th>feedback :</th>
<td><textarea rows="5" name="feedback"></textarea></td>
</tr>


<tr>
<th></th>
<td><input type="submit" name="submit" value="Submit">
    <input type="reset" value="Reset">
</td>
</tr>



</table>
</form>

<div id="map"><iframe src= " https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1826.443811242041!2d86.95005205568847!3d23.715706796018836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f71f28112dc85f%3A0xc2814fdb4c367784!2sAsansol+Engineering+College!5e0!3m2!1sen!2sin!4v1498898801190" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
<marquee><h3>with the best faculty and infrastructure and best quality of education we are here</h3> </marquee>

</body>
</html>