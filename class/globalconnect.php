<?php

class globalconnect{

	public static function getconnection(){
		$con= new MySQLi("localhost","root","","testoop");
		if($con->connect_error)
		echo $con->connect_error;
		else{
			return $con;
		}
		
		
		
		
		
	}

	public static function closeconnection()
	{

		$con= new MySQLi("localhost","root","","testoop");
		$con->close();



	}


}
?>