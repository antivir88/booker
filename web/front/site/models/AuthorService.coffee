'use strict'

angular.module( 'SiteModule' ).factory 'AuthorService', ['Restangular', (Restangular) ->
  Restangular.service 'author'
]
