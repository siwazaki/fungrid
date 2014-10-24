FunGridApp.config(function ($routeProvider) {
    // ルーティング設定
    $routeProvider
        .when('/user', {
            templateUrl: '/user/index.html',
            controller: 'UserController'
        })
        .otherwise({
            redirectTo: '/'
        });
});


