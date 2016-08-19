<?php
$csrfParam = Yii::$app->request->csrfParam;
$csrfToken = Yii::$app->request->csrfToken;

use yii\helpers\Html;
use yii\widgets\Menu;

/* @var $this \yii\web\View */
/* @var $content string */

\yii\web\YiiAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" ng-app="app">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="language" content="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="X-UA-Compatible" content="IE=edge">
	<?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="stylesheet" href="<?= Yii::$app->request->getBaseUrl() ?>/css/site.css"/>
    <?php $this->head() ?>
    <base href="/">
</head>
<body>
<?php $this->beginBody() ?>
    <div class="header">
    <?= Menu::widget([
        'items' => [
            //['label' => 'Home', 'url' => ['/']],
            //['label' => 'Adminka', 'url' => ['/admin']],
/*            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                [
                    'url' => ['/site/logout'],
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'template' => <<<HTML
<form method="post" action="{url}">
<input type="hidden" name="{$csrfParam}" value="{$csrfToken}" />
<input type="submit" value="{label}" />
</form>
HTML
,
                ]
            ),*/
        ],
        'options' => [
            'class' => 'pull-right'
        ]
    ]) ?>
        <h1><?= Html::a(Yii::$app->params['company'], ['/']) ?></h1>
    </div>

    <div class="content">
        <?= !empty($this->params['breadcrumbs']) ? \yii\widgets\Breadcrumbs::widget(['links'=>$this->params['breadcrumbs']]) : '' ?>

        <div class="incontent"><?= $content ?></div>
    </div>

    <footer class="footer text-center">&copy; Booker <?= date('Y') ?></footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
