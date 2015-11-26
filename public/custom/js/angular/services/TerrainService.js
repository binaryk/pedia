app.factory('TerrainService', ['$rootScope','$http','$timeout', function($rootScope, $http, $timeout){
    var mixin      = {};
    mixin.revenues = [];

    mixin.create = function(){
        var promise = $http.get($rootScope.config.r_get_revenue_modal).then(function(response){
            return response.data;
        });
        return promise;   
    }

    mixin.store = function(data){
        var promise = $http.post($rootScope.config.r_post_save, {data: data}).then(function(response){
            return response.data;
        });
        return promise; 
    };

    mixin.get = function() {
      var promise = $http.get($rootScope.config.r_get_all).then(function (response) {
        return response.data;
      });
      return promise;
    };

    mixin.show = function(id){

    }

    mixin.edit = function(id, data){
        var promise = $http.post($rootScope.config.r_get_revenue_modal_edit, {revenue: data}).then(function(response){
            return response.data;
        });
        return promise;  
    }

    mixin.update = function(id, data){

    }

    mixin.destroy = function(id){
        console.log(id);
        var promise = $http.post($rootScope.config.r_post_revenue_delete, {id: id}).then(function(response){
            return response.data;
        });
        return promise;  
    } 

    return mixin;

}]);