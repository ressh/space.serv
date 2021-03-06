<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 18.10.2015
 * Time: 3:04
 */
?>


<div class="text_general">
    <h3>Магазин улучшений</h3>

</div>

<div class="kranshteyn_hr_100"></div>

<div class="content">

    <p class="text_general_100">
        Все деньги, которые вы потратите улучшения будут
        приносить вам <span class="bold_red"><?= Yii::app()->params['ships_settings'][$ship->type_ship]['persent'] ?>%</span> в месяц! Плюс, каждая вещь и каждое улучшение приносит вам дополнительные бонусы, читайте в описании к предмету!
        Вы можете продать свой корабль в любое время со всеми улучшениями за <span class="bold_red">80%</span> от суммы вклада.
    </p>

    <p class="text_info_person">
        <?= $items['character']['inform']; ?>
    </p>

    <div class="kranshteyn_hr_100"></div>

    <div>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">

            <? $i = 0;
            foreach ( $items['character']['types_shop'] as $key => $types): ?>


                <?
                // Установим первый ТАБ активным
                if ($i == 0) {
                    $active = 'active';
                    $i++;
                } else {
                    $active = '';
                    $i++;
                }
                ?>

                <li role="presentation" class="<?= $active ?>">
                    <a href="#<?= $key ?>" aria-controls="<?= $key ?>" role="tab" data-toggle="tab"><?= $types; ?></a>
                </li>


            <? endforeach; ?>

        </ul>

        <!-- Tab panes -->
        <div class="tab-content">

            <? $i = 0;
            foreach ($items['character']['types_shop'] as $key => $types): ?>

                <?
                // Установим первый ТАБ активным
                if ($i == 0) {
                    $active = 'in active';
                    $i++;
                } else {
                    $active = '';
                    $i++;
                }
                ?>

                <div role="tabpanel" class="tab-pane <?= $active ?>" id="<?= $key ?>">


                    <? $current_array = $items[$key]; ?>
                    <? foreach ($current_array as $item): ?>


                        <? // Проверяем если этот предмет куплен, прячем <= item id
                        if ($ship->getParamForKeyPrototype($key) < $item['id']): ?>

                            <div style="clear: both; height: 1px;"></div>

                            <div>

                                <? if ($ship->getParamForKeyPrototype($key) + 1 < $item['id']): ?>
                                    <img src='/images/close_item.png' class="container_item_close" align="left"
                                         hspace="10">
                                <? else: ?>
                                    <img src='<?= $item['gfx_ava'] ?>' class="container_item" align="left" hspace="10">
                                <? endif; ?>

                                <? if ($ship->getParamForKeyPrototype($key) + 1 < $item['id']): ?>
                                    <div style="margin: 10px; font-size: 21px; font-weight: bold;"> <?= $item['title'] ?></div>
                                    <div style="margin: 10px; font-size: 14px; "> Чтобы получить доступ к этому
                                        предмету, купите предыдущий!
                                    </div>
                                <? else: ?>
                                    <div
                                        style="margin: 10px; font-size: 21px; font-weight: bold;"> <?= $item['title'] ?> </div>
                                    <div style="margin: 10px; font-size: 14px; "> <?= $item['decription'] ?> </div>
                                    <div style="margin: 10px; font-size: 14px; "> Цена: <span class="bold_red"><?= $item['summ'] ?></span> руб.</div>
                                <? endif; ?>

                                <? if ($ship->getParamForKeyPrototype($key) + 1 < $item['id']): ?>
                                <? else: ?>
                                    <? if ($player->getSummBuy() >= $item['summ']) : ?>
                                        <p>
                                            <a href="<?= $this->createUrl('game/upgrade', array('type' => $key )); ?>"
                                               class="btn btn-success btn-lg btn_buy">Улучшить</a>
                                        </p>
                                    <? else: ?>

                                        <?
                                        $summ_need = $item['summ'] - $player->getSummBuy();
                                        ?>

                                        <p>
                                            <a class="btn btn-lg disabled">Купить</a>
                                            <a class="btn btn-info"
                                               href="<?= $this->createUrl('player/addPay', array('summ_need' => $summ_need)) ?>">Недостаточно
                                                денег, пополнить на <?= $summ_need ?></a>
                                        </p>

                                    <? endif; ?>
                                <? endif; ?>

                            </div>
                            <br>

                        <? endif; ?>

                    <? endforeach; ?>


                </div>

            <? endforeach; ?>

        </div>

    </div>


    <br>
    <br>


    <div class="kranshteyn_hr_100"></div>

