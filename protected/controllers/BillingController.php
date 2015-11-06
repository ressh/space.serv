<?php

class BillingController extends Controller
{

    /*
        Всё начинается здесь. Заводим в базе запись с новым выставленным счетом,
        и передаем компоненту его ID, сумму, краткое описание и опционально e-mail пользователя.
        Можно не выносить эти данные в отдельную модель, а использовать атрибуты оформленного
        пользователем заказа (для интернет-магазинов).
    */
    public function actionIndex()
    {
        Yii::app()->request->enableCsrfValidation = false;

        if (isset($_POST['Pays'])) {
            $player = Player::model()->findByAttributes(array('email' => Yii::app()->user->id));

            $payForm = new Pays();
            $payForm->attributes = $_POST['Pays'];
            $payForm->id_player = $player->id;

            if( $payForm->type_pay == 1 )
            {
            if ($payForm->save()) {
                Yii::app()->payeer->pay(
                    $payForm->summ,
                    $payForm->id,
                    "Покупка игровой валюты",
                    $player->email
                );
            }
        }
            else {

            if ($payForm->save()) {
                Yii::app()->robokassa->pay(
                    $payForm->summ,
                    $payForm->id,
                    "Покупка игровой валюты",
                    $player->email
                );
            }
        }
        }

    }


    public function actionResultPayeer()
    {

        if ($_SERVER['REMOTE_ADDR'] != '37.59.221.230') return;


        if (isset($_POST['m_operation_id']) && isset($_POST['m_sign'])) {


            $m_key = 'putin_putin_777';
            $arHash = array($_POST['m_operation_id'],
                $_POST['m_operation_ps'],
                $_POST['m_operation_date'],
                $_POST['m_operation_pay_date'],
                $_POST['m_shop'],
                $_POST['m_orderid'],
                $_POST['m_amount'],
                $_POST['m_curr'],
                $_POST['m_desc'],
                $_POST['m_status'],
                $m_key);
            $sign_hash = strtoupper(hash('sha256', implode(':', $arHash)));


            if ($_POST['m_sign'] == $sign_hash && $_POST['m_status'] == 'success') {

            // Запишем в модель оплаты что оплата прошла
                $payForm = Pays::model()->findByPk($_POST['m_orderid']);
            $payForm->status = 'succes';
                $payForm->update( array( 'status' ) );


            // получим пользователя из модели оплаты
            $player = Player::model()->findByPk($payForm->id_player);

            // Прибавим в статистике пользователя параметр инвестиции
            $statistic = Statistic::model()->findByAttributes(array('id_player' => $player->id));
            $statistic->invest_summ += $payForm->summ;
            $statistic->save();

            // Добавим пользователю сумму на счет оплаты !!!*1000!!!
            $player->setSummBuyPlus($payForm->summ);

            // Увеличим лемит вывода
            $current_summ_limit = $payForm->summ * 0.4;
            $player->setSummLimitPlus($current_summ_limit);

            // Получить реферала, если есть(?)
            $referal = Referals::model()->findByAttributes(array('id_referal' => $player->id));

            if ($referal != null) {

                // Получить пригласившего
                $parent_referal = Player::model()->findByAttributes(array('id' => $referal->id_player));

                // Получить статистику пригласившего и записать в базу
                $statistic_referal = Statistic::model()->findByAttributes(array('id_player' => $parent_referal->id));

                // Если еще не оплачивал, отметить что оплатил, добавить реферала в сумму рефералов прегласившего
                if ($referal->is_active == 0) {
                    $referal->is_active = 1;
                        $statistic_referal->referals += 1;

                        $statistic_referal->update( array( 'referals' ) );
                        $referal->update( array( 'is_active' ) );
                }

                $summ_pay = $payForm->summ;
                $parent_referal->setReferalBonuses($summ_pay, $statistic_referal);

            }

                echo $_POST['m_orderid'].'|success';
                exit;


            }

            echo $_POST['m_orderid'].'|error';
        }

        echo $_POST['m_orderid'].'|error';

    }


    /*
        К этому методу обращается робокасса после завершения интерактива с пользователем.
        Это может произойти мгновенно либо в течение нескольких минут.
        Здесь следует отметить счет как оплаченный либо обработать отказ от оплаты.
    */
    public function actionResult()
    {

        $rc = Yii::app()->robokassa;

        // Коллбэк для события "оплата произведена"
        $rc->onSuccess = function ($event) {

            // Запишем в модель оплаты что оплата прошла
            $payForm = Yii::app()->robokassa->params['order'];
            $payForm->status = 'succes';
            $payForm->save();


            // получим пользователя из модели оплаты
            $player = Player::model()->findByPk( $payForm->id_player );

            // Прибавим в статистике пользователя параметр инвестиции
            $statistic = Statistic::model()->findByAttributes( array( 'id_player'=>$player->id ) );
            $statistic->invest_summ += $payForm->summ;
            $statistic->save();

            // Добавим пользователю сумму на счет оплаты !!!*1000!!!
            $player->setSummBuyPlus($payForm->summ);

            // Увеличим лемит вывода
            $current_summ_limit = $payForm->summ * 0.4;
            $player->setSummLimitPlus( $current_summ_limit );

            // Получить реферала, если есть(?)
            $referal = Referals::model()->findByAttributes( array( 'id_referal'=>$player->id ) );

            if ($referal != null) {

                // Получить пригласившего
                $parent_referal = Player::model()->findByAttributes( array( 'id' => $referal->id_player ) );

                // Получить статистику пригласившего и записать в базу
                $statistic_referal = Statistic::model()->findByAttributes( array( 'id_player'=>$parent_referal->id ) );

                // Если еще не оплачивал, отметить что оплатил, добавить реферала в сумму рефералов прегласившего
                if( $referal->is_active == 0 ) {
                    $referal->is_active = 1;

                    $statistic_referal->referals += 1;
                }

                $summ_pay = $payForm->summ;
                $parent_referal->setReferalBonuses( $summ_pay, $statistic_referal );

            }


        };

        // Коллбэк для события "отказ от оплаты"
        $rc->onFail = function($event){

            $InvId = Yii::app()->request->getParam('InvId');

            $payForm =Pays::model()->findByAttributes(array('id'=>$InvId));

            if( $payForm != null ) {

                $payForm->status = 'fail';
                $payForm->save();
            }

        };

        // Обработка ответа робокассы
        $rc->result();

    }

    /*
        Сюда из робокассы редиректится пользователь в случае отказа от оплаты счета.
    */
    public function actionFailure()
    {
        $this->render('/player/Myship');
    }

    /*
        Сюда из робокассы редиректится пользователь в случае успешного проведения платежа.
        Обратите внимание, что на этот момент робокасса возможно еще не обратилась к методу actionResult()
        и нам неизвестно, поступили средства на счет или нет.
    */
    public function actionSuccess()
    {

        $this->redirect( $this->createUrl('/player/Myship', array( "isResult"=>"0" )) );

    }


} 