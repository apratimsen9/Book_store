<?php 
session_start();
header("Location:index.php");
$username=$_POST['username'];
$password=$_POST['pass'];


include_once "../connection/index.php";
$sql="SELECT* FROM login;";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result))
{
	if($row['user']==$username&&$row['pass']==$password)
	{
		
		
		$_SESSION['name']=$row['tablename'];
		$_SESSION['seller']=$row['name'];
		header("Location:../newinsidepage/index.php");

	}
	
}



 ?>