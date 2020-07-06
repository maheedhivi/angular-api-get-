var app = angular.module('myApp',[]);
app.controller('services',['$scope',function($scope){
    $scope.onClick = function(){
            alert($scope.data);                    
    }
}])
