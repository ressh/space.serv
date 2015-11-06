<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 14.10.2015
 * Time: 1:05
 */

?>

<div class="text_general">
    <h3>Рефералы</h3>

</div>

<div class="kranshteyn_hr_100"></div>

<div class="content">

    <? if ($player->role != "partner"): ?>

    <p>
        Вы можете заработать приличную сумму денег, приглашая рефералов и получая проценты от их начислений! <br>
        Как только приглашенный по вашей ссылке ( <code><?= Yii::app()->getBaseUrl(true) ?>
            /?ref=<?= $player->id ?></code> ) человек внес в игру средства, он становится вашим рефералом. <br>
        Наша активная реферальная программа включает в себя 22 шага! <br><br>

    <div class="kranshteyn_hr_100"></div>
    <br>
        Ваши текущие характеристики реферальных отчислений:<br>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Количество рефералов</th>
            <th>Процент на игровой счет</th>
            <th>Процент на баланс вывода</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?= $statistic->referals; ?><br>
            <td><?= $statistic->getCurrentReferalsPersentSummBuy() ?><br>
            <td><?= $statistic->getCurrentReferalsPersentLimitBuy() ?><br>
        </tr>

        </tbody>
    </table>
    <br>


    <img width="30" src="/images/gold.png"> Следующий шаг - приглашая дополнительных игроков, вы получите более интересные условия партнерской программы! <br>


    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Требуется рефералов</th>
            <th>Процент на игровой счет</th>
            <th>Процент на баланс вывода</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td style="background: #00759C;"><?= $statistic->getCurrentReferalsCountNext(); ?><br>
            <td><?= $statistic->getCurrentReferalsPersentSummBuyNext() ?><br>
            <td><?= $statistic->getCurrentReferalsPersentLimitBuyNext() ?><br>
        </tr>

        </tbody>
    </table> <br>

    </p>

    <? else: ?>

        <p>
            У вас включена <span class="bold_red">партнерская программа</span> - это значит, что вы в нашей системе по
            <span class="bold_red">приглашению администрации</span>
            <br><br>
            Партнерская программа дает вам <span class="bold_red">исключительные преимущсетсва</span> перед остальными
            игроками: <br>

            1) Вы получаете <?= Yii::app()->params['referals']['partner_persent'] ?>% от всех пополнений вашими рефералами, которые вы срзу можете выводить на свой кошелек<br>
            2) Вы можете играть в игру, обменивая свой доход на игровую валюту с преимуществом +10%<br>
            3) Ваши заявки в техподдержку обслуживаются вне очереди<br>

            <br><br>

            Добро пожаловать в нашу игру. Давайте сотрудничать и получать стабильный доход!

        </p>


        <div class="kranshteyn_hr_100"></div>

    <? endif; ?>

    <div class="text_general">
        <h3>Используйте баннеры!</h3>
    </div>

    <div class="kranshteyn_hr_100"></div>

    <p style="padding-top: 10px;">
        Если у вас есть страница в интернете или свой сайт, вы можете использовать баннеры для привлечения ваших
        рефералов! <br>
        <span style="color:#ff0000;">Внимание!</span> За рассылку почтового спама будет осуществляться блокировка
        аккаунта!
    </p>

    <div class="kranshteyn_hr_100"></div>
    <p style="padding-top: 10px;">
        Баннер 468Х60, размер 77кб <br>

        <img style="padding: 10px;" src="/images/space_ref/info.gif">

        <br>

        <code>
            &lt;a href="<?= Yii::app()->getBaseUrl(true) ?>/?ref=<?= $player->id ?>"&gt;
            &lt;img src="<?= Yii::app()->getBaseUrl(true) ?>/images/space_ref/info.gif"&gt;
            &lt;/a&gt;
        </code>
    </p>

    <div class="kranshteyn_hr_100"></div>
    <p style="padding-top: 10px;">
        Баннер 728Х90, размер 190кб <br>

        <img style="padding: 10px;" src="/images/space_ref/mat.gif">

        <br>

        <code>
            &lt;a href="<?= Yii::app()->getBaseUrl(true) ?>/?ref=<?= $player->id ?>"&gt;
            &lt;img src="<?= Yii::app()->getBaseUrl(true) ?>/images/space_ref/mat.gif"&gt;
            &lt;/a&gt;
        </code>
    </p>

    <div class="kranshteyn_hr_100"></div>
    <p style="padding-top: 10px;">
        Баннер 240X400, размер 73кб <br>

        <img style="padding: 10px;" src="/images/space_ref/mat2.gif">

        <br>

        <code>
            &lt;a href="<?= Yii::app()->getBaseUrl(true) ?>/?ref=<?= $player->id ?>"&gt;
            &lt;img src="<?= Yii::app()->getBaseUrl(true) ?>/images/space_ref/mat2.gif"&gt;
            &lt;/a&gt;
        </code>
    </p>

    <div class="kranshteyn_hr_100"></div>
    <p style="padding-top: 10px;">
        Баннер 100X100, размер 7.8кб <br>

        <img style="padding: 10px;" src="/images/space_ref/mat3.gif">

        <br>

        <code>
            &lt;a href="<?= Yii::app()->getBaseUrl(true) ?>/?ref=<?= $player->id ?>"&gt;
            &lt;img src="<?= Yii::app()->getBaseUrl(true) ?>/images/space_ref/mat3.gif"&gt;
            &lt;/a&gt;
        </code>
    </p>

    <div class="kranshteyn_hr_100"></div>

    <br><br><br>

</div>