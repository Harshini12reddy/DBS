<?php
require"connection.php";
?>
<?php
if(isset($_POST['submit']))
{
  

  $fname=$_POST[""];
  

$sql="INSERT INTO appointment_data (HNIusername,date_time,address)

VALUES

('$fname','$ ','$ ')";



$result=mysqli_query($conn,$sql);
if($result)
{
  //echo "new record";
  header("location:sucess.html");        //this feature can be used to redirect to any url 
}
else{
  echo "error";
}
}


mysqli_close($conn);  
?>
