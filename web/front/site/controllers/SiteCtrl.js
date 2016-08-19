// Generated by CoffeeScript 1.10.0
(function() {
  'use strict';
  var SiteCtrl;

  SiteCtrl = (function() {
    SiteCtrl.$inject = ['$scope', 'BookService'];

    function SiteCtrl(scope, BookService) {
      this.scope = scope;
      this.BookService = BookService;
      this.BookService.getList().then((function(_this) {
        return function(data) {
          return _this.scope.books = data;
        };
      })(this));
    }

    return SiteCtrl;

  })();

  angular.module('SiteModule').controller('SiteCtrl', SiteCtrl);

}).call(this);