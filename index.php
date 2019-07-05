<?php
if(!empty($_GET)){
$error=1;
//echo $error;
}else{
$error=0;
}
?>

<html>
<head>
<title>IMDB</title>
<link rel="stylesheet" type="text/css" href="style.css">

<!--Bootstrap CDNs-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</head>

<script type="text/javascript">
	$(document).ready(function () 
	{
		var error='<?php echo $error ?>';
		if(error==1)
		{
			var errorCode='<?php echo $_GET['msg'] ?>';
			if(errorCode==1)
			{
				$('#errorMsg').html('<p style="color: red">Incorrect email/password</p>');
			}
			else if(errorCode==2)
			{
				$('#regError').html('<p style="color: red">Some error occured. Try again</p>');
				$('#myModal').modal('show');
			}
			else
			{
				$('#regError').html('<p style="color: red">This email id already exists.</p>');
				$('#myModal').modal('show');
			}

		}
	})
</script>

<body class=" bg-nav2 ">

<nav class="navbar navbar-dark"  style="background-color: #000000">
    <a class="navbar-brand" href="#">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/69/IMDB_Logo_2016.svg" alt="" style="width: 140px">
    </a>
</nav>

	<div class="jumbotron bg-nav4">
		<div class="row ">
			
				<div class="col-5">
					

					

					<img src="http://cdn.collider.com/wp-content/uploads/2019/05/spider-man-far-from-home-poster-fury-mysterio-2.jpg" width="100%" height="280">

					>
				</div>
				<div class="col-7">
					<h1 CLASS="text-light text-center">SPIDER-MAN : FAR FROM HOME</h1>
					
					<P CLASS="text-light text-center">AT CINEMAS JULY 4</P>
					<a class="btn btn-lg  mt-100 text-light btn-block" style="background-color: #0860B5" href="https://in.bookmyshow.com/movies/spider-man-far-from-home/ET00078437?utm_source=productionhouse&utm_medium=referral&utm_campaign=sffh"  
					 style="height: 100%;width: 100%"> book ticket</a>
				</div>
		</div>
</div>

<div class="container">
		<div class="row ">			

			<div class="col-8" >
				<br>
				<h1 class="text-light display-4 text-center">Official Movie Ratings</h1>
				<br>
				<h3 class="text-light text-center">A good movie makes the audience feel like<br>they've journeyed with the characters</h3>
				<br>
				<p class="text-light text-center lead">Read reviews before wasting movie at the Theaters</p>
			</div>

			<div class="col-4">
				<div class="card" style="background-color: transparent;" >
					<div class="card-body">
						<form class="form" action="login_validator.php" method="post">
						
							<div id="errorMsg"></div>

							<label>Email</label><br>
							<input type="email" class="form-control" placeholder="Email address" name="user_ka_email"><br>

							<label>Password</label><br>
							<input type="password" class="form-control" placeholder="password" name="user_ka_password"><br>

							<input type="submit" value="Login" class="btn btn-block bg-nav1 text-light">
						</form>


					</div>
				</div>

				<p class="text-center text-light"><a href="#" data-toggle="modal" data-target="#myModal">Not a member? Sign Up</a></p>
			
			</div>
		</div>
	</div>


<!-- Modal -->


	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog modal-sm">
			<div class="modal-content " style="background-color: transparent;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title text-light">Register Here</h4>
				</div>
				<div class="modal-body">

					<div id="regError"></div>
					
					<form class="form" action="reg_validation.php" method="post">
		
						<label class="text-light">Name</label><br>
						<input type="text" class="form-control"  placeholder="e.g. abc"  name="user_ka_name"><br>

						<label class="text-light">Email</label><br>
						<input type="email" class="form-control"  placeholder="e.g. abc@gmail.com" name="user_ka_email"><br>

						<label class="text-light">Password</label><br>
						<input type="password" class="form-control"  placeholder="e.g. 12abc56" name="user_ka_password"><br>

						<label class="text-light">Phone</label><br>
						<input type="number" class="form-control"  placeholder="e.g. 9999999999" name="user_ka_phone"><br><br>

						<input type="submit" value="Register" class="btn btn-primary btn-block">
					
					</form>
				
				</div>

				<div class="modal-footer">
					
					<button type="button" class="btn btn-default text-light" data-dismiss="modal">Close</button>

				</div>
			</div>
		</div>
	</div>

</body>

</html>