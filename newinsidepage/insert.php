<?php 
include_once "../connection/index.php";
if(isset($_POST['submit']))
{
	session_start();
	$seller=$_SESSION['seller'];
$name=$_POST['name'];
$author=$_POST['author'];
$details=$_POST['details'];
$image=$_FILES['image'];
$extension=explode('.', $image['name']);
$originalext=strtolower(end($extension));
$newname=uniqid('',true).'.'.$originalext;
$filedestiny='../insidepage/covers/'.$newname;
move_uploaded_file($image['tmp_name'],$filedestiny);
$sql1="INSERT INTO ".$_SESSION['name']."(bookname,author,image,details) VALUES ('$name','$author','$filedestiny','$details');";
$sql2="INSERT INTO books (bookname,author,retailer,image,details) VALUES ('$name','$author','$seller','$filedestiny','$details');";
mysqli_query($con,$sql1);
mysqli_query($con,$sql2);

}

		header("Location:../newinsidepage/index.php");
		 
?>
 