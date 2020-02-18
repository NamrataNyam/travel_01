<html>
<head>
<style type="text/css">
body
{
  height: 100%;


 
  /* The image used */
  background-image: url("travel_wall.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}



</style>
<title>Bus</title></head>
<hr><marquee bgcolor="white">BOOK A BUS</marquee><hr>
<body background="travel_wall.jpg">
<table class="center" bgcolor="wheat" border="1" width="400" height="300">
<tr>
<td colspan="5" align="center" bgcolor="grey">BUS DETAILS</td>
</tr>
<tr>
<td>Bus Id</td><td>Source</td><td>Destination</td><td>Price</td>
</tr>
<tr>
<td>1010</td><td>Hubli</td><td>Bengaluru</td><td>800</td>
</tr>
<tr>
<td>1020</td><td>Dharwad</td><td>Hydearabad</td><td>1000</td>
</tr>
<tr>
<td>1030</td><td>Pune</td><td>Bengaluru</td><td>1400</td>
</tr>
<tr>
<td>1040</td><td>Hubli</td><td>Pune</td><td>900</td>
</tr>
<tr>
<td>1050</td><td>Hydearabad</td><td>Bengaluru</td><td>1200</td>
</tr>
<tr>
<table class="center" bgcolor="tan" border="1" width="400" height="300">
<tr>
<td colspan="5" align="centre" bgcolor="grey">BOOKING DETAILS</td>
</tr>
<form action="" method="post">
<tr>
<td>Bus Id:</td><td><input type="text" name="bus_id"></td>
</tr>
<tr>
<td>Source:</td><td><input type="text" name="bus_src"></td>
</tr>
<tr>
<td>Destination:<td><input type="text" name="bus_dest"></td>
</tr>
<tr>
<td>Price:<td><input type="text" name="price"></td>
</tr>
<tr>
<td>Booking date:<td><input type="text" name="bus_date"></td>
</tr>
<tr>
<td colspan="5" align="centre"><input type="submit" name="submit" value="Make reservation"></td>
</tr>
</form>
<form action="http://localhost/tutorial/transport.php" method="post">
<p>GO Back To Previous Page
<input type="submit" name="submit" value="BACK" />
</p>
</body>
</html>

<?php
 $conn=mysqli_connect("localhost","root","");
 mysqli_select_db($conn,"trip_management");
 $bus_id=null;
 $bus_src=null;
 $bus_dest=null;
 $price=null;
 $bus_date=null;
 
	 if(isset($_POST['bus_id']))
	 $bus_id=$_POST['bus_id'];
 
	 if(isset($_POST['bus_src']))
	 $bus_src=$_POST['bus_src'];
	
	if(isset($_POST['bus_dest']))
	 $bus_dest=$_POST['bus_dest'];

     if(isset($_POST['price']))
	 $price=$_POST['price'];
 
    if(isset($_POST['bus_date']))
	 $bus_date=$_POST['bus_date'];
 
	 $query="insert into bus(bus_id,bus_src,bus_dest,price,bus_date) values('$bus_id','$bus_src','$bus_dest','$price','$bus_date')";
	 if(mysqli_query($conn,$query))
	 {
		echo"<h3>bus confirmed</h3>";
	 }
 
 ?>
