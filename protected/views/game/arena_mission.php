<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 22.10.2015
 * Time: 21:37
 */


?>

<div class="text_general">
    <h3>Добро пожаловать в арену!</h3>

</div>

<div class="kranshteyn_hr_100"></div>

<div class="content">

    <p class="text_general_100">

        Здесь вы можете выбрать игру или создать свою. Игра на арене предполагает участие нескольких игроков.
        Кадждый игрок выбирает стратегию поведения из 10 шагов, после присоединения всех игроков запускается матч. Игра
        разыгрывается пока один из участников не выиграет сражение. Если после 10 раундов игра не разыграна, деньги
        возвращаются всем игрокам. Подробную статистику вы сможете посмотреть после матча. Комиссия системы 20%.

    <div style="margin-top: 5px; float: left">
        <button class="btn" data-toggle="modal" data-target="#RulesArena">Правила игры</button>
        <a href="<?= $this->createUrl('game/addRoomArena') ?>" class="btn btn-danger">Создать битву</a>
    </div>
    <div style="margin-top: 5px; float: right;">
        <a href="<?= $this->createUrl('game/myFightsComplete') ?>" class="btn btn-success">Мои завершенные битвы (<?= $ship->getNewFightsArenaCount() ?>)</a>
        <a href="<?= $this->createUrl('game/HistpryFights') ?>" class="btn btn-info">История битв</a>
    </div>
    <div style="clear: both; height: 1px;"></div>

    </p>

    <div class="kranshteyn_hr_100"></div>


    <p class="text_general_100">
        Комнаты ожидающие игроков!
    </p>

    <table class="table table-bordered"
           style=" width: 900px; margin-left: auto; margin-right: auto;">

        <thead>
        <tr>
            <th>
                Создал битву
            </th>
            <th>
                Сумма ставки
            </th>
            <th>
                Количество игроков
            </th>
            <th>
                Сумма выйгрыша
            </th>
            <th>
                Валюта битвы
            </th>
            <th>
                Присоединиться
            </th>
        </tr>
        </thead>

        <tbody>


        <? foreach ($current_games as $game): ?>

            <? $ship_warior = $game->warior_ship[0]; ?>

            <tr style="color:#ffffff;">
                <td style="position: relative; width: 105px; height: 100px;">
                    <?= $ship_warior->name_ship; ?>

                    <? if (isset($ship_warior->gfx)): ?>
                        <img width="120" style="position: absolute; top:14px; left:0px;"
                             src="<?= $ship_warior->gfx; ?>">
                    <? endif; ?>

                    <? if ($ship_warior->gfx_speed != ''): ?>
                        <img width="120" style="position: absolute; top:14px; left:0px;"
                             src="<?= $ship_warior->gfx_speed; ?>">
                    <? endif; ?>

                    <? if ($ship_warior->gfx_power != ''): ?>
                        <img width="120" style="position: absolute; top:14px; left:0px;"
                             src="<?= $ship_warior->gfx_power; ?>">
                    <? endif; ?>

                    <? if ($ship_warior->gfx_defend != ''): ?>
                        <img width="120" style="position: absolute; top:14px; left:0px;"
                             src="<?= $ship_warior->gfx_defend; ?>">
                    <? endif; ?>

                </td>
                <td>

                    <?= $game->summ; ?> руб.
                </td>
                <td>
                    <?= $game->getCountPlayers() ?> / <?= $game->quantity ?>
                </td>
                <td>
                    <?= round($game->summ * $game->quantity * 0.8, 2) ?> руб.
                </td>
                <td>
                    <?= $game->getTypeMoney() ?>
                </td>
                <td>
                    <? if ($player->id == $ship_warior->id): ?>
                        <a class="btn disabled">Мой бой (ожидаем игроков)</a>
                    <? else: ?>
                        <a href="<?= $this->createUrl( 'game/joinRoom', array( 'id'=>$game->id ) )?>" id="room<?= $game->id ?>" class="btn btn-danger">Вступить в бой</a>
                    <? endif; ?>

                </td>

            </tr>

        <? endforeach; ?>


        </tbody>
    </table>


    <br>
    <br>

</div>

<? $this->widget("application.widgets.ModalRulesArena"); ?>



