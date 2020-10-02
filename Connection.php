<?php
$servername="sql301.epizy.com";
$username="epiz_24983216";
$password="ekcRLsBAX5R";
$dbname="epiz_24983216_student";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	//echo "Connection done";
}
else
{
	//echo "Connection failed";  
	//or use to see error funtion of php
	
	die ("Connection failed beacuase ".mysqli_connect_error() );
	
	
}

?>