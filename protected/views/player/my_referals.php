<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 11.10.2015
 * Time: 2:07
 */
?>

<div class="text_general">
    <h3>Мои рефералы</h3>

</div>

<div class="kranshteyn_hr_100"></div>

<div class="content">

    <table class="table table-bordered">
        <thead>
        <tr>
            <td>Ид игрока</td>
            <td>Время регистрации</td>
            <td>Статус</td>
        </tr>
        </thead>
        <tbody>

        <? foreach ( $referals as $referal) : ?>

            <tr>
                <td><?= $referal->id_referal ?></td>
                <td><?= date("H:i:s d-m-Y", $referal->time);  ?></td>
                <td><?= $referal->getStatus(); ?></td>
            </tr>

        <? endforeach; ?>
        </tbody>
    </table>

    <? $this->widget('CLinkPager', array(
        'pages' => $pages,
    )) ?>

</div>