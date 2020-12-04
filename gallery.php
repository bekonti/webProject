<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Main Page</title>
	<link rel="stylesheet" type="text/css" href="src/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body style="background-color: #60eb73;">
	
	<nav class="navbar text-white navvv">
		<div class="container">
		  	
		  <span class="navbar-brand mb-0 h1">
		  	 <img class="" src="src/ico/train-white.svg" alt="" style="height: 50px;">
				Train Tickets
		  </span>

		</div>
	</nav>
	<br><br><br>

	<div class="container">
		
		<div class="row justify-content-center mt-5 text-dark text-center monospace">
			<div class="col-lg-5 col-md-6 col-sm-12">
				<div class="card p-3" id="form-card">
					<form action="order.php">
						<div class="form-group" style="margin-bottom: 0">
							<input type="text" class="form-control" placeholder="Enter Your station From">
						</div>
						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left-right rott" fill="white" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z"/></svg>
						<div class="form-group mt-1">
							<input type="text" class="form-control" placeholder="Enter Your station To">
						</div>
						<div class="row">						
							<div class="form-group col-sm-6">
								<input type="date" class="form-control" style="height: 50px">
								<input type="time" class="form-control mt-2" style="height: 50px">
							</div>
							<div class="form-group col-sm-6 text-white text-right">
								<a href="" class="btn text-white" id="adding"><br>+ <br> Add a return</a>
								<input type="checkbox" name="optionReturn" value="return"> open return
							</div>
						</div>
						<div class="row container mt-3">
							<div class="col-md-6">
								<select class="sel">
									<option value="a0">0 Adults</option>
								    <option value="a1">1 Adult</option>
								    <option value="a2">2 Adults</option>
								    <option value="a3">3 Adults</option>
								    <option value="a4">4 Adults</option>
								    <option value="a5">5 Adults</option>
								    <option value="a6">6 Adults</option>
								    <option value="a7">7 Adults</option>
								    <option value="a8">8 Adults</option>
								    <option value="a9">9 Adults</option>
							   	</select>
							</div>
							<div class="col-md-6">
								<select class="sel">
									<option value="c0">0 Children</option>
								    <option value="c1">1 Child</option>
								    <option value="c2">2 Children</option>
								    <option value="c3">3 Children</option>
								    <option value="c4">4 Children</option>
								    <option value="c5">5 Children</option>
								    <option value="c6">6 Children</option>
								    <option value="c7">7 Children</option>
								    <option value="c8">8 Children</option>
								    <option value="c9">9 Children</option>
							   	</select>
							</div>
						</div>	


						<button class="btn mt-3 btn-success col" type="submit">
							Get train times and fares
						</button>



					</form>
				</div>
			</div>

			<div class="col-lg-7 col-md-6 col-sm-12 container">
				<div class="row">			
					<h1 class="col-md-9 mt-4">Say Hi, to our friends <br> Train-tickets.kz</h1>
					<img class="col-md-3" src="src/ico/train_ticket_ico.svg" alt="" style="height: 150px;">
				</div>
				<h3 class="mt-5 text-left sansserif">You may have noticed we’re not running trains anymore,
					so you have arrived at the next best place to buy your tickets.
				</h3>
				<h1 class="text-left mt-5">Rock on.</h1>
			</div>
		
		</div>
	</div>
	
</body>
</html>