<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 11.10.2015
 * Time: 1:14
 */
?>


<div class="content">
    <h3>Пополнить счет</h3>


    <?php $form = $this->beginWidget('CActiveForm', array(
        'id' => 'pay-form',
        'enableAjaxValidation' => false,
        'action' => Yii::app()->createUrl('billing/index'),
        'htmlOptions' => array('class' => 'converter-form'),
    )); ?>

    <div class="convert-item">


        <div class="convert-item">
            <span class="value-name-convert">Сумма пополнения</span>

            <p>
                <? if (isset($_GET['summ_need'])): ?>
                    <?php echo $form->textField($model, 'summ', array('value' => $_GET['summ_need'])); ?>
                <? else: ?>
                    <?php echo $form->textField($model, 'summ'); ?>
                <? endif; ?>
            </p>
        </div>

        <div class="convert-item">
            <span class="value-name-convert">Способ</span>
            <p>
             <?php echo $form->dropDownList($model,'type_pay', array("1" => "Payeer", "2" => "Robokassa")); ?>
            </p>
        </div>

        <p class="btn-convert">
            <button class="btn" type="submit">Купить</button>
        </p>


        <?php $this->endWidget(); ?>


        <div class="kranshteyn_hr_100"></div>

        <br><br>

        <table>
            <tr>
                <td style="vertical-align:top">

                    <p class="wrap-pay-img"><img width="306" src="/images/payeer.png" alt=""></p>

                </td>
               <td>
                   <p><b>PAYEER переводы</b> - Международные-онлайн переводы PAYEER по Всему миру за 0% с отправителя.</p>
               </td>
            </tr>
            <tr>
                <td>

                    <p class="wrap-pay-img"><img width="306" src="/images/robokassa2_oyslrj.png" alt=""></p>

                </td>
                <td>
                <p><b>Робокасса</b> - это сервис, позволяющий принимать платежи от клиентов с помощью банковских карт, в
                        любой Электронной валюте, платежи
                    через интернет-банк ведущих Банков РФ, платежи через банкоматы, через терминалы мгновенной оплаты, а
                    также с помощью приложения iPhone.</p>
                </td>
            </tr>
        </table>


        <br><br>

    </div>

