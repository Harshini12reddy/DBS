<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, HNIusername, date_time, address FROM appointment_data";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {

        echo "<br> id: ". $row["id"]. " - Name: ". $row["HNIusername"]. "------date_time----- " . $row["date_time"] ."---- address----".$row["address"] ."<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>