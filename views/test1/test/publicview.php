<?php

/* @var $author app\controllers\test1\TestController */
/* @var $book app\controllers\test1\TestController */
?>

<br>
<table class="table table-sm">
    <caption>Авторы</caption>
    <thead>
    <tr>
        <td>Уникальный ИД</td>
        <td>Фамилия</td>
        <td>Имя</td>
        <td>Кол-во публикаций</td>
    </tr>
    </thead>
<?php foreach ($author as $item):?>
<tr>
    <?php foreach($item as $value):?>
    <td><?php echo $value;?></td>
    <?php endforeach;?>
</tr>
<?php endforeach;?>
</table>


<br>
<table class="table table-sm">
    <caption>Книги</caption>
    <thead>
    <tr>
        <td>Уникальный ИД</td>
        <td>Наименование</td>
        <td>Автор</td>
        <td>Редакция</td>
        <td>Количество страниц</td>
        <td>Картинка</td>
    </tr>
    </thead>
    <?php foreach ($book as $item):?>
        <tr>
            <?php foreach($item as $value):?>
                <td><?php echo $value;?></td>
            <?php endforeach;?>
        </tr>
    <?php endforeach;?>
</table>