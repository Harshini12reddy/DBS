<!DOCTYPE html>
<html>
    <head><meta charset="utf-8">
	  <link rel="stylesheet" type="text/css" href="products_style.css"></head>
    <body>
      
        <div id="container">
	        <ul>
		<li><a href="update.html"></a><h6>reschedule</h6></li>
        <li><a href="update.html"></a><h6>accept</h6></li>
        <li><a href="update.html"></a><h6>reject</h6> </li>
        <ul>
</div>

<?php
$host = "localhost";
$dbusername="root";
$dbpassword="";
$dbname="register";
$conn= new mysqli($host,$dbusername,$dbpassword,$dbname);
if(isset($_GET['show'])){              //clicking show button it will display table format data
$sel="SELECT * FROM `appointment_data`";

$result=mysqli_query($conn,$sel);

if(mysqli_num_rows($result)!=0)
{   echo"<html><body><table border='1'><tr><th>ID</th>
    <th>HNIusername</th>
    <th>Date Time</th>
    <th>Address</th></tr>";
    while($row=mysqli_fetch_assoc($result))

    {  
        echo"<tr><td>".$row["ID"]."</td>";
        echo"<td>".$row["HNIusername"]."</td>";
        echo"<td>".$row["date_time"]."</td>";
        echo"<td>".$row["address"]."</td>";
        echo"</tr>";
    }
    echo"</table></body></html>";
}
}

?>
</body>
</html>