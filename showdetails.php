<?php
require"connection.php";
?>
<?php
if(isset($_POST['show'])){              //clicking show button it will display table format data
$sel="SELECT * FROM `details`";

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