/**
 * Created by Edumob on 10/26/2015.
 */
'use strict';

angular.module('myApp.Profile', ['chieffancypants.loadingBar', 'ngAnimate'])


    .controller('profileController', function($scope, $http,ProfileData, $timeout, cfpLoadingBar,$location) {
        $scope.ProfileInfo={};
        $scope.profile_id = ProfileData.getValue('profile_id');

        $scope.init = function(){
            $http.get('/profile/'+$scope.profile_id).success(function(data){
                $scope.ProfileInfo=data;
            });

        };

        $scope.init();
        $scope.lastpage=1;

        $scope.TeachesSubject = function(){
            $scope.lastpage=1;
            $http.get('subject/'+$scope.profile_id).success(function(data){
                $scope.Subjects=data.data;
                $scope.currentpage = data.current_page;
                $("#loadMore").show();
                if($scope.Subjects.length===data.total){
                    $("#loadMore").hide();
                }
            });
        };
        $scope.TeachesSubject();

        $scope.loadMore = function() {
            $scope.lastpage +=1;
            $http({
                url: 'subject/'+$scope.profile_id,
                method: "GET",
                params: {page:  $scope.lastpage}
            }).success(function (data, status, headers, config) {

                $scope.Subjects =$scope.Subjects.concat(data.data);
                if($scope.Subjects.length===data.total){
                    $("#loadMore").hide();
                }

            });
        };


    });

