<?php
   $host = 'localhost:3306';  
   $user = 'root';  
   $pass = '';  
   $db   = 'register';  // edit database name
   $conn = mysqli_connect($host, $user, $pass,$db);  
   if(! $conn )  
   {  
     die('Could not connect: ' . mysqli_error());  
   }  
   ?>
