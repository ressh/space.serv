<?
$count = ArenaRoom::model()->countByAttributes(array(
    'is_complete'=> '0'
));
?>

<div class="menu">

    <div class="top_menu">
        <? if( $count > 0 ): ?>
            <?= CHtml::link( 'АРЕНА(' . $count . ')', Yii::app()->createUrl( 'game/Arena' ), array('class' => 'btn btn-danger big_font')) ?>
        <? else: ?>
            <?= CHtml::link( 'АРЕНА', Yii::app()->createUrl( 'game/Arena' ), array('class' => 'btn btn-danger big_font')) ?>
        <? endif; ?>
    </div>

    <ul class="navigation">
        <li>
            <?= CHtml::link( 'Главная', Yii::app()->createUrl( 'site/index' ), array('class' => 'btn btn-info')) ?>
        </li>
        <li>
            <?= CHtml::link( 'Топ игроков', Yii::app()->createUrl( 'game/galactic' ), array('class' => 'btn btn-info')) ?>
        </li>
        <li>
            <?= CHtml::link( 'Новости', Yii::app()->createUrl( 'game/news' ), array('class' => 'btn btn-info')) ?>
        </li>
        <li>
            <?= CHtml::link( 'Техподдержка', Yii::app()->createUrl( 'game/support' ), array('class' => 'btn btn-info')) ?>
        </li>
        <li style="margin-left:50px;">
            <?= CHtml::link( 'Вход', Yii::app()->createUrl( 'player/login2' ), array('class' => 'btn btn-info')) ?>
        </li>
        <li>
            <?= CHtml::link( 'Регистрация', Yii::app()->createUrl( 'player/create2' ), array('class' => 'btn btn-info')) ?>
        </li>
    </ul>

</div>