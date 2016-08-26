angular.module('myApp')
  .controller('NavbarCtrl', function($scope,$location, $auth) {
    $scope.isAuthenticated = function() {
      return $auth.isAuthenticated();
    };
	$scope.isActive = function(route) {
    return route === $location.path();
  };
  });