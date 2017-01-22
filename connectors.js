/**
 * Created by kimtendu on 03.01.2017.
 */

var app = angular.module('courcesapp', ['ngRoute']);

app.config(function( $routeProvider, $httpProvider ){
    console.log('config');
    $routeProvider
        .when('/',{
            templateUrl : 'assets/dashboard.html',
            controller : 'UsersController'
        })
        .when('/login',{
            templateUrl : 'assets/login.html',
            controller : 'UsersController'
        })
    $httpProvider.defaults.headers.common["X-Requested-With"] = 'XMLHttpRequest';
});

app.run(function($rootScope, $http, $location){
    console.log('run');
    //$rootScope.authenticated
    $http({
        url: 'core/processors/auth.php'
    }).then(function successCallback(response) {
        $rootScope.authenticated = response.data;
        if (response.data.error){
            $location.path( "/login" );
        }
    }, function errorCallback(response) {
        $rootScope.authenticated = false;
    });

})
app.controller('UsersController', [ '$rootScope', '$scope', '$http', UsersController]);




function UsersController($rootScope, $scope, $http){

    $scope.cources = 'test';

    $scope.user = $rootScope.authenticated;

    $http({

        method: 'GET',
        params: { id: 'test' },
        url: 'core/processor.php'
    }).then(function successCallback(response) {
        $scope.cources = response;
        // this callback will be called asynchronously
        // when the response is available
    }, function errorCallback(response) {
        $scope.cources = response;

    });
    /*
    $http.get('./core/question.json').success(function(data) {
        $scope.cources=data.question;
    });
     */


    function login(){};

    function getStudentsList(){};

    function getCourcesList(){};

    function createStudent(){};

    function createCource(){};

    function editStudent(studentId){};

    function editCource(courceId){};


}

