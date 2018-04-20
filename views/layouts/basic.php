<?php

use app\assets\AppAsset;
use yii\helpers\html;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>

<!doctype HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
    <div class="container">

        <ul class="nav nav-pills">
            <li role="presentation" class="active"><?= Html::a('Главная', ['test1/test/index'])?></li>
            <li role="presentation"><?= Html::a('Книги адм.', ['test1/test/books'])?></li>
            <li role="presentation"><?= Html::a('Авторы адм.', ['test1/test/autors'])?></li>
            <li role="presentation"><?= Html::a('Публичная часть', ['test1/test/publicview'])?></li>
        </ul>


       <?php echo $content?>
    </div>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
