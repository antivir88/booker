'use strict'

app = angular.module 'SiteModule', [
  'ngRoute'
  'restangular'
]

app.config ['$routeProvider', ($routeProvider) ->
  $routeProvider.when '/', {
    templateUrl: '/front/views/site/index.html',
    controller: 'SiteCtrl'
  }
]
