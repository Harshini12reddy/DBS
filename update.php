<?php
require"connection.php";
?>
<?php
if(isset($_POST['submit']))
{
  

  $fname=$_POST[""];
  

$sql = "UPDATE appointment_data SET date_time=' ' WHERE HNIusername=''";



$result=mysqli_query($conn,$sql);
if($result)
{
  //echo "new record";
  header("location:ressucess.html");        //this feature can be used to redirect to any url 
}
else{
  echo "error";
}
}


mysqli_close($conn);  
?>

