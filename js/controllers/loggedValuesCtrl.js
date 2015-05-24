valueloggerApp
    .controller('loggedValuesCtrl', ['$scope', 'loggedValues',
		function($scope, loggedValues){
loggedValues
  .success(
function(data)
{
			    console.log(JSON.stringify(data.data));
			    $scope.values= data.data.measurements;
			}
		    );
		    $scope.orderProp = 'time';
		}]);
