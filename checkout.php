
<html>
<head>
<title></title>
<style>
  .modal {
  display: none; 
  position: fixed; 
  z-index: 1; 
  padding-top: 100px; 
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto; 
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0,0.4);
}
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 50%;

}
.close {
  color: #aaaaaa;
  float: right;

   margin-top: -130px;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
th, td {
  border-bottom: 1px solid #ddd;
}
tr:hover {background-color:black; color: white;}

tr:nth-child(even,odd){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}

input[type=text]:focus {
color:blue;
  border-color: green;
}
input[type=text]
{
	width:70px;
	background-color: rgb(211,211,211);
	height: 30px;
	margin: 0px 10px;
	text-align: center;
	border-radius: 3px;
	border:0px;
	
}
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  height: 300px;
 
}
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
</style>
</head>
<body style=" background-color:  #007a5c; background-image: linear-gradient(to right,  #007a5c, #d9ad26);">
		<div style="position: absolute; margin-top: -95px; left: 45px; width: 45px; height:35px; border: 1px solid none; background-color:#d9ad26; border-radius: 150px;" onclick="arrow()">
    <div style="  border:1px solid white; margin: 12px 12px 12px;"></div>
    <div style="  border:1px solid white; margin:-9px 12px 13px;"></div>
    <div style="  border:1px solid white; margin: -10px 12px 12;"></div>  
    <div id="drop" style="display: none; position :absolute; top: 20px; left:-30px;">
                <ul style="width: 100px; background-color:#d9ad26 ; border-radius: 20px;">
                  <a href="profile.php" style="text-decoration: none; "><img src="user.png" width="15px;" style="margin-left: -30px; margin-right: 10px; margin-top: 10px;"><b style="color: #007a5c;">Profile</b></a>
                  <li><a href="login.php" style="text-decoration: none; "><img src="logout.png" width="18px;" style="margin-left: -30px; margin-right: 10px; margin-top: 5px;"><b style="color: #007a5c; margin:-3px; ">Logout</b></a></li>
                 
                </ul>
              </div>
    </div>
	<img src="logo4.png" width="100px;" style="position: absolute; margin-top:-120px;border-radius: 50px; margin-left:630px;">
  <img src="tro1.png"  width="50px;" style="position:absolute; margin-top: -100px; right: 45px;" id="myBtn">
	<div style="margin: 135px 150px 10px 150px; border: 2px solid none; height: 450px; background-color: white; border-radius: 50px;">&nbsp;
		<div style="border:2px solid none; height:380px; margin: 10px; width:500px; ">
			<div class="slideshow-container">
   <div class="mySlides fade">
 
  <img src="gagan.png" style="width:60%; margin-left: 130px;">
  
</div>

<div class="mySlides fade">
  <img src="saffola.png" style="width:40%;margin-left: 140px;">
  
</div>

<div class="mySlides fade">
 
  <img src="rexona.png" style="width:55%;margin-left: 115px;">
  
</div>

<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<script type="text/javascript">
function myFunction(x) 
{
x.style.background = "yellow";
}
	</script>		
	<?php

// Create connection
$conn = mysqli_connect('localhost', 'root','','departmental');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT COUNT(*) as Count,SUM(price) as Total FROM pay";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	echo "<p style=\"word-spacing: 70px; padding: 10px; font-family:Courier New; padding-top:10px; padding-left:40px; font-weight: bold;\">Product Quatity Price </p>";
    	//echo "<p style=\" padding: 10px; font-family:Courier New; padding-top:2px; padding-left:20px;\">".$row["Count"]."</p>";
    	echo "<p style=\" padding: 10px; font-family:Courier New; padding-top:2px; padding-left:15px;font-weight: bold;\">"."Oil|Rice|Atta"."</p>";
      echo "<p style=\" padding: 10px; font-family:Courier New; margin-top:-53px; padding-left:210px;font-weight: bold;\">".$row["Count"]."</p>";
      echo "<p style=\" padding: 10px; font-family:Courier New; margin-top:-56px; padding-left:340px;font-weight: bold;\">".$row["Total"]."</p>"."<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

?>
<?php
$text=$text1='';
  if(isset($_POST['Pay']))
  {
	 if ((empty($_POST['text1'])) or (empty($_POST['text2'])) or  (empty($_POST['text3'])) or  (empty($_POST['text4']))) {
  
    $text = "Please Enter Card Number";
    
  } 
    
    else if ((!preg_match("/^[0-9]*$/",$_POST['text1'])) or (!preg_match("/^[0-9]*$/",$_POST['text2'])) or (!preg_match("/^[0-9]*$/",$_POST['text3'])) or (!preg_match("/^[0-9]*$/",$_POST['text4'])))
    {
      $text = "Please Enter Only Number";
      
    }
  else if ((empty($_POST['text5'])) or  (empty($_POST['text6'])) or  (empty($_POST['text7']))) {
  
    $text1= "Please Enter Card Number";
    
  } 
    
    else if ((!preg_match("/^[0-9]*$/",$_POST['text5'])) or (!preg_match("/^[0-9]*$/",$_POST['text6'])) or  (!preg_match("/^[0-9]*$/",$_POST['text7'])))
    {
      $text1= "Please Enter Only Number";
      
    }
    else 
    {
     echo "<script>
    alert('Thanks For Shopping');

     </script>";
    
    }
  }

?>
		</div>
		<div style="border:2px solid none; height:380px; margin-top: -395px; margin-left: 550px; width:400px; "><section style="word-spacing: 70px; padding: 10px; font-family:Courier New;font-weight: bold;"><p>Shiping <a href="#" style="text-decoration: underline; color:#d9ad26;">Payment</a> Success </p></section><p style="margin-top: -5px; margin-left: 10px; font-family:Courier New;  font-weight: bold;">Card Type</p>
           
			<nav style="margin-top: -2px;">
			<a href="checkout.php"><img src="master.png" width="60px" style="margin-left: 20px;" ></a>
			<a href="checkout.php"><img src="American-Express.png" width="90px" style="margin-left: 20px;" ></a>
			<a href="checkout.php"><img src="visa.png" width="60px"  style="margin-left: 20px;"></a>
			<a href="checkout.php"><img src="paypal.png" width="45px" style="margin-left: 20px; margin-top: -5px;"></a>
		</nav>
		<p style="margin-top: 20px; margin-left: 10px; font-family:Courier New; font-weight: bold; ">Card Number</p>
	


		<form action="checkout.php" method="POST">
		<input type="text" name="text1" placeholder="XXXX" maxlength="4"><p style="position: absolute; margin: 2px"><?php echo $text; ?></p>
		<input type="text" name="text2" placeholder="XXXX" maxlength="4"><p style="position: absolute; margin: 2px;"><?php echo $text; ?></p>
		<input type="text" name="text3" placeholder="XXXX" maxlength="4" ><p style="position: absolute; margin: 2px;"><?php echo $text; ?></p>
		<input type="text" name="text4" placeholder="XXXX" maxlength="4" ><p style="position: absolute; margin: 2px;"><?php echo $text; ?></p>
		<section style="word-spacing: 50px; padding: 10px; font-family:Courier New; font-weight: bold;"><p>StartDate ExpireDate CVV</p></section>
		<input type="text" name="text5" placeholder="MM/YY" maxlength="4" style="width:100px;"><p style="position: absolute; margin: 2px;"><?php echo $text1; ?></p>
		<input type="text" name="text6" placeholder="MM/YY" maxlength="4" style="width:100px; margin-left: 30px"><p style="position: absolute; margin: 2px;"><?php echo $text1; ?></p>
		<input type="text" name="text7" placeholder="XXX" maxlength="3" style=" margin-left: 27px"><p style="position: absolute; margin: 2px;"><?php echo $text1; ?></p>
		<input type="submit" name="Pay" value="Pay" id="myBtn1" style="width:140px;background-color:#d9ad26;color:white;height:35px;margin-top: 20px; margin-left: 10px; font-family:Courier New; font-weight: bold;box-shadow: 1px 1px #d9ad26;" >

	</form>
	
		</div>
	</div>
	<div id="myModal" class="modal">
  <div class="modal-content">
<?php
$connection=mysqli_connect('localhost','root','','departmental');
if(! $connection ) {
               die('Could not connect: ' . mysql_error());
            }
echo "<table style=\" text-align:center;  border:1px solid black; width:95%;\">";
echo "<tr style=\" font-size:20px;\"><th style=\"padding:20px 0px 0px 40px;\">Company Name</th><th style=\"padding:20px 0px 0px 10px;\">Product</th><th style=\"padding:20px 0px 0px 10px;\">Price</th></tr>";
$sql = "SELECT * FROM pay";
$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

echo "<tr><td>".$row["product"]."</td>";
echo "<td>".$row["umber"]."</td><td>".$row["Price"]."</td></tr>";

}
}
echo "</table>";
?>
<span class="close">&times;</span>
</div></div>
<script>
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<script>
  function arrow(){
    //  document.getElementById('logo').innerHTML= "&#x25B2";
      var v=document.getElementById("drop")
      if(v.style.display=="block"){
        v.style.display="none";
        document.getElementById('logo').innerHTML= "&#x25BC";
      }
      else{
        v.style.display="block";
        document.getElementById('logo').innerHTML= "&#x25B2";
      }
      }

     /* function hideContent(){
        document.getElementById('lst').style.display=none;
      }*/
  </script>
</body>
</html>