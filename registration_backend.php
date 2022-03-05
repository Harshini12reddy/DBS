<?php
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $Gender = $_POST['Gender'];
  $phone = $_POST['phone'];
  if(!empty($firstname) ||!empty($lastname) ||!empty($username) || !empty($email) ||!empty($password) || !empty($Gender) || !empty($email) || !empty($phone))
  {
    $host = "localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="register";

    $conn= new mysqli($host,$dbusername,$dbpassword,$dbname);
    if(mysqli_connect_error())
    {
      die('Connection Failed  :'.mysqli_connect_error());
    }
    else{
      $SELECT = "SELECT email from register Where email= ? Limit 1";
      $INSERT = "INSERT Into register (firstname,lastname,username,email,password,Gender,phone) values(?, ?, ?, ?, ?, ?, ?)";
      $stmt = $conn ->prepare($SELECT);
      $stmt -> bind_param("s",$email);
      $stmt -> execute();
      $stmt -> bind_result($email);
      $stmt ->store_result();
      $rnum = $stmt ->num_rows;
      if($rnum==0)
      {
        $stmt ->close();
        $stmt = $conn ->prepare($INSERT);
        $stmt -> bind_param("ssssssi",$firstname,$lastname,$username,$email,$password,$Gender,$phone);
        $stmt -> execute();
        $relogin= "<script>  alert('registration succesfully completed....'); window.location ='login.html';</script>";
        echo $relogin;

      }
      else{
        $relogin= "<script>  alert('someone already register using this email'); window.location ='signin.html';</script>";
        echo $relogin;
      }
      $stmt ->close();
      $conn ->close();
    }
  }
  else {
    echo "All fields are required";
    die();
  }
 ?>
