app.controller(
    'TerrainSearchCtrl', ['$scope', '$http', '$rootScope','$compile', 'TerrainService', '$timeout','$http',
        function TerrainSearchCtrl($scope, $http, $rootScope, $compile, TerrainService, $timeout) {
            var scope = $rootScope;
            var cautare = true;
            var f_title = '';

            $scope.searchTerrains = [];
            console.log('TerrainSearchCtrl.js');

            scope.$watch('config', function(n, o){
                TerrainService.get().then(function(data){
                    console.log(data.data);
                    $scope.searchTerrains = data.data;
                    $compile($('.my_form').contents())($scope);
                });
            });
            $scope.click = function(item){
                console.log(item);
                _config['current_terrain'] = item;
                var coords = JSON.parse(item.geometry);
                console.log(coords);
                console.log(map_in);
                initialize_search();
                IO.OUT(coords,map_in,"#FF0000");
            };
            $scope.byRange = function (fieldName, minValue, maxValue) {
                if (minValue === undefined) minValue = Number.MIN_VALUE;
                if (maxValue === undefined || minValue>maxValue) maxValue = Number.MAX_VALUE;
                minValue=Number(minValue);
                maxValue=Number(maxValue);
                return function predicateFunc(item) {
                    return minValue <= Number(item[fieldName]) && Number(item[fieldName]) <= maxValue;
                };
            };

        }]);


