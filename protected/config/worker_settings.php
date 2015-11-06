<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 13.10.2015
 * Time: 2:04
 */
return array(

    /**
     * Настройки добытчика, пока что прокачиваются две характеристики
     * 1) summ - Сумма, влияющаяя на вывод из игры
     * 2) 2x - Шанс собрать 2х прибыли в процентах
     */
    'params' => array(


        'worker' => array(

            'character' => array(
                'inform' => 'Играя добытчиком, вы не воюете с соперниками, не используете оружие для атак, защиту и артефакты. Добытчики используют только лазеры и двигатели для добычи ископаемых.',
                'types_shop' => array(
                    'guns' => 'Оружие',
                    'engine' => 'Двигатели'
                )
            ),


            'guns' => array(


                1 => array(

                    'id' => 1,
                    '2x' => 1,
                    'summ' => 20,

                    'gfx_ship' => '/images/items/worker/guns/1.png',
                    'gfx_ava' => '/images/items/worker/guns/avatar/1.png',

                    'title' => 'Крошкодробитель',
                    'decription' => 'Предназначен для дробления мелких камушков возле астеройдных поясов, есть шанс получить <span class="bold_red">2х</span> прибыль - <span class="bold_red">1%</span> '


                ),

                2 => array(

                    'id' => 2,
                    '2x' => 3,
                    'summ' => 35,

                    'gfx_ship' => '/images/items/worker/guns/2.png',
                    'gfx_ava' => '/images/items/worker/guns/avatar/2.png',

                    'title' => 'Гроза булыжников',
                    'decription' => ' С легкостью уничтожает булыжники и камушки средних размеров, иногда вышибает ценные металы и другие полесзные вещества! Шанс на получение двойной прибыли <span class="bold_red">3%</span> '


                ),

                3 => array(

                    'id' => 3,
                    '2x' => 5,
                    'summ' => 50,

                    'gfx_ship' => '/images/items/worker/guns/3.png',
                    'gfx_ava' => '/images/items/worker/guns/avatar/3.png',

                    'title' => 'Выжигатель',
                    'decription' => 'Может прожигать дырки в небольших метеоритах, способен приносить дополнительные ископаемые, что соответсвтенно увеличивает дневную выручку. Шанс на получение двойной прибыли <span class="bold_red">5%</span> '

                ),

                4 => array(

                    'id' => 4,
                    '2x' => 7,
                    'summ' => 85,

                    'gfx_ship' => '/images/items/worker/guns/4.png',
                    'gfx_ava' => '/images/items/worker/guns/avatar/4.png',

                    'title' => 'Прямоток',
                    'decription' => 'Легко справляется с булыжниками и метеоритами любых размеров, приносит обладателю стабильный шанс 7% увеличить чистую прибыль в течении дня! Шанс на получение двойной прибыли <span class="bold_red">7%</span>'

                ),

                5 => array(

                    'id' => 5,
                    '2x' => 10,
                    'summ' => 110,

                    'gfx_ship' => '/images/items/worker/guns/5.png',
                    'gfx_ava' => '/images/items/worker/guns/avatar/5.png',

                    'title' => 'Стандарт',
                    'decription' => 'Разработанный военными специалистами еще в далеком 2105 году, зарекомендовавший себя и посей день, стандартный лазер для добычи ископаемых в космосе. Шанс на получение двойной прибыли <span class="bold_red">10%</span>'


                ),

                6 => array(

                    'id' => 6,
                    '2x' => 15,
                    'summ' => 160,

                    'gfx_ship' => '/images/items/worker/guns/6.png',
                    'gfx_ava' => '/images/items/worker/guns/avatar/6.png',

                    'title' => 'Модифицированный',
                    'decription' => 'Это модификация стандартного лазера, используется в особых операциях, когда важны любые виды полезных ископаемыхю. Аккуратно извлекает добычу! Шанс на получение двойной прибыли <span class="bold_red">15%</span>'


                ),

                7 => array(

                    'id' => 7,
                    '2x' => 21,
                    'summ' => 190,

                    'gfx_ship' => '/images/items/worker/guns/7.png',
                    'gfx_ava' => '/images/items/worker/guns/avatar/7.png',

                    'title' => 'Прогресс-2120',
                    'decription' => 'Мечта всех Добытчиков космоса, легкий практичный, практически каждую неделю радует добытчиков дополнительными бонусами! Шанс на получение двойной прибыли <span class="bold_red">21%</span>'


                ),

                8 => array(

                    'id' => 8,
                    '2x' => 25,
                    'summ' => 240,

                    'gfx_ship' => '/images/items/worker/guns/8.png',
                    'gfx_ava' => '/images/items/worker/guns/avatar/8.png',

                    'title' => 'Крошитель астеройдов',
                    'decription' => 'Метеориты и булыжники это бесполезная трата времени, так считают обладатели "Крошителя астеройдов", они знают толк в своей работе! Шанс на получение двойной прибыли <span class="bold_red">25%</span>'


                ),

                9 => array(

                    'id' => 9,
                    '2x' => 33,
                    'summ' => 290,

                    'gfx_ship' => '/images/items/worker/guns/9.png',
                    'gfx_ava' => '/images/items/worker/guns/avatar/9.png',

                    'title' => 'Хирург - 2170',
                    'decription' => 'Новейшая модель лазера, извлекает ископаемые настолько точно, что его в народе прозвали "Хирург". Бонусы почти каждый день! Шанс на получение двойной прибыли <span class="bold_red">33%</span>'


                ),

                10 => array(

                    'id' => 10,
                    '2x' => 50,
                    'summ' => 380,

                    'gfx_ship' => '/images/items/worker/guns/10.png',
                    'gfx_ava' => '/images/items/worker/guns/avatar/10.png',

                    'title' => 'Аннигилятор',
                    'decription' => 'Те кто видел работу Аннигилятора в действии говорят, что до сих пор не могут придти в себя от увиденного! Он испепеляет все вокруг оставляя только самые ценные и нужные ископаемые! Шанс на получение двойной прибыли <span class="bold_red">50%</span>'


                ),


            ),

            'engine' => array(


                1 => array(

                    'id' => 1,
                    'time_speed' => 7200,
                    'summ' => 28,

                    'gfx_ship' => '/images/items/worker/engines/1.png',
                    'gfx_ava' => '/images/items/worker/engines/avatar/1.png',

                    'title' => 'Ускоритель',
                    'decription' => 'Обладает улучшенным запасом топлива и проходимостью! Повышает потенциал ускорения. Вместительность бака <span class="bold_red">14 часов полета</span>'


                ),

                2 => array(

                    'id' => 2,
                    'time_speed' => 10800,
                    'summ' => 55,

                    'gfx_ship' => '/images/items/worker/engines/2.png',
                    'gfx_ava' => '/images/items/worker/engines/avatar/2.png',

                    'title' => 'Автономный',
                    'decription' => ' Легок в установке и обслуживании. Для тех кто любит исследовать и покорять уголки космоса! Вместительность бака <span class="bold_red">15 часов полета</span>'


                ),

                3 => array(

                    'id' => 3,
                    'time_speed' => 18000,
                    'summ' => 95,

                    'gfx_ship' => '/images/items/worker/engines/3.png',
                    'gfx_ava' => '/images/items/worker/engines/avatar/3.png',

                    'title' => 'Яростный добытчик',
                    'decription' => ' Устанавливается в специальном сервисе, помогает сделать корабль автономным на долгое время! Вместительность бака <span class="bold_red">17 часов полета</span>'


                ),

                4 => array(

                    'id' => 4,
                    'time_speed' => 93600,
                    'summ' => 155,

                    'gfx_ship' => '/images/items/worker/engines/4.png',
                    'gfx_ava' => '/images/items/worker/engines/avatar/4.png',

                    'title' => 'Грвавитариус',
                    'decription' => ' Если вы хотите полной автономми, чтобы корабль работал в любое время и требовал заправки раз в 2 суток, то улучшайтесь до этого двигателя смело! Вместительность бака <span class="bold_red">38 часов полета</span>'


                ),

            )


        ),


    )
);