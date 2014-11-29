
<html ng-app="valueloggerApp">

<head>
  <script src="bower_components/angular/angular.js"></script>
  <script src="bower_components/moment/moment.js"></script>
  <script src="bower_components/angular-moment/angular-moment.js"></script>
  
  <script src="js/controllers.js"></script>
</head>
<body ng-controller="loggedValuesCtrl">

  <ul>
    <li ng-repeat="value in values">
      {{value.timestamp | amDateFormat:'d.M.YYYY, hh:mm:ss'}}
      <p>{{value.value}}</p>
    </li>
  </ul>
</body>
</html>