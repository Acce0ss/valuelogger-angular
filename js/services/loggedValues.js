valueloggerApp.factory('loggedValues', ['$http',
function ($http) {
  return $http.post('api/get/values/for/serie', 
                    {"user":"asser","password":"asser", "serie_id":1})
         .success(function (data) {
console.log(data); 
return data;
         });
}]);
