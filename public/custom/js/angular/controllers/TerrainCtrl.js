app.controller(
            'TerrainCtrl', ['$scope', '$http', '$rootScope','$compile', 'TerrainService', '$timeout','FormService','$http', 
    function TerrainCtrl($scope, $http, $rootScope, $compile, TerrainService, $timeout,FormService) {
    var scope = $rootScope;
    var cautare = true;
    var f_title = '';

    $scope.terrains = [];
    console.log('TerrainCtrl.js');    


    scope.$watch('config', function(n, o){
        TerrainService.getUserTerrains().then(function(data){
            console.log(data.data);
            $scope.terrains = data.data;
            $compile($('.my_form').contents())($scope);
        });
    });   


    $scope.saveTerrain = function(){
        var data = FormService.datasource();
        var tc   = new Terrain([{d: 0}]);
        var geometry = JSON.stringify(IO.IN(shapes, true));
        data['geometry'] = geometry;
        TerrainService.store(data).then(function(data){
            $scope.terrains.push(data.out);
            swal('Succes!', 'Datele au fost salvate cu succes. Acum puteți vizualiza terenul în listă.', 'success');
            FormService.emptyControls();
        });
    };

    $scope.click = function(item){
        console.log(item);
        var coords = JSON.parse(item.geometry);
        console.log(coords);
        console.log(map_in);
        initialize();
        IO.OUT(coords,map_in, _config["polygonColor"]);
    };
}]);

