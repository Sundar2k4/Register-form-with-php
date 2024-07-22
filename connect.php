<?php
   $Firstname = $_POST['Firstname'];
   $Lastname = $_POST['Lastname'];
   $Gender = $_POST['Gender'];
   $Email = $_POST['Email'];
   $Password = $_POST['Password'];
   $Phone = $_POST['Phone'];
   $conn = new mysqli('localhost','root','','test');
   if($conn -> connect_error)
   {
    die('connection Failed : ' .$conn->connect_error);
   }
   else
   {
     $stmt = $conn -> prepare("insert into registration(Firstname, Lastname, Gender, Email, Password, Phone)
     values(?,?,?,?,?,?)");
     $stmt -> bind_param("sssssi",$Firstname,$Lastname,$Gender,$Email,$Password,$Phone);
     $stmt ->execute();
     echo 'REGISTERED';
     $stmt->close();
     $conn->close();
   }
?>
