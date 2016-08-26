<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" ng-app="myApp" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" ng-app="myApp" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" ng-app="myApp" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" ng-app="myApp" class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Edumob - @yield('title')</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Stylesheets -->
<link rel="stylesheet" href="bower_components/materialize/dist/css/materialize.css">
<link rel="stylesheet" href="bower_components/angular-loading-bar/loading-bar.min.css">

<!-- Scripts  -->
<script src="bower_components/jquery/dist/jquery.js"></script>
<script src="bower_components/materialize/dist/js/materialize.js"></script>
<script src="bower_components/angular/angular.js"></script>
<script src="bower_components/angular-route/angular-route.js"></script>
<script src="bower_components/angular-materialize/src/angular-materialize.js"></script>
<script src="bower_components/angular-payments/lib/angular-payments.js"></script>
<script src="bower_components/angular-animate/angular-animate.min.js"></script>
<script src="bower_components/angular-loading-bar/loading-bar.min.js"></script>

</head>

<body bgcolor="#EBEFF2">

	@include('master.navigation')

	@yield('content')

	@include('master.footer')

	@yield('page_script')

</body>

</html>
