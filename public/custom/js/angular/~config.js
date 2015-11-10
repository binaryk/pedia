var app = angular.module('app', ['angular-toArrayFilter']);
app.run(function($rootScope){
    $rootScope.config = _config;
});
 