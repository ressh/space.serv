<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 11.10.2015
 * Time: 1:14
 */
?>


<div class="content">

    <div style="float: right;"><a href="<?= $this->createUrl( 'player/HistoryPaysOuts' ) ?>" class="btn">История заявок</a></div>


    <h3 style="width: 300px;">Снять со счета</h3>


    <div style="border: dashed #CACACA 1px; padding: 10px;">
        <h4>Доступный баланс</h4>
        Ваш доступный баланс: <?= $player->getSummLimit(); ?> руб<br>

        <small style="text-decoration: underline; cursor: pointer;"><p onclick="showHideHow();">Как пополнить доступный баланс?</p></small>

        <div class="how" style="display: none;">
        1) Выполняйте миссии, за каждую миссию вы будете получать доход и сможете выводить его на доступный баланс.<br>
        2) Играйте на Арене на <strong>доступный баланс</strong>, чтобы выйграть баланс у ваших соперников! <br>
        3) Приглашайте рефералов! За каждое пополнение рефералом вы будете получать до 40% от суммы пополнения! <br>
        4) Пополняйте счет! За каждое пополнение вы будете получать 40%

        <br>
        <br>

        Пригласив в игру 6-8 активныхх участников вы наверняка забудете про ограничения доступного баланса!

        </div>
    </div>

    <br>

    <div class="kranshteyn_hr_100"></div>

    <? if ($player->activate_phone != Player::$ACTIVE_PHONE): ?>

        <?php $form = $this->beginWidget('CActiveForm', array(
            'id' => 'form-phone',
            'enableAjaxValidation' => false,
            'action' => Yii::app()->createUrl('player/PhoneConfirm'),
            'htmlOptions' => array('class' => 'form-inline'),
        )); ?>

        <div class="form-group" style="padding: 10px; background:#41B5D7">
            Требуется указать номера телефона для безопасного вывода
            средств  <?php echo $form->textField($form_model, 'phone', array('class' => 'form-control', 'placeholder' => '79122222222')); ?>
            <button class="btn btn-success" type="submit">Указать</button>
        </div>

        <?php $this->endWidget(); ?>

        <div class="kranshteyn_hr_100"></div>
    <? endif; ?>


    <?php $form = $this->beginWidget('CActiveForm', array(
        'id' => 'form-out',
        'enableAjaxValidation' => false,
        'action' => Yii::app()->createUrl('player/OutSumm'),
        'htmlOptions' => array('class' => 'converter-form'),
    )); ?>

    <div class="info" style="margin: 10px; text-align: left; background:#349BB9; color:#ffffff; border-radius: 3px;">
        <?php
        if ($form->errorSummary($model) != '') {
            echo $form->errorSummary($model);
        }

        ?>
    </div>

    <div class="convert-item">

        <p>
            В данный момент в целях исключения мошенничества, вывод производится в ручном режиме. Время поступления
            средств от 1 до 3-х рабочих дней.
            Если у вас возникли вопросы, напишите в нашу службу поддержки!
            <span class="bold_red"> Внимание! </span> минимальная сумма вывода <span class="bold_red">10 руб</span>
        </p>


        <div class="convert-item">
            <span class="value-name-convert">Сумма вывода</span>

            <p>
                <?php echo $form->textField($model, 'summ'); ?>
            </p>
        </div>
        <div class="convert-item">
            <span class="value-name-convert">Тип счета</span>

            <p>
                <?php echo $form->dropDownList($model, 'type', array_merge(array('0' => 'Яндекс Деньги', '1' => 'QIWI', '2' => 'МТС', '3' => 'Билайн', '4' => 'Мегафон', 5=>'Payeer'))); ?>
            </p>
        </div>
        <div class="convert-item">
            <span class="value-name-convert">Номер счета/телефона</span>

            <p>
                <?php echo $form->textField($model, 'nomer_schet'); ?>
            </p>
        </div>


        <p class="btn-convert">
            <button class="btn" type="submit">Вывести</button>
        </p>


        <?php $this->endWidget(); ?>

        <br><br>


        <div class="kranshteyn_hr_100"></div>

        <br><br>

    </div>

</div>

<script>
    function showHideHow() {


        if( $('.how').is(':visible') )
        {
            $('.how').hide()
        }
        else
        {
            $('.how').show();
        }

    }
</script>