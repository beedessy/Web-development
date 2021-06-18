<?php
session_start();
header('location:Sign in.php');

$con = mysqli_connect('localhost','root');
if($con){

 echo"connection successful";
 header('location:Sign in.php');
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
 echo "username Already Taken";
}else{
 $reg="insert into usertable(name,password)values('$name','$password')";
 mysqli_query($con,$reg);

 echo"Registration Successful";
  header('location:Sign in.php');
}
?>