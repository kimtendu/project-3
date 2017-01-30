/**
 * Created by kimtendu on 03.01.2017.
 */

var app = angular.module('courcesapp', ['ngRoute', 'ngCookies']);

// config app
app.config(function( $routeProvider, $httpProvider ){
    //console.log('config');
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

/*
app.run(function($rootScope, $http, $location){
    console.log('run');
    //$rootScope.authenticated
    $http({
        url: 'core/auth/'
    }).then(function successCallback(response) {
        $rootScope.authenticated = response.data;
        if (response.data == false){
            $location.path( "/login" );
            console.log(response.data)
        }
    }, function errorCallback(response) {
        $rootScope.authenticated = response;
        console.log(response.data)
    });

})
*/
app.controller('UsersController', [ '$scope', '$http', '$cookies', UsersController]);


function UsersController($scope, $http, $cookies){

    const sessionId = $cookies.get('PHPSESSID');
    $scope.isLogin = false;
    if(sessionId){
        //login template
        $http({
            method: "POST",
            params: {'userSession' : sessionId},
            url: 'core/auth'
        }).then(function successCallback(response) {
            isLogin = response.data;
        }, function errorCallback(response) {
            isLogin = response.data;
        });

    }



    //console.log(isLogin);
    $scope.login = function(user){
            console.log(user);
            $http({
                url: 'core/login/',
                method: "POST",
                data: { 'userEmail' : user.email, 'userPassword' : user.password }
            }).then(function successCallback(response){
                console.log(response);
                // if(response.data) $location.path("/");
            })


        };


    /*if ($scope.isLogin){
        getAlluser



    }
    */



    /*

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

    $http.get('./core/question.json').success(function(data) {
        $scope.cources=data.question;
    });
     */




    function getStudentsList(){};

    function getCourcesList(){};

    function createStudent(){};

    function createCource(){};

    function editStudent(studentId){};

    function editCource(courceId){};


}

