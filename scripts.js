angular.module('myApp', ['angularUtils.directives.dirPagination']);

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
}]);

$scope.insertInfo = function(info){
$http.post('insertvote.php',{"id":detail.id,"vote":+1}).success(function(data){
if (data == true) {
getInfo();
// Hide details insertion form
$('#empForm').css('display', 'none');
}
});
}
