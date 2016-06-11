<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Gallery';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php $items = [
    [
        'url' => '@web/images/1.jpeg',
        'src' => '@web/images/1.jpeg',
        'options' => array('title' => 'One')
    ],
    [
        'url' => '@web/images/2.jpeg',
        'src' => '@web/images/2.jpeg',
        'options' => array('title' => 'Two')
    ],
    [
        'url' => '@web/images/3.jpeg',
        'src' => '@web/images/3.jpeg',
        'options' => array('title' => 'Three')
    ],
    [
        'url' => '@web/images/4.jpeg',
        'src' => '@web/images/4.jpeg',
        'options' => array('title' => 'Four')
    ],
    [
        'url' => '@web/images/5.jpeg',
        'src' => '@web/images/5.jpeg',
        'options' => array('title' => 'Five')
    ],
    [
        'url' => '@web/images/6.jpeg',
        'src' => '@web/images/6.jpeg',
        'options' => array('title' => 'Six')
    ],
    [
        'url' => '@web/images/7.jpeg',
        'src' => '@web/images/7.jpeg',
        'options' => array('title' => 'Seven')
    ],
    [
        'url' => '@web/images/8.jpeg',
        'src' => '@web/images/8.jpeg',
        'options' => array('title' => 'Eight')
    ],
    [
        'url' => '@web/images/9.jpeg',
        'src' => '@web/images/1.jpeg',
        'options' => array('title' => 'Nine')
    ],
];?>
<?= dosamigos\gallery\Gallery::widget(['items' => $items]);?>

    <code><?= __FILE__ ?></code>
</div>
