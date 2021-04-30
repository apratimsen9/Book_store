<?php

		include_once '../connection/index.php';

		if(isset($_POST['submit']))
{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$pass=$_POST['pass'];
		if(empty($name)||empty($pass)||empty($username)||empty($email))
		{
			header("Location:index.php");
			
		}
		else
		{

			$tablename=md5(uniqid('',true));
			$sql="INSERT INTO login(name,email,user,pass,tablename) VALUES('$name','$email','$username','$pass','$tablename');";
			$sql2="CREATE TABLE ".$tablename."(
  `id` int(10) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  `bookname` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `price` int(11) DEFAULT NULL,
  `num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
		
			mysqli_query($con,$sql);
			mysqli_query($con,$sql2);
			header("Location:index.php");
		}
	

		
}
else
{
	header("Location:login.php?signup error");
	echo "click submit";
}

		?>








