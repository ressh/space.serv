<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 10.10.2015
 * Time: 21:29
 */

?>

<? if( $player->activate_email == Player::$NO_ACTIVE ): ?>

<div class="info" style="background:#CE413D; padding-left: 5px;" >Подтвердите свой Email, перейдите по ссылке из письма. Если письмо не пришло, проверьте папку спам!</p></div>

<? endif; ?>

<div class="window_my_ship">
    <img class="window_img" src="/images/window.png">
    <img class="krepezh_img" src="/images/krepesh.png">

    <div class="kranshteyn"></div>

    <? if ($ship == null): ?>
        <div class="btn_buy_ship">
            <a href="<?= Yii::app()->createUrl('player/addship') ?>" class="btn btn-lg btn-success">Купить корабль</a>
        </div>
        <img class="ship_image" src="/images/noShip.png">

    <? else: ?>

        <div class="name_ship"><?= $ship->name_ship ?></div>

        <div class="btn_sell_ship">
            <a data-toggle="modal" data-target="#Sellship" class="btn btn-lg btn-default">Продать
                корабль</a>
        </div>

        <div class="fuel_indicator">
            <div class="progress">
                <div class="progress-bar progress-bar-danger" role="progressbar"
                     aria-valuenow="<?= $ship->getFuelPersent(); ?>" aria-valuemin="0"
                     aria-valuemax="100" style="width: <?= $ship->getFuelPersent(); ?>%">
                    <span class="sr-only">Топливо  <?= $ship->getFuelPersent(); ?>%</span>
                </div>
            </div>
        </div>

        <div class="fuel_hours_info">Вместительность бака: <?= $ship->getHoursToFuel(); ?> ч. полета</div>
        <div class="chance_2x_info">Шанс получить двойную прибыль: <?= $ship->getChance2x(); ?>%</div>


        <div class="btn_buy_ship">

            <a href="<?= Yii::app()->createUrl('game/magazine') ?>" class="btn btn-lg btn-info">Магазин</a>

            <? if ($ship->type_ship == 'worker'): ?>
                <a class="btn btn-lg disabled" data-toggle="tooltip" title="Миссии у добытчика не доступны!">Мои
                    миссии</a>
            <? else: ?>
                <a class="btn btn-lg disabled" data-toggle="tooltip">Мои миссии</a>
            <? endif; ?>

            <a href="<?= Yii::app()->createUrl('player/DifferenceFuel') ?>" class="btn btn-lg btn-success">Собрать
                кассу <?= $ship->getMoneyWorkTodey() ?>  / Заправиться</a>

        </div>

        <? $this->widget("application.widgets.shipGfx", array('ship' => $ship)); ?>



    <? endif; ?>
</div>

<div class="text_my_ship">
    <? if ($player->role == 'partner'): ?>
        <h3>Мой корабль | <span class="gold_text">ПАРТНЕР</span></h3>
    <? else: ?>
        <h3>Мой корабль </h3>
    <? endif; ?>


    <? if ($ship != null): ?>
        <p>
            Прогнозируемый доход: <span class="bold_red"><?= $ship->getMoneyPrognozMonth(); ?> руб/мес. </span> | <span
                class="bold_red"><?= $ship->getMoneyPrognozDay(); ?> руб/день </span>
        </p>
    <? else: ?>
        <p>
            Чтобы начать зарабатывать, купите корабль!
        </p>
    <? endif; ?>

    <table class="table table-bordered">
        <tbody>
        <tr>
            <td>Инвест</td>
            <td style="background: #085771;"><?= $statistic->invest_summ ?> руб.</td>
            <td>Вывод</td>
            <td style="background: #08715c;"><?= $statistic->out_sum ?> руб.</td>
        </tr>
        <tr>
            <td>Баланс для покупок</td>
            <td><?= $player->getSummBuy() ?> руб.</td>
            <td><a href="<?= $this->createUrl('player/addPay') ?>" class="btn btn-success">Пополнить</a></td>
            <td><a href="<?= $this->createUrl('player/GetHistoryBays') ?>" class="btn btn-info">История</a></td>
        </tr>
        <tr>
            <td>Вывод<br>
                <small>Обменять для покупок + 10%</small>
            </td>
            <td><?= $player->getSummExit() ?> руб.</td>
            <td><a href="<?= $this->createUrl('player/OutSumm') ?>" class="btn btn-info">Вывести</a></td>
            <td><a href="<?= $this->createUrl('player/ChangeOutSummToBuy') ?>" class="btn btn-success">Обменять +10%</a>
            </td>
        </tr>
        </tbody>
    </table>

    <? if ($player->role == 'partner'): ?>
        <table class="table table-bordered">
            <tbody>
            <tr>
                <td><span><span
                            class="gold_text">Вы партнер!</span><br><small><?= Yii::app()->params['referals']['partner_persent'] ?>
                        % поступлений от ваших рефералов переходят вам сразу на вывод и на доступный баланс! Ваша ссылка</small> </span>
                    <code><?= Yii::app()->getBaseUrl(true) ?>/?ref=<?= $player->id ?></code>
                    <small>Используйте <a href="https://goo.gl/">goo.gl</a> для защиты вашей ссылки!</small>
                </td>
                <td><?= $statistic->referals ?></td>
                <td>
                    <a href="<?= $this->createUrl('player/OpenReferalsInfo') ?>"
                       class="btn btn-danger">Подробнее</a><br><br>
                    <a href="<?= $this->createUrl('player/MyReferals') ?>" class="btn btn-info">Мои рефералы</a>
                </td>
            </tr>
            </tbody>
        </table>
    <? else: ?>
        <table class="table table-bordered">
            <tbody>
            <tr>
                <td>Рефералы<br>
                    <small>До 25% на баланс для покупок и до 40% на баланс вывода!</small>
                    <small>Ваша реферальная ссылка</small>
                    <code><?= Yii::app()->getBaseUrl(true) ?>/?ref=<?= $player->id ?></code>
                    <small>Используйте <a href="https://goo.gl/">goo.gl</a> для защиты вашей ссылки!</small>
                </td>
                <td><?= $statistic->referals ?></td>
                <td>
                    <a href="<?= $this->createUrl('player/OpenReferalsInfo') ?>"
                       class="btn btn-danger">Подробнее</a><br><br>
                    <a href="<?= $this->createUrl('player/MyReferals') ?>" class="btn btn-info">Мои рефералы</a>
                </td>
            </tr>
            </tbody>
        </table>
    <? endif; ?>



    <br><br>
</div>


<? $this->widget("application.widgets.ModalshipSell", array('ship' => $ship)); ?>


<? if (isset($_GET['isBonuce'])): ?>
    <? $this->widget("application.widgets.Modal2xMoneyToday", array('isBonuce' => $_GET['isBonuce'])); ?>
<? endif; ?>
