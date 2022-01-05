<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  font-size: 17px;
}

.container {
  position: relative;
  max-width: 800px;
  margin: 0 auto;
}

.container img {vertical-align: middle;}

.container .content {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}
</style>
    </head> 
<body>
   <div class="container">
  <img src="https://images.unsplash.com/photo-1528101759-6c82d7e735e5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MjA2fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60" alt="Notebook" style="width:100%;">
  <div class="content"> 
  <h1>Enter your review</h1>
  <div ng-app="myApp" ng-controller="myCtrl">

<select ng-model="selectedName" ng-options="x for x in names">
</select>

</div>

<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
    $scope.names = ["Good", "Satisfying", "Excellent"];
});
</script>
<button onclick="myFunction()">Click</button>
  </div>
   </div>
<script>
function myFunction() {
  alert("Thank you for your review");
}
</script>
</body>
</html>