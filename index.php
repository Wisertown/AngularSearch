<?php 



?>
<!DOCTYPE html>
<html lang="en" ng-app="carApp">
<head>
	<meta charset="UTF-8">
	<title>My First Car</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/styles.css">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
	<script>
	/*$('#vot').change(function(){

		$(this).animate({
   width: '150%'
}, { duration: 200, queue: false });
		$(this).animate({
	 width: '70%'		
}, {duration: 200, queue: false });
	});*/

	</script>
</head>
<body id="body">


<div class="container">
	<div class="col-md-12 col-sm-12 col-xs-12 text-center">
		<h1>My First Car</h1>
		<!--<p>Tell us about your first car, users get to vote on the coolest first car</p>-->
		<p>Vote on which first car is the coolest!</p>
		<p>Vote as many times as you want!</p>
	</div>

	<br>
	<div class="col-md-12 col-sm-12 col-xs-12">

	<div class="container wrapper" ng-controller="DbController">
		<div class="col-md-12 col-sm-12 col-xs-12 text-center">
			<div class='alert alert-default input-group search-box'>
				<span>
					<label for="search">Search for the car you want!</label>
					<input type="text" ng-model="query">
				</span>
			</div>
		</div>

<div class="col-md-12 col-sm-12 col-xs-12 text-center">
	<button class="btn btn-warning" ng-click="toggleShow()">Add Your First Car</button>
</div>

		<div class="col-md-12 col-sm-12 col-xs-12 text-center">
			<div ng-include src="'templates/newForm.html'"></div>
		</div>

	<div class="col-md-12 col-sm-12 col-xs-12">
		<div ng-repeat="detail in details| filter:query |orderBy: 'year'">
			<div class="hold">
				<div class="img-holder"><img src="{{detail.photoURL}}" alt="car" class="imgh"></div>
				<div class="cards">
					<div class="titleCar">
					<span class="span">{{detail.year}}</span>
					<span class="span">{{detail.make}}</span>
					<span class="span">{{detail.model}}</span>
					</div>
					<div class="cardata">
					<span class="spanm" id='number-default'>Mileage: {{detail.mileage | number}}</span>
					
					<p id='comms'>Comments:{{detail.comments}}</p>
					</div>
					<span class="spanm" id="vot">VOTES: {{detail.vote}}</span>
				</div>
				<div class="btn-hold">
					<button ng-click="insertInfo(detail.id)"class="btn btn-primary">VOTE</button>
				</div>
			</div>
		</div>
		</div>
		</div>
	</div>
</div>
</body>
</html>
<script src="scripts.js"></script>