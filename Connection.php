<?php
$servername="localhost";
$username="root";
$password="";
$dbname="phpproject";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn) 
{
//	echo "Connection done";
}
else
{
	//echo "Connection failed";  
	//or use to see error funtion of php
	
	die ("Connection failed beacuase ".mysqli_connect_error() );
	
	
}

?>