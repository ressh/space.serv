<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 22.10.2015
 * Time: 3:32
 */

?>

<div class="text_general">
    <h3>Топ игроков</h3>

</div>

<div class="kranshteyn_hr_100"></div>

<div class="content">

    <p class="text_general_100">
       Лучшие игроки в категориях "Пират", "Воин", "Торговец", "Добытчик"
    </p>

    <div class="kranshteyn_hr_100"></div>



    <? foreach ($types as $key=>$ships): ?>


        <div style="float: left; margin-left: 10px; margin-top: 30px;">

            <div style="font-size: 16px; font-weight: bold;"><?= $key ?></div>

            <table class="table table-bordered"
                   style=" width: 220px; margin-left: auto; margin-right: auto;">
                <tbody>

                <? foreach ($ships as $ship): ?>



                    <tr style="color:#ffffff;">
                        <td style="position: relative; width: 105px; height: 100px;">
                            <?= $ship->name_ship; ?>

                            <? if (isset($ship->gfx)): ?>
                                <img width="120" style="position: absolute; top:14px; left:0px;"
                                     src="<?= $ship->gfx; ?>">
                            <? endif; ?>

                            <? if ($ship->gfx_speed != ''): ?>
                                <img width="120" style="position: absolute; top:14px; left:0px;"
                                     src="<?= $ship->gfx_speed; ?>">
                            <? endif; ?>

                            <? if ($ship->gfx_power != ''): ?>
                                <img width="120" style="position: absolute; top:14px; left:0px;"
                                     src="<?= $ship->gfx_power; ?>">
                            <? endif; ?>

                            <? if ($ship->gfx_defend != ''): ?>
                                <img width="120" style="position: absolute; top:14px; left:0px;"
                                     src="<?= $ship->gfx_defend; ?>">
                            <? endif; ?>

                        </td>
                        <td>
                            Очки: <br>
                            <?= $ship->summ; ?>
                        </td>

                    </tr>

                <? endforeach; ?>


                </tbody>
            </table>

        </div>

    <? endforeach; ?>

    <div style="clear: both; height: 1px;"></div>