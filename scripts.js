/*angular.module('carApp', ['angularUtils.directives.dirPagination']);
angular.module('carApp', [
    'angularFileUpload'
]);*/
var carApp = angular.module('carApp',[]);
carApp.controller("DbController",['$scope','$http', function($scope,$http){

// Function to get employee details from the database
getInfo();

function getInfo(){
// Sending request to EmpDetails.php files
$http.get('cardetails.php').success(function(data){
// Stored the returned data into scope
$scope.details = data;
});
}

$scope.insertInfo = function(id){

$http.post('insertvote.php',{"id":id}).success(function(data){

if (data == true) {

getInfo();
$('#vot').addClass("intro");

}

// Hide details insertion form
});
}

$scope.insertCar = function(carInfo){
	$http.post('insertCar.php', {})
}


$scope.toggleShow = function(){
	$('#carForm').slideToggle();
}

$scope.show_form = true;

$scope.currentUser = {};
$scope.editInfo = function(info){
$scope.currentUser = info;
//$('#empForm').slideUp();
$('#carForm').slideToggle();
}
}]);

