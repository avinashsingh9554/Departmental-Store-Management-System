<?php
      include "includes/server.php";
      //include "includes/server.php";
   ?>
<!DOCTYPE html>
<html>
<head>
	<title>homepage</title>
	<link rel='stylesheet' href='cjFile/css/bootstrap.min.css'>
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab|Staatliches|Ubuntu&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="homepage.css">
	<script type="text/javascript" src="angular.min.js"></script>
	<script type="text/javascript" src="addtocart.php"></script>
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
  margin-top: -330px;
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

*{
	margin: 0px;
	padding: 0px;
}

body{
	
}

header{
	margin: 0;
	padding: 0;	
}

.main-head{
	width: 100%;
	height: 155px;
	margin: 0;
	padding: 0;	
	display: flex;
	background: linear-gradient(to right,  #007a5c, #d9ad26);
	box-shadow: 0 14px 28px rgba(0,0,0,0.25);
}

.head-content{
	margin: 0;
	padding: 0;
	width:65%;
	color: #fff;
	font-family: monospace, serif;
}


.head-content h2{
	text-shadow: 0px 2px 2px rgba(255, 255, 255, 0.4);
}

.head-content a{
	text-decoration: none;
	color: #fff;
}


.head-content h2::first-letter{
	font-size: 155px;
	margin: auto;
	color: #d9ad26;
	
}
.categories{
	z-index: 1;
	width: 35%;
	margin:0 auto;
}

.navigation{
	width:100%;
}

.middle{
	height: 85px;
	text-align: right;
	margin-right: 6px;

}

.middle a{
	background-color: #fff;
}

.btn1{
	display: inline-block;
	box-shadow: 0px 5px 15px -5px #00000070;
	overflow: hidden;
	padding: 5px;
}

.btn1 i{
	margin: 0 10px;
	font-size: 20px;
	transition: 0.2s linear;
}

.btn1:hover i{
	transform: scale(1.3);
}

.media p{
}

ul{
	list-style-type: none;
	z-index: 1;
	margin: auto;
}

ul li{
	width: 160px;
	float: right;
	margin: 6px;
	background-color: #fff;
	opacity: 0.9;
	border-radius: 5px;
	text-align: center;
}

ul li{
	font-size: 20px;
	text-decoration: none;
	color: black;
	padding: 8px;
	font-family: 'Ubuntu', sans-serif;
}

#drop{
	
	display: none;
	overflow: hidden;
}



#drop ul li{
	float: none;
	text-decoration: none;
	text-align: left;
	
}

ul li{
	border-bottom: 2px solid  #85c1e9 ;
}

ul li:hover{
	cursor: pointer;
}




/*ul li:hover #drop ul{
	display: block;
}*/

/*.navigation{
	display:flex;
  	flex-wrap: wrap;
  	align-content: end;
	font-size: 20px;
	
}
/*.navigation a{
	margin: 6px;
	text-decoration: none;
}
.categories .navigation a:hover{
	box-shadow: 0px 0px 2px black;
	text-decoration: underline;
}
.parent-op{
	position: relative;
}
.child-op a{
	color: black;
	padding: 5px 5px;
	float: right;
	text-decoration: none;
	display: block;
	margin: 0;
	text-align: bottom;
}*/

#logo{
	font-size: 16px;
}

.logo1 span{
	font-size: 48px;
}

.search-main{
	width: 100%;
	height: 70px;
	display: inline-block;
}

.search-main .head2{
	width: 30%;
	position: relative;
	top: 50%;
	transform: translateY(-50%);
}

.search-box{
	float: right;
	display: flex;
	background: #2f3640;
	border-radius: 40px;
	padding: 10px;
	margin: 10px;
}

.search-txt{
	display: none;
	outline: none;
	border: none;
	background: none;
	padding: 5px;
	color: white;
	font-size: 16px;
	width: 300px;
}

.search-btn{
	color: #e84118;
	width: 40px;
	height: 40px;
	display: flex;
	border-radius: 50%;
	transform: translate(30%,30%);
}

.search-box a.search-btn{
}

.search-box:hover .search-txt{
	display: block;
	width: 300px;

}

.lst{
	height: 185px;
	width: 300px;
	position: absolute;
	right: 3%;
	top: 58%;
	z-index: 1;
	overflow: auto;
	text-align: center;
	display: none;
}


.lst ul li{
	width: 100%;
	background: black;
	border: none;
	outline: none;
	color: #fff;
}
.main-container{
	max-width: 90%;
	width: 100%;
	margin: 0 auto;
}

.card{
	width: 250px;
	height: 320px;
	margin: 0 auto 50px;
  	background-color:  #fff;
  	/*border-radius: 5px;*/
  	/*box-shadow: 0px 8px 10px #f5cba7, -8px 0px 10px #fff, 6px 0px 10px #f5cba7, 0px -6px 10px #f5cba7;*/ 
	border: none;
	outline: none;
	display: inline-block;
	overflow: hidden;
  }

  .card:hover{
  	box-shadow: 0px 8px 10px #f5cba7, -8px 0px 10px #fff, 6px 0px 10px #f5cba7, 0px -6px 10px #f5cba7;
  }

.line, .line1{
	display: flex;
	flex-wrap: wrap;
	width: 100%;
	margin-top: 50px;
	/*border: 2px solid blue;*/
}

/*.main-container::before{
	content: "";
	display: block;
	position: absolute;
	top: 61%;
	transform: translateX(11%);
	border-bottom: 2px solid  #909497;
	width: 90%;
}*/

.image1{
	height: 240px;
	border: none;
	outline: none;
	background-repeat: no-repeat;
	background-size: cover;
}

 .image1 img{
	width: 100%;
	height: 100%;
	/*border-radius: 5px;*/
	border: none;
	outline: none;
	opacity: 0;
	transition: 0.5s all;
}

.image1:hover img{
	opacity: 1;
}

.title{
	height: 40px;
	font-family: 'Ubuntu', sans-serif;
}

h3.cat{
	color: #f1948a;
}

.banner {
	width: 100%; 
}

.banner img{
	width: 100%;
	height: 200px;
}

.slider { 
	overflow: hidden;
	margin-top: 10px;
}

.slider figure img{ 
	
	height: 300px;
	float: left;
}

.slider figure{
	position: relative; 
	width: 200%;
	text-align: right;
	animation: 5s slidy infinite; 
}



@keyframes slidy {
0% {left: 0%; }
20% {left: 0%; }
40% {left: -100%; }
50% {left: -100%; }
70% {left: -100%; }
75% {left: -100%; }
95% {left: 0%; }
100% {left: 0%; }
}

.title{
	text-align: center;
	line-height: 50px;
}

.butt1{
	font-size: 14px;
	font-family: ;
	color: black;
	border: none;
	outline: none;
  	border-radius: 5px;
	height: 30px;
	width: 80%;
	background-color: white;
	margin-bottom: 4px;
}

.butt1:hover{
	background-color: black;
	color: white;
}

footer{
	background-color:  #1c2833;
}

.div18{
	padding: 5px 40px 10px 40px;
	height: auto;
	width: auto;
	margin: auto;
	display: flex;
	flex-wrap: nowrap;
	font-size: 14px;
	font-family: 'Staatliches', cursive;
	font-family: 'Ubuntu', sans-serif;
	font-family: 'Roboto Slab', serif;
	font-family: 'Roboto', sans-serif;
    line-height: 30px;

}

.div19{
	text-align: center;
	height: auto;
	width: 15%;
	color: white;
	margin-top: 40px;
}

.div20, .div21{
	padding-right: 60px;
	height: auto;
	width: 27.5%;
	text-align: center;
	color: white;	
	margin-top: 40px;
}

.div20{
	border-right: 1px solid  #717d7e ;

}

.div21{

}

.div19 h3, .div20 h3, .div21 h3{
	color:  #7f8c8d ;
}

.copy-right{
	line-height: 50px;
}
	</style>
</head>
<body>

				
	<header>
		<div class="main-head">
			<div class="head-content">
				<h2><a href="homepage.html"><b>Billion <i style="font-size: 50px; color: #d9ad26;">B</i>azaar</b></a></h2>
			</div>
			<div class="categories">
				<div class="middle">
					<a class="btn1" href="https://www.facebook.com/profile.php?id=100038016395032"><i class="fab fa-facebook-f"></i></a>
					<a class="btn1" href="#"><i class="fab fa-twitter"></i></a>
					<a class="btn1" href="#"><i class="fab fa-google"></i></a>
					<a class="btn1" href="#"><i class="fab fa-instagram"></i></a>
				</div>
				<div class="navigation">
					<ul>
						<li><?php  if (isset($_SESSION['username'])) : ?>
			<p >Welcome <strong><?php echo $_SESSION['username']; ?></strong></p><?php endif ?></li>
						<li><a href="#" id="myBtn" style="color: black; text-decoration: none;">Cart<span class="logo1">&#128722</span></a></li>				
						<li onclick="arrow()">Categories<span id="logo">&#x25BC</span>
							<div id="drop">
								<ul>
									<li><a href="#Atta">Atta&Flour</a></li>
									<li><a href="#rice">Rice</a></li>
									<li><a href="#oil">Oil</a></li>
								</ul>
							</div>
						</li>
						
						<!--</div>-->


<div id="myModal" class="modal">
  <div class="modal-content">
<?php
$connection=mysqli_connect('localhost','root','','departmental');
if(! $connection ) {
               die('Could not connect: ' . mysql_error());
            }
echo "<table style=\" text-align:center;  border:1px solid black; width:95%;\">";
echo "<tr style=\" font-size:20px;\"><th style=\"padding:20px 0px 0px 40px;\">Company Name</th><th style=\"padding:20px 0px 0px 10px;\">Product</th><th style=\"padding:20px 0px 0px 10px;\">Price</th><th style=\"padding:20px 0px 0px 10px;\">Remove From Cart</th></tr>";
$sql = "SELECT * FROM pay";
$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

echo "<tr><td>".$row["product"]."</td>";
echo "<td>".$row["umber"]."</td><td>".$row["Price"]."</td><td><a href='cart-remove.php?id={$row['id']}' style=\"text-decoration:none; color:green;\">Remove</a></td></tr>";

}
}
$sql = "SELECT COUNT(*) as Count ,SUM(Price) as Total FROM pay ";
$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

echo "<tr><td style=\"padding-top:20px;\">Count|Total:::</td><td style=\"padding-top:20px;\">".$row["Count"]."</td><td style=\"padding-top:20px;\">".$row["Total"]."</td><td><a href='checkout.php' style=\"text-decoration:none; color:green;\">Confirm|Pay</a></td></tr>";
//echo "<td>".$row["umber"]."</td><td>".$row["Price"]."</td></tr>";

}

}

echo "</table>";
?>	
    <span class="close">&times;</span>
  </div>

</div>

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

						
					</ul>
				</div>
				
			</div>

		</div>
		
	</header>
	
	<div class="slider">
		<figure>
			<img src="s1.jpg" width="50%" >
		
            <img src="face1.jpg" width="50%" >
		</figure>
	</div>
	
	<div class="search-main" ng-app="App" ng-controller="mycr">

		<div class="search-box">
			<input class="search-txt" id="search-txt" ng-model="fil" type="text" name="search" placeholder="Type to search">
				<a class="search-btn text-danger">
					<i class="fas fa-search"></i>
				</a>
		</div>
		<div class="lst" id="lst" onblur="hideContent()">
				<ul ng-repeat="x in product|filter:fil">
					<li class="border" onclick="window.location.replace('checkout.html')">{{ x }}</li>
				</ul>
			</div>

		<div class="head2">
			<div class="container-fluid"><b><h3 class="cat" id="Atta">Atta & Flour</h3></b></div>
		</div>
	</div>
	<?php
	$s=0;
	 if(array_key_exists('button1', $_POST)) { 
            button1(); 
        } 
        else if(array_key_exists('button2', $_POST)) { 
            button2(); 
        } 
        else if(array_key_exists('button3', $_POST)) { 
            button2(); 
        } 
        else if(array_key_exists('button4', $_POST)) { 
            button2(); 
        } 
        function button1() { 
            $con=mysqli_connect('localhost','root','','departmental');
             if(! $con ) {
               die('Could not connect: ' . mysql_error());
            }
            else
            {

           $sql="INSERT INTO pay(product,umber,Price) VALUES ('Aashirvaad','Chakki Atta',185)";
           if (mysqli_query($con, $sql)) {
                     $s='';   
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
 
        }
}

 function button2() { 
            $con=mysqli_connect('localhost','root','','departmental');
             if(! $con ) {
               die('Could not connect: ' . mysql_error());
            }
            else
            {

           $sql="INSERT INTO pay(product,umber,Price) VALUES ('bb Royal','Wheat Flour',80)";
           if (mysqli_query($con, $sql)) {
                    $s='';     
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
 
        }
}

function button3() { 
            $con=mysqli_connect('localhost','root','','departmental');
             if(! $con ) {
               die('Could not connect: ' . mysql_error());
            }
            else
            {

           $sql="INSERT INTO pay(product,umber,Price) VALUES ('bb Royal','Sooji Ordinary',45)";
           if (mysqli_query($con, $sql)) {
                    $s='';      
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
 
        }
}

function button4() { 
            $con=mysqli_connect('localhost','root','','departmental');
             if(! $con ) {
               die('Could not connect: ' . mysql_error());
            }
            else
            {

           $sql="INSERT INTO pay(product,umber,Price) VALUES ('Fortune','Besan',60)";
           if (mysqli_query($con, $sql)) {
                    $s='';      
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
 
        }
}
      
    ?> 
	<div class="main-container">
		<div class="line1">
			<div class="card">
				<div class="image1" style="background-image: url(ashirwad.jpg);">
					<img src="ashirwad1.jpg">
				</div>
				<div class="title">
					<h4 style="text-align: center; margin-top: 0px;">Aashirvaad Shudh Chakki Atta </h4>
				</div>
				<form method="POST">
				<center><input type="submit" name="button1" value="Add to cart" class="btn primary-btn butt1"></center>
			</div>
			<div class="card">
				<div class="image1" style="background-image: url(royal1.jpg);">
					<img src="royal2.jpg">
				</div>
				<div class="title">
					<h4 style="text-align: center; margin-top: 0px;">bb Royal Wheat Flour</h4>
				</div>
				<center><input type="submit" name="button2" value="Add to cart" class="btn primary-btn butt1" ></center>
			</div>
				
			<div class="card">
				<div class="image1" style="background-image: url(sooji.jpg);">
					<img src="sooji1.jpg">
				</div>
				<div class="title">
					<h4 style="text-align: center; margin-top: 0px;">bb Royal Sooji Ordinary</h4>
				</div>
				<center><input type="submit" name="button3" value="Add to cart" class="btn primary-btn butt1" ></center>
			</div>
			<div class="card">
				<div class="image1" style="background-image: url(maida.jpg);">
					<img src="maida2.jpg">
				</div>
				<div class="title">
					<h4 style="text-align: center; margin-top: 0px;">Fortune Besan - Channa</h4>
				</div>
			<center><input type="submit" name="button4" value="Add to cart" class="btn primary-btn butt1" ></center>
			</div>
			<!--<div class="card">
				<div class="image1">
					<img src="images/camera1.jpg">
				</div>
				<div class="title">
					<h3><b>Canon best camera</b></h3>
				</div>
				<center><button class="btn primary-btn butt1">Add to cart</button></center>
			</div>-->
		</div>
	</div>
	<?php
	
	 if(array_key_exists('button5', $_POST)) { 
            button5(); 
        } 
        else if(array_key_exists('button6', $_POST)) { 
            button6(); 
        } 
        else if(array_key_exists('button7', $_POST)) { 
            button7(); 
        } 
        else if(array_key_exists('button8', $_POST)) { 
            button8(); 
        } 
        function button5() { 
            $con=mysqli_connect('localhost','root','','departmental');
             if(! $con ) {
               die('Could not connect: ' . mysql_error());
            }
            else
            {

           $sql="INSERT INTO pay(product,umber,Price) VALUES ('India Gate','Basmati Rice',91)";
           if (mysqli_query($con, $sql)) {
                     $s='';   
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
 
        }
}

 function button6() { 
            $con=mysqli_connect('localhost','root','','departmental');
             if(! $con ) {
               die('Could not connect: ' . mysql_error());
            }
            else
            {

           $sql="INSERT INTO pay(product,umber,Price) VALUES ('bb Royal','Sabudana - White',59)";
           if (mysqli_query($con, $sql)) {
                    $s='';     
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
 
        }
}

function button7() { 
            $con=mysqli_connect('localhost','root','','departmental');
             if(! $con ) {
               die('Could not connect: ' . mysql_error());
            }
            else
            {

           $sql="INSERT INTO pay(product,umber,Price) VALUES ('Daawat','Basmati Rice',358)";
           if (mysqli_query($con, $sql)) {
                    $s='';      
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
 
        }
}

function button8() { 
            $con=mysqli_connect('localhost','root','','departmental');
             if(! $con ) {
               die('Could not connect: ' . mysql_error());
            }
            else
            {

           $sql="INSERT INTO pay(product,umber,Price) VALUES ('India Gate','Basmati Rice',260)";
           if (mysqli_query($con, $sql)) {
                    $s='';      
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
 
        }
}
    
    ?> 
		<div class="banner">
			<img src="Rice.jpg">
		</div>
	<div class="head2">
		<div class="container-fluid"><b><h3 class="cat" id="rice">Rice</h3></b></div>
	</div>
	<div class="main-container">
		<div class="line">
			<div class="card">
				<div class="image1" style="background-image: url(india.jpg);">
					<img src="india1.jpg">
				</div>
				<div class="title">
					<h3 style="text-align: center; margin-top: 0px;"><b>Basmati Rice</b></h3>
				</div>
				<center><input type="submit" name="button5" value="Add to cart" class="btn primary-btn butt1"></center>
			</div>
			<div class="card">
				<div class="image1" style="background-image: url(india2.jpg);">
					<img src="india3.jpg">
				</div>
				<div class="title">
					<h3 style="text-align: center; margin-top: 0px;"><b>bb Royal Sabudana - White</b></h3>
				</div>
				<center><input type="submit" name="button6" value="Add to cart" class="btn primary-btn butt1"></center>
			</div>
				
			<div class="card">
				<div class="image1" style="background-image: url(india4.jpg);">
					<img src="india5.jpg">
				</div>
				<div class="title">
					<h3 style="text-align: center; margin-top: 0px;"><b>Daawat Basmati Rice</b></h3>
				</div>
				<center><input type="submit" name="button7" value="Add to cart" class="btn primary-btn butt1"></center>
			
			</div>
			<div class="card">
				<div class="image1" style="background-image: url(india6.jpg);">
					<img src="india7.jpg">
				</div>
				<div class="title">
					<h3 style="text-align: center; margin-top: 0px;"><b>India Gate Basmati Rice</b></h3>
				</div>
				<center><input type="submit" name="button8" value="Add to cart" class="btn primary-btn butt1"></center>
			</div>
			<!--<div class="card">
				<div class="image1">
					<img src="images/camera1.jpg">
				</div>
				<div class="title">
					<h3><b>Canon best camera</b></h3>
				</div>
				<center><button class="btn primary-btn butt1">Add to cart</button></center>
			</div>-->
		</div>
	</div>
		<!--<div class="slider">
			<figure>
				<img src="b3.jpg">
				<img src="b2.jpg">
			</figure>
		</div>-->


		<!--<div class="line">
			<div class="card">
				<div class="image1">
					<img src="images/camera1.jpg">
				</div>
				<div class="title">
					<h3><b>Canon best camera</b></h3>
				</div>
				<center><button class="btn primary-btn butt1">Add to cart</button></center>
			</div>
			<div class="card">
				<div class="image1">
					<img src="images/camera1.jpg">
				</div>
				<div class="title">
					<h3><b>Canon best camera</b></h3>
				</div>
				<center><button class="btn primary-btn butt1">Add to cart</button></center>
			</div>
				
			<div class="card">
				<div class="image1">
					<img src="images/camera1.jpg">
				</div>
				<div class="title">
					<h3><b>Canon best camera</b></h3>
				</div>
				<center><button class="btn primary-btn butt1">Add to cart</button></center>
			</div>
			<div class="card">
				<div class="image1">
					<img src="images/camera1.jpg">
				</div>
				<div class="title">
					<h3><b>Canon best camera</b></h3>
				</div>
				<center><button class="btn primary-btn butt1">Add to cart</button></center>
			</div>
			<div class="card">
				<div class="image1">
					<img src="images/camera1.jpg">
				</div>
				<div class="title">
					<h3><b>Canon best camera</b></h3>
				</div>
				<center><button class="btn primary-btn butt1">Add to cart</button></center>
			</div>
		</div>
	</div>-->
	<?php
	
	 if(array_key_exists('button9', $_POST)) { 
            button9(); 
        } 
        else if(array_key_exists('button10', $_POST)) { 
            button10(); 
        } 
        else if(array_key_exists('button11', $_POST)) { 
            button11(); 
        } 
        else if(array_key_exists('button12', $_POST)) { 
            button12(); 
        } 
        function button9() { 
            $con=mysqli_connect('localhost','root','','departmental');
             if(! $con ) {
               die('Could not connect: ' . mysql_error());
            }
            else
            {

           $sql="INSERT INTO pay(product,umber,Price) VALUES ('Fortune ','Kachi Ghani Mustard ',120)";
           if (mysqli_query($con, $sql)) {
                     $s='';   
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
 
        }
}

 function button10() { 
            $con=mysqli_connect('localhost','root','','departmental');
             if(! $con ) {
               die('Could not connect: ' . mysql_error());
            }
            else
            {

           $sql="INSERT INTO pay(product,umber,Price) VALUES ('Fortune ','Soya Bean Oil',108)";
           if (mysqli_query($con, $sql)) {
                    $s='';     
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
 
        }
}

function button11() { 
            $con=mysqli_connect('localhost','root','','departmental');
             if(! $con ) {
               die('Could not connect: ' . mysql_error());
            }
            else
            {

           $sql="INSERT INTO pay(product,umber,Price) VALUES ('Fortune','Oil',560)";
           if (mysqli_query($con, $sql)) {
                    $s='';      
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
 
        }
}

function button12() { 
            $con=mysqli_connect('localhost','root','','departmental');
             if(! $con ) {
               die('Could not connect: ' . mysql_error());
            }
            else
            {

           $sql="INSERT INTO pay(product,umber,Price) VALUES ('Saffola Gold','Oil',160)";
           if (mysqli_query($con, $sql)) {
                    $s='';      
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
 
        }
}
    
    ?> 
	<div class="head2">
		<div class="container-fluid"><b><h3 class="cat" id="oil">Oil</h3></b></div>
	</div>
	
	<div class="main-container">
		<div class="line">
			<div class="card">
				<div class="image1" style="background-image: url(oil.jpg);">
					<img src="oil2.jpg">
				</div>
				<div class="title">
					<h3 style="text-align: center; margin-top: 0px;"><b>Fortune Kachi Ghani Mustard </b></h3>
				</div>
				<center><input type="submit" name="button9" value="Add to cart" class="btn primary-btn butt1"></center></div>
			<div class="card">
				<div class="image1" style="background-image: url(oil3.jpg);">
					<img src="oil4.jpg">
				</div>
				<div class="title">
					<h3  style="text-align: center; margin-top: 0px;"><b>Fortune Soya Bean Oil</b></h3>
				</div>
				<center><input type="submit" name="button10" value="Add to cart" class="btn primary-btn butt1"></center></div>
				
			<div class="card">
				<div class="image1" style="background-image: url(oil5.jpg);">
					<img src="oil6.jpg">
				</div>
				<div class="title">
					<h3 style="text-align: center; margin-top: 0px;"><b>Fortune Kachi Ghani Mustard</b></h3>
				</div>
				<center><input type="submit" name="button11" value="Add to cart" class="btn primary-btn butt1"></center></div>
			<div class="card">
				<div class="image1" style="background-image: url(oil7.jpg);">
					<img src="oil8.jpg">
				</div>
				<div class="title">
					<h3 style="text-align: center; margin-top: 0px;"><b>Saffola Gold - Pro Healthy</b></h3>
				</div>
				<center><input type="submit" name="button12" value="Add to cart" class="btn primary-btn butt1"></center></div></form>
			<!--<div class="card">
				<div class="image1">
					<img src="images/camera1.jpg">
				</div>
				<div class="title">
					<h3><b>Canon best camera</b></h3>
				</div>
				<center><button class="btn primary-btn butt1">Add to cart</button></center>
			</div>-->
		</div>
	</div>

	<footer>
		<div class="div18">
		    <div class="div19">
		        <h3>ABOUT</h3>
		        <p>Contact Us<br>
		        About Us<br>
		        B Bazaar Stories<br>
		        Press</p>
		    </div>
		    <div class="div19">
		        <h3>HELP</h3>
		        <p>Payments<br>
		        Shipping<br>
		        Returns<br>
		        FAQ<br>
		        Report Issue</p>
		    </div>

		    <div class="div19">
		        <h3>Return Policy</h3>
		        <p>Terms Of Use<br>
		        Security<br>
		        Privacy<br>
		        Sitemap<br>
		        EPR Compliance</p>
		    </div>

			<div class="div20">
		        <h3>Mail Us:</h3>

				<p>B Bazaar Pvt Ltd<br>

				LPU Block 51<br>

				Law Gate<br>

				K Appartments<br>

				Jalandhar 114441<br>

				Punnjab India</p>
		    </div>

		    <div class="div21">
			    <h3>Reg Address:</h3>

				<p>B Bazzar Pvt Ltd<br>

				Luxemberg<br>

				Clove Tech Village<br>

				Outer Ring Road<br>

				Bengaluru 560103<br>

				Karnataka India<br>

				Telephone: 8434090048</p>

		    </div>

		</div>
		<div class="copy-right text-white border-top">
			<center><span>Internet Based Ads</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-muted">&copy; 2018-2019, Billion Bazaar, Inc. or its affiliates</span></center>
		</div>
	</footer>
	<script src="jquery-3.4.1.js"></script>
	<script>
		$(document).ready(function(){
			//alert("hello");
			$("button").click(function(){
				$(this).attr("disabled","true");
				$(this).css({"background-color":"#2b2c2d", "color": "white", "opacity":0.4});
			});
			$("#search-txt").focus(function(){
				$("#lst").show();
			})
			$("#lst").hover(function(){
				$("#search-txt").show();
				$(".search-btn").show();
			})
			$("#lst").on({
				mouseleave: function(){
					$(this).hide();
					$(".search-txt").hide();
				}
			})
			$(".search-btn").on({
				mouseenter: function(){
					$(".search-txt").show();
					$("#lst").show();
				}
			})
		})
	</script>

	<script>
		function arrow(){
			document.getElementById('logo').innerHTML= "&#x25B2";
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

	<script>
		var App = angular.module("App",[]);
		App.controller("mycr",['$scope',function(s){
			s.fil;
			s.product = ["Canon E345","Sony M377","PanaSonic E1","Nikon 2AR","Puma T-shirt",
			"Iphone 6","Iphone 7","Iphone X","Galaxy S7", "Standard Dinning Set", "Wide Matresses Bed"];
		}]);
	</script>
	
				

</body>
</html>

