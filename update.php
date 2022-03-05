<?php
require"connection.php";
?>
<?php
if(isset($_POST['submit']))
{
  

  $HNIusername=$_POST["HNIusername"];
  $date_time=$_POST["date_time"];
  $address=$_POST["address"];
  

$sql = "UPDATE appointment_data SET date_time='$date_time ' WHERE HNIusername='HNIuser'";



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

