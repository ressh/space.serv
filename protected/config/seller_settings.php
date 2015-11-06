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


        'seller' => array(

            'character' => array(
                'inform' => 'В отличае от добытчиков, торговцы используют продвинутое снаряжение, которое помогает в борьбе против пиратов и позволяет сокращать путь например через пояса астеройдов, что несомненно увеличивает время и прибыль. Торговцы не используют защиту и артефакты',
                'types_shop' => array(
                    'guns' => 'Оружие',
                    'engine' => 'Двигатели'
                )
            ),


            'guns' => array(


                1 => array(

                    'id' => 1,
                    '2x' => 1,
                    'summ' => 40,

                    'gfx_ship' => '/images/items/seller/guns/1.png',
                    'gfx_ava' => '/images/items/seller/guns/avatar/1.png',

                    'title' => 'Легкий лазер',
                    'decription' => 'Легкое и компактное ружие близкого боя <span class="bold_red">2х</span> прибыль - <span class="bold_red">1%</span> '


                ),

                2 => array(

                    'id' => 2,
                    '2x' => 3,
                    'summ' => 90,

                    'gfx_ship' => '/images/items/seller/guns/2.png',
                    'gfx_ava' => '/images/items/seller/guns/avatar/2.png',

                    'title' => 'Стандартный лазер',
                    'decription' => 'Разработанный еще во времена демократии, может поражать как движемые цели, так и астеройды и прочие препятствия <span class="bold_red">3%</span> '


                ),

                3 => array(

                    'id' => 3,
                    '2x' => 5,
                    'summ' =>160,

                    'gfx_ship' => '/images/items/seller/guns/3.png',
                    'gfx_ava' => '/images/items/seller/guns/avatar/3.png',

                    'title' => 'Модифицированный стандарт',
                    'decription' => 'Доказавший свою эффективность Стандартный лазер, был модифицирован военными с целью получения нового оружия ближнего боя и им это удалось! Шанс на получение двойной прибыли <span class="bold_red">5%</span> '

                ),

                4 => array(

                    'id' => 4,
                    '2x' => 7,
                    'summ' => 210,

                    'gfx_ship' => '/images/items/seller/guns/4.png',
                    'gfx_ava' => '/images/items/seller/guns/avatar/4.png',

                    'title' => 'Невесомая катапульта',
                    'decription' => 'Эту пушку прозвали катапультой, потму что она стреляет ядрами как во времена морских баталий, выпускает ядра с околозвуковой скоростью, если бы в космосе распространялся звук, противники бы убегали от одного только звука! Шанс на получение двойной прибыли <span class="bold_red">7%</span>'

                ),

                5 => array(

                    'id' => 5,
                    '2x' => 10,
                    'summ' => 270,

                    'gfx_ship' => '/images/items/seller/guns/5.png',
                    'gfx_ava' => '/images/items/seller/guns/avatar/5.png',

                    'title' => 'Контра+',
                    'decription' => 'Говорят разработчики Контры, вдохновились при создании этой пушки какой-то консольной игрой, но мы к сожалению не можем утверждать что это правда, после великой интернет депрессии, когда компьютерный вирус Енигма-2030 уничтожил большую часть информации в интернете, мы не смогли узнать правду про Контру. Шанс на получение двойной прибыли <span class="bold_red">10%</span>'


                ),

                6 => array(

                    'id' => 6,
                    '2x' => 15,
                    'summ' => 340,

                    'gfx_ship' => '/images/items/seller/guns/6.png',
                    'gfx_ava' => '/images/items/seller/guns/avatar/6.png',

                    'title' => 'Телекинез-2110',
                    'decription' => 'Как вы можете видеть принцип этого оружия не стрелять а манипулировать предметами непосредственно в кабине или других частях вражеского корабля. Наводит не только травмы но и психологический эффект на противников. Шанс на получение двойной прибыли <span class="bold_red">15%</span>'


                ),

                7 => array(

                    'id' => 7,
                    '2x' => 22,
                    'summ' => 470,

                    'gfx_ship' => '/images/items/seller/guns/7.png',
                    'gfx_ava' => '/images/items/seller/guns/avatar/7.png',

                    'title' => 'Телекинез+',
                    'decription' => 'Не буду вдаваться в подробности, как устроена эта система, знаю, что разработчки по национальности русские. Этим оружием пользовались еще при захвате Америки в 2130 году. Ох как тогда жарко было, лучше не вспоминать! Шанс на получение двойной прибыли <span class="bold_red">22%</span>'


                ),

                8 => array(

                    'id' => 8,
                    '2x' => 30,
                    'summ' => 640,

                    'gfx_ship' => '/images/items/seller/guns/8.png',
                    'gfx_ava' => '/images/items/seller/guns/avatar/8.png',

                    'title' => 'Искусственный интелект',
                    'decription' => 'Как вы знаете у нас на земле работает парочка таких интелектов, они управлят стратегией, участвуют в кибер атаках! Но КАК разработчикам удалось поместить такую систему на корабль я честно не знаю. Честь им и хвала! Шанс на получение двойной прибыли <span class="bold_red">30%</span>'


                ),

            ),

            'engine' => array(


                1 => array(

                    'id' => 1,
                    'time_speed' => 7200,
                    'summ' => 48,

                    'gfx_ship' => '/images/items/seller/engines/1.png',
                    'gfx_ava' => '/images/items/seller/engines/avatar/1.png',

                    'title' => 'Ускоритель',
                    'decription' => 'Обладает улучшенным запасом топлива и проходимостью! Повышает потенциал ускорения. Вместительность бака <span class="bold_red">14 часов полета</span>'


                ),

                2 => array(

                    'id' => 2,
                    'time_speed' => 10800,
                    'summ' => 155,

                    'gfx_ship' => '/images/items/seller/engines/2.png',
                    'gfx_ava' => '/images/items/seller/engines/avatar/2.png',

                    'title' => 'Автономный',
                    'decription' => ' Легок в установке и обслуживании. Для тех кто любит исследовать и покорять уголки космоса! Вместительность бака <span class="bold_red">15 часов полета</span>'


                ),

                3 => array(

                    'id' => 3,
                    'time_speed' => 18000,
                    'summ' => 195,

                    'gfx_ship' => '/images/items/seller/engines/3.png',
                    'gfx_ava' => '/images/items/seller/engines/avatar/3.png',

                    'title' => 'Яростный торговец',
                    'decription' => ' Устанавливается в специальном сервисе, помогает сделать корабль автономным на долгое время! Вместительность бака <span class="bold_red">17 часов полета</span>'


                ),

                4 => array(

                    'id' => 4,
                    'time_speed' => 25200,
                    'summ' => 285,

                    'gfx_ship' => '/images/items/seller/engines/4.png',
                    'gfx_ava' => '/images/items/seller/engines/avatar/4.png',

                    'title' => 'Грвавитариус',
                    'decription' => ' Если вы хотите полной автономми, чтобы корабль работал в любое время и требовал заправки раз в 2 суток, то улучшайтесь до этого двигателя смело! Вместительность бака <span class="bold_red">19 часов полета</span>'


                ),

                5 => array(

                    'id' => 5,
                    'time_speed' => 32400,
                    'summ' => 370,

                    'gfx_ship' => '/images/items/seller/engines/4.png',
                    'gfx_ava' => '/images/items/seller/engines/avatar/4.png',

                    'title' => 'Вакумная тяга',
                    'decription' => 'Вы сможете исследовать самые глубины космоса, зарабатывать деньги и при этом заниматься своими делами не думая о заправке. <span class="bold_red">21 час полета</span>'


                ),

                6 => array(

                    'id' => 6,
                    'time_speed' => 43200,
                    'summ' => 470,

                    'gfx_ship' => '/images/items/seller/engines/4.png',
                    'gfx_ava' => '/images/items/seller/engines/avatar/4.png',

                    'title' => 'Адский дрифт',
                    'decription' => 'Вы видели хоть раз дрифт космического корабля, умальцы из космической ассоциации добились этого! <span class="bold_red">24 часа полета</span>'


                ),

                7 => array(

                    'id' => 7,
                    'time_speed' => 86400,
                    'summ' => 990,

                    'gfx_ship' => '/images/items/seller/engines/4.png',
                    'gfx_ava' => '/images/items/seller/engines/avatar/4.png',

                    'title' => 'Забудь про заправку',
                    'decription' => 'Я сейчас не хочу разглогольствовать, но это предел мечтаний всех торговцев, если ты с этим движком, все знают что ты лучший в своей категории! <span class="bold_red">36 часов полета</span>'


                ),


            ),


        ),


    )
);