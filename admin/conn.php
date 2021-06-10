<?php
   $sname= "localhost";
   $unmae= "root";
   $password = "";
   $db_name = "dental_clinic_db";
   
   $connection = mysqli_connect($sname, $unmae, $password, $db_name);
  
   if(mysqli_connect_error()){
       echo 'Please Check your Database Connection';
   }
?>