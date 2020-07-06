
var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "main.html"
    })
    .when("/name", {
        templateUrl : "api/getdata.php"
    })
   
});
function getResultsPage(){
    $http({
        url: URL + 'api/getdata.php',
        method: 'GET'
     }).then(function(res){
        $scope.data = res.data.data;
     });
}