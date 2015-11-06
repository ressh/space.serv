<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 11.10.2015
 * Time: 2:07
 */
?>

<div class="text_general">
    <h3>История пополнений</h3>

</div>

<div class="kranshteyn_hr_100"></div>

<div class="content">

    <table class="table table-bordered">
        <thead>
        <tr>
            <td>Сумма</td>
            <td>Время</td>
            <td>Статус</td>
        </tr>
        </thead>
        <tbody>

            <? foreach ( $pays as $pay) : ?>

            <tr>
                <td><?= $pay->summ ?></td>
                <td><?= $pay->time ?></td>
                <td><?= $pay->status ?></td>
            </tr>

            <? endforeach; ?>
        </tbody>
    </table>

   </div>