var index = angular.module("index-modulo", ['ui.bootstrap']);

index.controller("indexController", ["$http", '$sce', indexController]);

function indexController($http, $sce){
    var inc = this;
    
    inc.data = {};
    
    inc.enviar = function(){
    $http.post("registrar", inc.data)
        .error(function(error){
           console.log(error);
        })
        .success(function(resp){
          console.log(resp);
        });
    }
}
