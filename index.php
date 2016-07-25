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

</head>
<body>
	<div class="container">
	<div class="col-md-12 col-sm-12 col-xs-12 text-center">
		<h1>My First Car</h1>
		<!--<p>Tell us about your first car, users get to vote on the coolest first car</p>-->
		<p>Vote on which first car is the coolest!</p>
		<p>Vote as many times as you want! Nobody cares!</p>
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
		<br>
		<div class="col-md-12 col-sm-12 col-xs-12">
		<div ng-repeat="detail in details| filter:query |orderBy: 'year'">
			<div class="hold">
				<div class="img-holder"><img src="{{detail.photoURL}}" alt="car" class="imgh"></div>
				<span class="span">Year: {{detail.year}}</span>
				<span class="span">Make: {{detail.make}}</span>
				<span class="span">Model: {{detail.model}}</span>
				<span class="span" id='number-default'>Mileage: {{detail.mileage | number}}</span>
			</div>
		</div>
		</div>
	</div>
	</div>
</div>
</body>
</html>
<script src="scripts.js"></script>