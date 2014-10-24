FunGridApp.controller('ToolbarController',
    function ($scope, $route, $location, $rootScope) {
        $scope.isActive = function (viewLocation) {
            return viewLocation === $location.path();
        };
    }
);