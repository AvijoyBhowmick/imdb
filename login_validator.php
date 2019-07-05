<?php

//connect to database
$connection=mysqli_connect("localhost","root","","imdb");

$email=$_POST['user_ka_email'];
$password=$_POST['user_ka_password'];

$query="SELECT * FROM `user` WHERE `email` LIKE '$email' AND `password` LIKE '$password'";

$result=mysqli_query($connection,$query);

$result=mysqli_fetch_assoc($result);

if(count($result)==5)
{
//echo "hi";
//header('Location:basics.php');
	header('Location:profile.php');
}
else
{
	//echo "hello";
header('Location:index.php');
}


?>