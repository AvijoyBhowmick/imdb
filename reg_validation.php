<?php

//connect to database
$connection=mysqli_connect("localhost","root","","imdb");

$name=$_POST['user_ka_name'];                 //accepting the inputs
$email=$_POST['user_ka_email'];
$password=$_POST['user_ka_password'];
$phone=$_POST['user_ka_phone'];

$query1="SELECT * FROM `user` WHERE `email` LIKE '$email'";

$result=mysqli_query($connection,$query1);

$result=mysqli_fetch_assoc($result);




if(count($result)==5)
{
	
	//header(string:'Location:index.php?msg=3');
	header('Location:index.php?msg=3');
}	
else
{
	$query="INSERT INTO `user` (`user_id`, `name`, `email`, `password`, `phone`) VALUES (NULL, '$name', '$email', '$password', '$phone')";


	if(mysqli_query($connection,$query))
	{
		echo "Registered";
		header('Location:profile.php');
	}
	else
	{
		//echo "Some error occured";
		header('Location:index.php?msg=2');
	}

}




?>