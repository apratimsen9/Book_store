<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<?php 
	include_once "../connection/index.php";
	session_start();
	$output=$_SESSION['click'];
	$sql="SELECT*FROM ".$_SESSION['name']." WHERE id=$output";
  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_assoc($result);
	
	if (!empty($_POST['name'])) {
		$name=$_POST['name'];
			}
			else
			{
				$name=$row['bookname'];
			}
	if (!empty($_POST['amount'])) {
		$amount=$_POST['amount'];
			}
			else
			{
				$amount=$row['num'];
			}
	if (!empty($_POST['author'])) {
		$author=$_POST['author'];
			}
			else
			{
				$author=$row['author'];
			}
	if (!empty($_POST['price'])) {
		$price=$_POST['price'];
			}
			else
			{
				$price=$row['price'];
			}
			if (!empty($_POST['details'])) {
		$details=$_POST['details'];
			}
			else
			{
				$details=$row['details'];
			}

$image=$_FILES['image'];
if (!empty($image['name'])) {
	$extension=explode('.', $image['name']);
$originalext=strtolower(end($extension));
$newname=uniqid('',true).'.'.$originalext;
$filedestiny='../insidepage/covers/'.$newname;
move_uploaded_file($image['tmp_name'],$filedestiny);
}
else
{
	$filedestiny=$row['image'];
}



	
	
	
	// $author=$_POST['author'];
	// $details=$_POST['details'];
	// $price=$_POST['price'];
	// $amount=$_POST['amount'];
	if(isset($_POST['submit']))
{
	

	$sql1="UPDATE ".$_SESSION['name']." SET bookname='$name', author='$author' ,details='$details',image='$filedestiny', price='$price',num='$amount'  WHERE id='$output';";

	$sql2="UPDATE books SET bookname='$name', author='$author' ,details='$details',image='$filedestiny', price='$price',num='$amount'  WHERE id='$output';";

	mysqli_query($con,$sql1);
	mysqli_query($con,$sql2);



	header("Location:indexedit.php");

}
	if(isset($_POST['delete']))
	{
		include_once "../connection/index.php";
		$sql="DELETE FROM ".$_SESSION['name']." WHERE id='$output';";

		mysqli_query($con,$sql);
		header("Location:index.php");

	}
	if(isset($_POST['back']))
	{
		
		header("Location:../newinsidepage/index.php");
	}

?>

</body>
</html>
