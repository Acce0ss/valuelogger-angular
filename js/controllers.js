var valueloggerApp = angular.module('valueloggerApp', ['angularMoment'])
    .constant('angularMomentConfig', {
	preprocess: 'unix'
    });;

valueloggerApp
    .controller('loggedValuesCtrl', 
		function($scope, $http){
		    $http.post('api/get/values/for/serie', {"user":"asser","password":"asser", "serie_id":"1"}
		    ).success(
			function(data)
			{
			    console.log(JSON.stringify(data.data));
			    $scope.values= data.data.measurements;
			}
		    );
		    $scope.orderProp = 'time';
		});
