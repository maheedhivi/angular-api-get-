<!DOCTYPE html>
<html>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" href="stylesheet/style.css"/>  
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>

<body ng-app="myApp">
<header><a href="/angular-api_controllers">MAIN PAGE</a></header><br>
<div class="link">
<a href="#!london">City 1</a>
<a href="#!paris">City 2</a>   
</div>
<script src="app/route.js"></script>
<script src="app/controllers/services.js"></script>

<p>Click on the links.</p>

<div class="ng-view"></div>

</body>

</html>
