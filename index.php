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
<body id="body">
	<ANY
    dir-paginate="expression | itemsPerPage: (int|expression) [: paginationId (string literal)]"
    [current-page=""]
    [pagination-id=""]
    [total-items=""]>
    ...
    </ANY>

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
		
		<dir-pagination-controls
    [max-size=""]
    [direction-links=""]
    [boundary-links=""]
    [on-page-change=""]
    [pagination-id=""]
    [template-url=""]
    [auto-hide=""]>
    </dir-pagination-controls>
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
				<div class="cards">
					<div class="titleCar">
					<span class="span">{{detail.year}}</span>
					<span class="span">{{detail.make}}</span>
					<span class="span">{{detail.model}}</span>
					</div>
					<div class="cardata">
					<span class="spanm" id='number-default'>Mileage: {{detail.mileage | number}}</span>
					<span class="spanm">VOTES: {{detail.vote}}</span>
					<p id='comms'>Comments:{{detail.comments}}</p>
					</div>
				</div>
				<div class="btn-hold"><form action="post"><button class="btn-primary">VOTE</button></form></div>
			</div>

		</div>
		</div>
	</div>
	</div>
</div>
</body>
</html>
<script src="scripts.js"></script>