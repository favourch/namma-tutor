angular.module('myApp')
  .factory('Account', function($http) {
    return {
      getProfile: function() {
        return $http.get('auth/me');
      }
    };
  });