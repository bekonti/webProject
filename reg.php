<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Main Page</title>
	<link rel="stylesheet" type="text/css" href="src/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body style="background-color:;">
	
	<nav class="navbar text-white navvv">
		<div class="container">
		  	<span class="navbar-brand mb-0 h1">
		  		 <img class="" src="src/ico/train-white.svg" alt="" style="height: 50px;">
					Train Tickets
		  </span>
		</div>
	</nav>




<div class="jumbotron" style="text-align: center;">
	<div class="container">
		<h2>Firstly you should Authorize</h2>
		<b>Registrate or Login</b>
		<p>Let us know what you're looking for in an agency. We'll take a look and see</p>
		<p>if this could be the start of something beautiful</p>
		<form>
			<div class="row">
				<div class="col-md-2"></div>
			  	<div class="form-group col-md-4">
			    	<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Your Name">
			  	</div>
			  	<div class="form-group col-md-4">
			    	<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Your Surname">
			  	</div>
			  </div>

			<div class="row">
				<div class="form-group offset-2 col-md-4">
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Email">
			  	</div>
				<div class="form-group col-md-4 row">	
					    <label for="" class="col-md-6 mt-2">Your birth day:</label>
					    <input type="date" class="form-control col-md-6" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Age">

				</div>
			</div>
			<div class="row">
				<div class="col-md-2"></div>
			</div>
			<button type="submit" class="btn float-center" style="background-color: #10c9c3; color: white">Registrate</button> or 
			<button class="btn btn-primary">Login</button>
	  		
		</form>
	</div>
</div>

<script src="script.js"></script>
</body>
</html>