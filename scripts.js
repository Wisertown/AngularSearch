/*angular.module('carApp', ['angularUtils.directives.dirPagination']);
angular.module('carApp', [
    'angularFileUpload'
]);*/
var carApp = angular.module('carApp',[]);
carApp.controller("DbController",['$scope','$http', 'multipartForm', function($scope,$http, multipartForm){

getInfo();

function getInfo(){

$http.get('cardetails.php').success(function(data){

$scope.details = data;
});
}

$scope.insertInfo = function(id){

$http.post('insertvote.php',{"id":id}).success(function(data){

if (data == true) {

getInfo();
$('#vot').addClass("intro");

}


});
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
$scope.car = {};
$scope.Submit = function(){
	var uploadUrl = 'insertCar.php';
	multipartForm.post(uploadUrl, $scope.car);
}

}]);

