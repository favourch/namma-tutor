
angular.module('myApp.Route', [])
.config(['$routeProvider', function($routeProvider){
    $routeProvider
        .when('/login',
        {
            templateUrl: 'app/view/login.html',
            controller: 'LoginCtrl',
            resolve: {
                skipIfLoggedIn: skipIfLoggedIn
            }
        })

        .when('/signup',
        {
            templateUrl: 'app/view/signup.html',
            controller: 'SignupCtrl',
            resolve: {
                skipIfLoggedIn: skipIfLoggedIn
            }
        })

        .when('/logout',
        {
            template: null,
            controller: 'LogoutCtrl'
        })

        .when('/profile',
        {
            templateUrl: 'app/view/profile.html',
            controller: 'profileController'
        })

        .when('/search',
        {
            templateUrl: 'app/view/search.html',
            controller: 'TypeHeadCtrl'
        })

        .when('/license',
        {
            templateUrl: 'app/view/static-contents/license.html',
            controller: 'TypeHeadCtrl'
        });
        
        function skipIfLoggedIn($q, $auth) {
            var deferred = $q.defer();
            if ($auth.isAuthenticated()) {
                deferred.reject();
            } else {
                deferred.resolve();
            }
            return deferred.promise;
        }

        function loginRequired($q, $location, $auth) {
            var deferred = $q.defer();
            if ($auth.isAuthenticated()) {
                deferred.resolve();
            } else {
                $location.path('/login');
            }
            return deferred.promise;
        }
}]);
