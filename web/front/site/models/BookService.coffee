'use strict'

angular.module( 'SiteModule' ).factory 'BookService', ['Restangular', (Restangular) ->
  Restangular.service 'book'
]