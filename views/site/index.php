<?php
use yii\helpers\Url;

$date = date('d.m.Y');
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title><?= Yii::$app->name; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Welcome!</h1>
    <h2>Пример работы с API:</h2>

    <?php
    $url1 = Url::to(['/date', 'date' => $date, 'value' => '1', 'unit' => 'days'], true);
    $url2 = Url::to(['/date', 'date' => $date, 'value' => '6', 'unit' => 'months'], true);
    $url3 = Url::to(['/date', 'date' => $date, 'value' => '10', 'unit' => 'years'], true);
    ?>

    <p>
        Получить дату следующего дня: <a target="_blank" href="<?= $url1; ?>">GET: <?= $url1; ?></a>
    </p>
    <p>
        Получить дату через полгода: <a target="_blank" href="<?= $url2; ?>">GET: <?= $url2; ?></a>
    </p>
    <p>
        Получить дату через 10 лет: <a target="_blank" href="<?= $url3; ?>">GET: <?= $url3; ?></a>
    </p>

    <hr>

    <?php
    $url4 = Url::to(['/sqrt', 'value' => 9], true);
    ?>

    <p>
        Получить квадратный корень из 9-ти: <a target="_blank" href="<?= $url4; ?>">GET: <?= $url4; ?></a>
    </p>

    <h2>Примеры ошибок:</h2>

    <?php
    $url5 = Url::to(['/date'], true);
    $url6 = Url::to(['/date', 'date' => 'lorem', 'value' => 'ipsum', 'unit' => 'dolor'], true);
    ?>
    <p>
        Не передал параметры: <a target="_blank" href="<?= $url5; ?>">GET: <?= $url5; ?></a>
    </p>
    <p>
        Неправильные параметры: <a target="_blank" href="<?= $url6; ?>">GET: <?= $url6; ?></a>
    </p>
</div>
</body>
</html>
