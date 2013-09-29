
var atmApp = angular.module('atmApp', ['ngResource']);

atmApp.config(function(){ //  add params as needed for dependency injection
    // perform app initialization logic
});

atmApp.factory('AuthenticationService', function($rootScope){
    return {}; // return the service object
});

atmApp.factory('AuthorizationService', function($rootScope){
    return {}; // return the service object
});

atmApp.factory('PeopleService', function($resource){
    var baseUrl = '/Symfony/web/app_dev.php/';

    return {
        getPeople: function() {
            return $resource(baseUrl + 'person/:id', {}, {
                get: {method: 'GET', params: {entryId: ''}, isArray: true}
            }).get();
        },
        getPerson: function(id) {
            // TODO
        }
    };
});

function PeopleCtrl($scope, PeopleService) {
    $scope.people = PeopleService.getPeople();
}

