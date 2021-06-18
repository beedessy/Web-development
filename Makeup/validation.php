<?php
session_start();


$con = mysqli_connect('localhost','root');
if($con){
 echo"connection successful";
}else{
 echo"No connection";
}

mysqli_select_db($con,'userregistration');

$name =$_POST['user'];
$password =$_POST['password'];

$s ="select * from usertable where name='$name' && password='$password'";
$result=mysqli_query($con,$s);
$num =mysqli_num_rows($result);

if ($num == 1){
 $_SESSION['username']=$name;
 header('location:index.html');
 
}else{
 header('location:Sign in.php');
 
}
?>