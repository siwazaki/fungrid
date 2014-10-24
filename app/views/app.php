<!DOCTYPE html>
<html ng-app="FunGridApp">

<head>
  <title></title>
  <meta charset="UTF-8">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="no-cache">
  <link rel="shortcut icon" href="/favicon.ico"/>
  <link rel="stylesheet" type="text/css" href="/bower/bootstrap/dist/css/bootstrap.css" media="all">
  <link rel="stylesheet" type="text/css" href="/bower/angular-ui/build/angular-ui.min.css" media="all">
  <link rel="stylesheet" type="text/css" href="/bower/angular-grid/ng-grid.min.css" media="all">
  <link rel="stylesheet" type="text/css" href="/css/fungrid.css" media="all">
  <script src="/bower/jquery/dist/jquery.min.js"></script>
  <script src="/bower/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="/bower/angular/angular.min.js"></script>
  <script src="/bower/angular-route/angular-route.min.js"></script>
  <script src="/bower/angular-resource/angular-resource.min.js"></script>
  <script src="/bower/angular-sanitize/angular-sanitize.min.js"></script>
  <script src="/bower/angular-cookies/angular-cookies.min.js"></script>
  <script src="/bower/angular-ui/build/angular-ui.min.js"></script>
  <script src="/bower/angular-animate/angular-animate.min.js"></script>
  <script src="/bower/angular-grid/build/ng-grid.min.js"></script>
  <script src="/bower/angular-ui-bootstrap-bower/ui-bootstrap-tpls.min.js"></script>
  <script src="/scripts/FunGridApp.js"></script>
  <script src="/scripts/controllers/FunGridBaseController.js"></script>
  <script src="/scripts/Routes.js"></script>

  <script src="/scripts/controllers/UserController.js"></script>
  <script src="/scripts/controllers/ToolbarController.js"></script>

</head>

<body ng-controller="FunGridBaseController">
<div ng-include="'partials/toolbar.html'" ng-controller="ToolbarController"></div>
<div class="content">
  <div ng-view></div>
</div>

</body>

</html>