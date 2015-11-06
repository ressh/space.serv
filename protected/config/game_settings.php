<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 13.10.2015
 * Time: 2:04
 */
return array(

    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params'=>array(

        'first_time_fuel_need_sec' => 43200,

        ////////////////////////////////////////////////////////////////////////

        'referals' => array(

            'counts' => array( 0, 5, 20, 45, 80, 105, 150, 205, 240, 285, 360, 650, 900, 1075, 1280, 1405, 1900, 2095, 2500, 3000, 3500, 4000 ),
            'summ' => array( 7, 7.5, 8, 8.5, 9, 9.5, 10, 10.5, 11, 11.5, 12, 12.5, 13, 13.5, 14, 14.5, 15, 17, 19, 21, 23, 25 ),
            'summ_limit' => array( 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 37, 40 ),
            'partner_persent' => 20,

        ),

        'ships_settings' => array(

            'worker'=>array(

                'id'=>3,
                'type'=> 'worker',
                'name'=> 'Добытчик',
                'info' => '- это тестовый корабль, чтобы познакомиться с игрой и убедиться в отсутствии риска!',
                'icon' => '<img src="/images/worker.png" width="45">',
                'summ'=> 45,
                'persent' => 25,
                'persent_summ'=>11.5,

                'missions' => 'нет',
                'missions_money' => 'до <span class="bold_red">37,5%</span> и до <span class="bold_red">743 руб./мес.</span>',
                'endgines_info' => 'ограниченный',
                'guns_info' => 'специализированный',
                'defend_info' => 'отсутствует',
                'arttefacts_info' => 'отсутствует',

            ),

            'seller'=>array(

                'id'=>0,
                'type'=> 'seller',
                'name'=> 'Торговец',
                'info' => '- это самый стандартный и стабильный персонаж в игре.',
                'icon' => '<img src="/images/seller.png" width="45">',
                'summ'=> 490,
                'persent' => 30,
                'persent_summ'=>147,

                'missions' => 'есть',
                'missions_money' => 'до <span class="bold_red">40%</span> и до <span class="bold_red">2088  руб./мес.</span>',
                'endgines_info' => 'ограниченно',
                'guns_info' => 'ограничено',
                'defend_info' => 'отсутствует',
                'arttefacts_info' => 'отсутствует',

            ),
            'killer'=>array(

                'id'=>1,
                'type'=> 'killer',
                'name'=> 'Воин',
                'info' => ' - защищает торговцев, выполняет правительственные и военные миссии.',
                'icon' => '<img src="/images/killer.png" width="45">',
                'summ'=> 990,
                'persent' => 32,
                'persent_summ'=>316,

                'missions_money' => 'до <span class="bold_red">42%</span> и до <span class="bold_red">7000 руб./мес.</span>',
                'missions' => 'есть',
                'endgines_info' => 'полный',
                'guns_info' => 'полный',
                'defend_info' => 'полный',
                'arttefacts_info' => 'ограниченно',


            ),
            'pirat'=>array(

                'id'=>2,
                'type'=> 'pirat',
                'name'=> 'Пират',
                'info'=> '- это не профессия, это жизнь полная риска и легких денег!',
                'icon' => '<img src="/images/pirat.png" width="45">',
                'summ'=> 2990,
                'persent' => 34,
                'persent_summ'=>1016,

                'missions_money' => 'до <span class="bold_red">47%</span> и до <span class="bold_red">70256 руб./мес.</span>',
                'missions' => 'есть',
                'endgines_info' => 'полный',
                'guns_info' => 'полный',
                'defend_info' => 'полный',
                'arttefacts_info' => 'полный',

            ),



        )



    )

);