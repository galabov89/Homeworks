app.factory('mainData', function($http, $log){

    function getAllAds(success){
        $http({method:'GET', url:'http://softuni-ads.azurewebsites.net/Api/Ads'})
            .success(function(data, status, headers, config){
                success(data);
            })
            .error(function(data, status, headers, config){
                $log.warn(data);
            })
    }

    function getAllTowns(success){
        $http({method:'GET', url:'http://softuni-ads.azurewebsites.net/Api/Towns'})
            .success(function(data, status, headers, config){
                success(data);
            })
            .error(function(data, status, headers, config){
                $log.warn(data);
            })
    }

    function getAllCategoriess(success){
        $http({method:'GET', url:'http://softuni-ads.azurewebsites.net/Api/Categories'})
            .success(function(data, status, headers, config){
                success(data);
            })
            .error(function(data, status, headers, config){
                $log.warn(data);
            })
    }

    function getUser(success, login){
        $http({method:'POST',data:{username:login.username, password:login.password}, url:'http://softuni-ads.azurewebsites.net/api/user/login'})
            .success(function(data, status, headers, config){
                success(data);
            })
            .error(function(data, status, headers, config){
                $log.warn(data);
            })
    }

    return{
        getAllAds:getAllAds,
        getAllTowns:getAllTowns,
        getAllCategories:getAllCategoriess,
        getUser:getUser
    }
})
