<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>House Of Cars Showroom Website</title>
    <style>
    body{
    	font-family:"Comic Sans MS" , sans-serif;
	background-color: white;
    	margin:0px;

    }
    header{

font-family: "Comic Sans MS" , sans-serif;
text-align: center;
background-image: url("https://drive.google.com/uc?export=view&id=1oQKRT-4my66uEFAkZkVJlsHLmML90uaZ");
        	color: white;
        	padding:65px;
        	font-size: 23px;

        }
        footer{

font-family: "Comic Sans MS" , sans-serif;
text-align: center;
background-image: url("https://drive.google.com/uc?export=view&id=1EX5lbvUu4YrKmP1BMtIc0gfCMxsE_bzv");
        	color:white;
			margin-top:10%;
        	padding:30px;
        	font-size: 20px;


        }
 nav{
background-color: lightgrey;
overflow: hidden;

}
  nav ul{
  	list-style: none;
  	padding: 0px;
  	margin: 0px;

  }
  nav ul li{
  	float: left;

  }
  nav ul li a{
  	text-decoration: none;
  	color:black;
  	padding: 10px 25px;
  	display: inline-block;
  	font-size: 18px;

  }
  nav ul li a:hover{
  	background-color: yellow;
  }
  nav ul li a.active{
  	background-color: grey;
  }

  aside{
  	background-color: lightyellow;
  	float: left;
  	width: 200px;
  	text-align: center;
  	height:200px;
  	overflow-y: scroll;
}

aside ul{
	list-style-type: none;
	padding: 0px;
	margin: 0px;

}
aside ul li a{
	text-decoration: none;
	color:black;
	padding:10px 20px;
	display: block;

}
aside ul li a:hover{
	background-color:yellow;
	color:black;
}
section{
	margin-left: 200px;
	border-left: 2px solid grey;
	padding: 10px;

}
details{
background-color: lightgrey;
margin: 5px;
padding: 10px;
border-radius: 50px;


}
.title{
	background-image: url("https://drive.google.com/uc?export=view&id=1gTPxe82wXyg1QuIFEAlZAS7KhnlVFH85");
  width: 100%;
  padding: 12px 20px;
  margin-top: 40px;
  text-align:center;
  text-transform: Uppercase;
  font-weight: 800;
  font-size: 30px;
}

.form_design{

    margin-top: 50px;
	margin-bottom: 50px;
	margin-left: 25%;
	width: 50%;
}
input[type=text], input[type=password]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border-radius: 15px;
}

input[type=button], input[type=submit], input[type=reset] {
  background-color: grey;
  border: none;
  border-radius: 10px;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  margin-left: 40%;
}



    </style>


</head>
<body>
<!-- main header -->
<header>
	<h1>House Of Cars Showroom</h1>
	<p style="color:white;">"A site which can make your dream car real"</p>
</header>
<!-- main nav -->
<nav>
	<ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="G5servicerequest.php">Service Request</a></li>
	<li><a href="G2_mechaniclogin.php">Mechanics</a></li>
	<li><a href="G2_userlogin.php">View Cars</a></li>
	<li><a href="G2_adminlogin.php">Admin Panel</a></li>



</ul>
</nav>





<section id = "section1">
		<div class="title">Insert new car</div>
		
		<form action="G3_insert_car.php" class="form_design" method="post">
		    ID: <input type="text" name="id"> <br/>
			Manufacturer: <input type="text" name="man"> <br/>
			Product: <input type="text" name="pro"> <br/>
			Model: <input type="text" name="mod"> <br/>
			Colors: <input type="text" name="clo"> <br/>
			Price: <input type="text" name="pri"> <br/>
			Features: <input type="text" name="fe"> <br/>
			Year of creation: <input type="date" name="ye"> <br/>
			
			<br/>
			<input type="submit" value="Insert">
		</form>
</section>

<section id = "section2">
		<div class="title">Update car</div>
		
		<form action="G3_update_car.php" class="form_design" method="post">
		    ID: <input type="text" name="id"> <br/>
			
			
			     <option>Select field</option>
				  <select name="wc">
				  <option value="ID">ID</option>
                <option value="Manufacturer">Manufacturer</option>
                <option value="Product">Product</option>
                <option value="Model">Model</option>
				<option value="Colors">Colors</option>
				<option value="Price">Price</option>
				<option value="Features">Features</option>
				<option value="Year_of_Creation">Year_of_Creation</option>
                 </select>
              
			 <br/>

			
			New value: <input type="text" name="nv"> <br/>
			<br/>
			<input type="submit" value="Udpate">
		</form>
</section>


<section id = "section3">
		<div class="title">delete car</div>
		
		<form action="G3_delete_car.php" class="form_design" method="post">
		    
			     <option>Select field</option>
				  <select name="fn">
				  <option value="ID">ID</option>
                <option value="Manufacturer">Manufacturer</option>
                <option value="Product">Product</option>
                <option value="Model">Model</option>
				<option value="Colors">Colors</option>
				<option value="Price">Price</option>
				<option value="Features">Features</option>
				<option value="Year_of_Creation">Year_of_Creation</option>
                 </select>
              
			 <br/>

			
			value: <input type="text" name="v"> <br/>
			
			<br/>
			<input type="submit" value="delete">
		</form>
</section>









<section id = "section4">
		<div class="title">Search car</div>
		
		<form action="" class="form_design" method="post">
		   
                 <option>Select field</option>
				  <select name="fn">
				  <option value="ID">ID</option>
                <option value="Manufacturer">Manufacturer</option>
                <option value="Product">Product</option>
                <option value="Model">Model</option>
				<option value="Colors">Colors</option>
				<option value="Price">Price</option>
				<option value="Features">Features</option>
				<option value="Year_of_Creation">Year_of_Creation</option>
                 </select>
              
			 <br/>


			value: <input type="text" name="v"> <br/>
			
			<br/>
			<input type="submit" name="search" value="Search">
		</form>
</section>


</table>
<br>

 <div style="margin-left:5%; margin-right:5%; margin-top:50px; margin-bottom:50px;text-align:center;background: #ffcccc">
<br>
   <table width="100%">

            <tr>

                <th >ID</th>
				<th>Manufacturer</th>
                <th >Price</th>
				<th> Model</th>
				<th>Colors</th>
				<th>Features</th>
				<th>Year_of_Creation</th>


            </tr>


<?php

require_once('DBconnect.php');


if(isset($_POST['search'])){
	
	$a = $_POST['fn'];	
	$c = $_POST['v'];
	
	
	$sql = "SELECT * FROM `cars` WHERE $a='$c';";
	
	$result = $conn-> query($sql);
			if($result-> num_rows > 0){
				while($row = $result-> fetch_assoc()){
				echo "<tr><td>".$row["ID"]."</td><td>".$row["Manufacturer"]."</td><td>".$row["Price"]."</td><td>".$row["Model"]."</td><td>".$row["Colors"]."</td><td>".$row["Features"]."</td><td>".$row["Year_of_Creation"]."</td><td>";

				}
				echo "</table>";
			}
else{
	echo "value is wrong, plz try again";
}
	
}


?>
	
</table>















<!-- main footer -->
<footer>
<h2 style="color:blue;">Copyright &copy;2023 , House Of Cars Showroom</h2>
<p style="color:red;">All rights are reserved.</p>
<small style="color:blue;">Developed & maintained by Golam Sifat</small>
</footer>



</body>
</html>
