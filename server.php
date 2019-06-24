<?php 
 $username=filter_input(INPUT_POST,'username');
 $email=filter_input(INPUT_POST,'email');
 $passwords=filter_input(INPUT_POST,'passwords');

 $conn=new mysqli("localhost","root","","server");

 if(mysqli_connect_error()){
     echo "not";
 }else{
     $db="INSERT INTO users(username,email,passwords) value
     ('$username','$email','$passwords')";
     mysqli_query($conn,$db);
 }
 
?>