'use strict';



angular.module('myApp.Search', ['chieffancypants.loadingBar','ui-rangeSlider','ngAnimate','ngMessages','toastr'])
    .controller('TypeHeadCtrl', function($scope, $http,ProfileData,$timeout,cfpLoadingBar,$location,toastr) {

        /*Global Variable Declaration*/

        $scope.search_param={};
        $scope.items = [];
        $scope.lastpage=1;
        $scope.posts = {};

        /*End of Global Variable Declaration*/

        /*Location Mechanism */

        $scope.CityList=null;
        $scope.AreaList=null;
        $scope.CityID=null;
        $scope.AreaID=null;

        $scope.getArea = function(CityID){
            $http.get('/areas/'+CityID).success(function(data){
                $scope.AreaList=data;
            })
            return $timeout(function() {

            }, 650);
        }

        $scope.loadCity = function() {
            // Use timeout to simulate a 650ms request.
            $http.get('/city').success(function(data)
            {
                $scope.cityName = data;
                $scope.AreaList=null;
            })
            return $timeout(function() {

            }, 650);
        };
        /* End Location Mechanism*/

        $scope.init = function()
        {
            $("#loadMore").hide();
        }
        /*Calling initial call*/
        $scope.init();



        /*Basic Search Mechanism*/
        $scope.search = function()
        {
            if($scope.SearchForm.$valid)
            {

                $scope.success="Form Valid";

                $scope.lastpage=1;
                $http({
                    url: '/search/'+$scope.search_param.id +'/'+$scope.search_param.term,
                    method: "GET",
                    params: {page:  $scope.lastpage}
                }).success(function(data, status, headers, config) {
                    $scope.items = data.data;
                    //Data Nullability Test
                    console.log(data);
                    if($scope.items == ""){
                        $scope.EmptyResult="I'm sorry we didn't find teacher.";
                    }
                    else
                    {
                        $scope.WeHaveResult="Awesome";
                    }
                    //End of Nullability
                    $scope.currentpage = data.current_page;
                    $("#loadMore").show();
                    if($scope.items.length===data.total){
                        $("#loadMore").hide();
                    }

                }).error(function(data,status,headers,config){
                    alert('oops something went wrong');
                });

            }
            else
            {

                $scope.errorTerm="Please enter subject name";
                $scope.errorCity="Please select city";


                if($scope.SearchForm.term.$invalid)
                {
                    toastr.info($scope.errorTerm);
                }

                if($scope.SearchForm.city.$invalid)
                {
                    toastr.info($scope.errorCity);

                }

            }


        };

        $scope.loadMore = function() {
            $scope.lastpage +=1;
            $http({
                url: '/search/'+$scope.search_param.id +'/'+$scope.search_param.term,
                method: "GET",
                params: {page:  $scope.lastpage}
            }).success(function (data, status, headers, config) {

                // $scope.events = $scope.items.concat(data.data);
                $scope.items = $scope.items.concat(data.data);
                if($scope.items.length===data.total){
                    $("#loadMore").hide();
                }

            });
        };

        /*End of Basic Search Mechanism*/

        /*Advance Search Mechanism*/
        $scope.search_param = {
            range: {
                min: 0,
                max: 10000
            },
            minPrice: 0,
            maxPrice: 10000
        };

        $scope.AdvanceSearch = function()
        {
            $scope.lastpage=1;
            $http.post('advancesearch',$scope.search_param).success(function(data){
                $scope.items = data.data;
                $scope.currentpage = data.current_page;
                $("#loadMoreAdv").show();
                if($scope.items.length===data.total){
                    $("#loadMoreAdv").hide();
                }
            });
        };
        $scope.loadMoreAdv = function() {
            console.log('holla');
            $scope.lastpage +=1;
            $http({
                url: 'advancesearch',
                data: $scope.search_param,
                method: "POST",
                params: {page:  $scope.lastpage}
            }).success(function (data, status, headers, config) {

                // $scope.events = $scope.items.concat(data.data);
                $scope.items = $scope.items.concat(data.data);
                if($scope.items.length===data.total){
                    $("#loadMoreAdv").hide();
                }

            });

        };

        /*End of Search Mechanism*/

        $scope.view = function (id) {
            ProfileData.setValue('profile_id',id);
            $location.path("/profile" );
        };

        /*Loading Bar On Function Call*/

        $scope.start = function() {
          cfpLoadingBar.start();
        };

        $scope.complete = function () {
          cfpLoadingBar.complete();
        };

        /*End of Loading Bar*/

});