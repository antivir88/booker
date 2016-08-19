'use strict'

app = angular.module 'app', [
  'ngRoute'
  'ui.bootstrap'
  'restangular'

  'SiteModule'

]

app.config [
  '$routeProvider', '$locationProvider', 'RestangularProvider',
  ($routeProvider, $locationProvider, RestangularProvider) ->

    RestangularProvider.setBaseUrl '/api/v1'

    $routeProvider.otherwise { redirectTo: '/' }

    if window.history && window.history.pushState # disable hash
      $locationProvider.html5Mode true

]