<?php
	$conn=mysqli_connect('localhost','root','','departmental') or die(mysqli_error($conn));
	$item_id=$_GET['id'];
//	$user_id=$_SESSION['id'];
	$qry="Delete FROM pay WHERE id='$item_id'";
	$run=mysqli_query($conn,$qry) or die(mysqli_error($conn));
header('location:shop2.php');
?>