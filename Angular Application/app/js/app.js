var app = angular.module('appModule', ['ngRoute']);

app.config(function($routeProvider){
    $routeProvider.when('/register',{
        templateUrl:'templates/register.html'
    });
    $routeProvider.when('/ads',{
        templateUrl:'templates/all-ads.html'
    });
    $routeProvider.when('/login',{
        templateUrl:'templates/login.html'
    });
    $routeProvider.otherwise({ redirectTo:'/ads'});
});