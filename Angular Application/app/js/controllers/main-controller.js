app.controller('MainCtrl', function mainController($scope, mainData){

    // Make a GET request to all ads
    mainData.getAllAds(function(resp){
        $scope.data = resp;
    });

    // Make a GET request to all Towns
    mainData.getAllTowns(function(resp){
        $scope.towns = resp;
    });

    // Make a GET request to all Towns
    mainData.getAllCategories(function(resp){
        $scope.categories = resp;
    });

    // Make a POST request to login User
    $scope.loginUser = function(login, form){
        mainData.getUser(function(resp){
            $scope.user = resp;
        },login);
    }
})
