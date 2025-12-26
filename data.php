<?php
$server='localhost';
$user='root';
$pass='';
$database='studentform';
$conn=mysqli_connect($server,$user,$pass,$database);
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
else{
    echo"connection successful";
}
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$sql="INSERT INTO `user` (`name`, `email`, `message`) VALUES ('$name', '$email', '$message')";
if(mysqli_query($conn,$sql)){
    echo"New record inserted successfully";
}
else{
    echo"Error: ".$sql."<br>".mysqli_error($conn);
}
?>