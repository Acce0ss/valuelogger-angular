
<html ng-app="valueloggerApp">

<head>
  <script src="bower_components/angular/angular.js"></script>
  <script src="js/app.js"></script>

  <!-- controllers -->
  <script src="js/controllers/loggedValuesCtrl.js"></script>

  <!-- services -->
  <script src="js/services/loggedValues.js"></script>

</head>
<body ng-controller="loggedValuesCtrl">

  <ul>
    <li ng-repeat="value in values">
      {{value.timestamp | date:'d.M.yyyy, hh:mm:ss'}}
      <p>{{value.value}}</p>
    </li>
  </ul>
</body>
</html>
