<?php
/* @var $this yii\web\View */
$this->title = 'Booker Application';

// Register requirements
$this->registerJsFile('/front/vendor/jquery/dist/jquery.min.js');
$this->registerJsFile('/front/vendor/bootswatch-dist/js/bootstrap.min.js');
$this->registerCssFile('/front/vendor/bootswatch-dist/css/bootstrap.min.css');
$this->registerJsFile('/front/vendor/angular/angular.min.js');
$this->registerJsFile('/front/vendor/angular-route/angular-route.min.js');
$this->registerJsFile('/front/vendor/angular-bootstrap/ui-bootstrap.min.js');
$this->registerJsFile('/front/vendor/angular-bootstrap/ui-bootstrap-tpls.min.js');
$this->registerJsFile('/front/vendor/lodash/dist/lodash.min.js');
$this->registerJsFile('/front/vendor/restangular/dist/restangular.min.js');

// RUN FrontEnd
$this->registerJsFile('/front/index.js');
$this->registerJsFile('/front/_common/directives.js');
$this->registerJsFile('/front/_common/filters.js');
$this->registerJsFile('/front/site/SiteModule.js');
$this->registerJsFile('/front/site/models/BookService.js');
$this->registerJsFile('/front/site/models/AuthorService.js');
$this->registerJsFile('/front/site/controllers/SiteCtrl.js');
?>

<div ng-view></div>