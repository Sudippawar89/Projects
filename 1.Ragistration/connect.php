<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
}

$con = new mysqli('localhost','root','','form');

if($con){
    $sql="insert into `data`(name,email,gender,mobile,password)values('$name','$email','$gender','$mobile','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo"Welcome to my page....."; 
        echo"$name";
    }
    else{
        die(mysqli_error($con));
    }
}else{
    die(mysqli_error($con)); 
}
?>