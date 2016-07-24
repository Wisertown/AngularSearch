<?php 



?>
<!DOCTYPE html>
<html lang="en" ng-app="carApp">
<head>
	<meta charset="UTF-8">
	<title>Cool Cars</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/styles.css">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>

</head>
<body>
	<div class="container wrapper" ng-controller="DbController">

		<div ng-repeat="detail in details| filter:search_query">
	
			<span>{{detail.year}}</span>
		</div>

	</dvi>
</body>
</html>
<script src="scripts.js"></script>