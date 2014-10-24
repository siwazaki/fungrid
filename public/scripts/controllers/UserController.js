//Models
FunGridApp.factory('User', function ($resource) {
    return $resource(
        "/api/v1/user/:id",
        {id: "@id" },
        {
            query: {
                isArray:false
            }
        }
    );


});

//Controller
FunGridApp.controller('UserController',
    function ($scope, $route, $location, $rootScope, User) {
        $scope.filterOptions = {
            filterText: "",
            useExternalFilter: true
        };
        $scope.totalServerItems = 0;
        $scope.pagingOptions = {
            pageSizes: [10, 100, 500, 1000, 5000, 10000, 50000],
            pageSize: 100,
            currentPage: 1
        };
        $scope.setPagingData = function (pagination) {
            $scope.data = pagination.data;
            $scope.totalServerItems = pagination.total;
            if (!$scope.$$phase) {
                $scope.$apply();
            }
        };
        $scope.getPagedDataAsync = function (pageSize, page, searchText) {
            setTimeout(function () {
                var data;
                if (searchText) {
                    var ft = searchText.toLowerCase();
                    $http.get('jsonFiles/largeLoad.json').success(function (largeLoad) {
                        data = largeLoad.filter(function (item) {
                            return JSON.stringify(item).toLowerCase().indexOf(ft) != -1;
                        });
                        $scope.setPagingData(data, page, pageSize);
                    });
                } else {
                    User.query({
                            page: page,
                            per_page: pageSize
                        },
                        function (pagination) {
                            $scope.setPagingData(pagination);
                        });
                }
            }, 100);
        };

        $scope.getPagedDataAsync($scope.pagingOptions.pageSize, $scope.pagingOptions.currentPage);

        $scope.$watch('pagingOptions', function (newVal, oldVal) {
                $scope.getPagedDataAsync($scope.pagingOptions.pageSize, $scope.pagingOptions.currentPage, $scope.filterOptions.filterText);
        }, true);

        $scope.$watch('filterOptions', function (newVal, oldVal) {
            if (newVal !== oldVal) {
                $scope.getPagedDataAsync($scope.pagingOptions.pageSize, $scope.pagingOptions.currentPage, $scope.filterOptions.filterText);
            }
        }, true);

        //Todo: We should get cell definitions from the server.
        var colDefs = [
            {
                field: 'id',
                width: 100
            },
            {
                field: 'name',
                width: 200
            },
            {
                field: 'email',
                width: 200
            },
            {
                field: 'address',
                width: 400
            }
        ];

        for (var i = 1; i <= 10; ++i) {
            colDefs.push({
                field: ('foo' + i),
                width: 200

            });
        }


        $scope.gridOptions = {
            data: 'data',
            columnDefs: colDefs,
            enablePaging: true,
            enableCellEdit: true,
            enableSorting: true,
            showFooter: true,
            showFilter:true,
            totalServerItems: 'totalServerItems',
            pagingOptions: $scope.pagingOptions
            //filterOptions: $scope.filterOptions
        };
    }
);