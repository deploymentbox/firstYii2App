<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>

<?php $this->beginBody() ?>
    <div class="wrap">
        <?= $content ?>
    </div>

    <footer class="footer">
        <div class="container">
            <div>
                <img src="/images/hostingcrab-logo.png" alt="Hostingcrab.com"/>
            </div>
            <div>by <a href="http://www.hostingcrab.com">HostingCrab.com</a></div>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
