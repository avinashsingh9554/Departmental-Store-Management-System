<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
    }
   
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div style="background-color: #212121; margin-right:1100px;padding-bottom:379px">
	<img src="Avatar.png" alt="Avatar" width="200" height="200" style="border-radius: 50%;margin-left:20px;margin-top:20px;border:2px solid white">
	
	<?php  if (isset($_SESSION['username'])) : ?>
			<h3 style="color:white; padding-left:60px"><strong><?php echo $_SESSION['username']; ?></strong></h3>
            <button style="background-color:black;margin-left:80px;margin-top:10px;padding-left:10px;padding-right:10px"><a href="index.php?logout='1'" style="color:white;text-decoration: none;">logout</a> </button>
		
		<?php endif ?>
	
	</div>
	<div class="header" style="padding-left:683px;margin-left:249px; margin-top:-670px;background-color: #212121; border:2px solid #212121 ">
		<h2 style="margin-left:-650px;margin-top:10px">Profile Details</h2>
		<button style="background-color:black;margin-left:80px;margin-right:-200px;margin-top:-0px;padding-left:10px;padding-right:10px;"><a href="index.php" style="color:white;text-decoration: none;">Home</a> </button>
	</div>
	<div class="content" style="padding-left:540px;padding-right:10px;padding-top:400px;margin-top:70px;margin-right:70px;">

	<img src="sign2.jpg" alt="Avatar" width="380" height="400" style="margin-left:-500px;margin-top:-800px;padding-top:10;pxborder:2px solid white">
	
		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
		    <h1 style="margin-top:-380px;padding-left:70px;">Profile</h1>
			
		<?php endif ?>

		<table style="margin-top:20px">
					<tr>
						<td>Username:</td>
						<td><?=$_SESSION['username']?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><p>ankitsharma155@gmail.com</p></td>
					</tr>
					<tr>
						<td>Contact Number:</td>
						<td>9968548442</td>
					</tr>
				</table>
	</div>

		
</body>
</html>