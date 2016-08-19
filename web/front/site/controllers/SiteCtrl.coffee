'use strict'

class SiteCtrl
  @$inject: [ '$scope', 'BookService' ]

  constructor: (@scope, @BookService) ->
    @BookService.getList().then (data) =>
      @scope.books = data


angular.module('SiteModule').controller 'SiteCtrl', SiteCtrl
