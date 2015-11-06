<?php

$this->pageTitle = Yii::app()->name;

$baseUrl = Yii::app()->baseUrl;
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl . "/js/jquery.shutter/jquery.shutter.js");
$cs->registerCssFile($baseUrl . "/js/jquery.shutter/jquery.shutter.css");


$cs->registerCssFile($baseUrl . "/css/presentationCycle.css");
$cs->registerScriptFile($baseUrl . "/js/jquery.cycle.all.min.js");
$cs->registerScriptFile($baseUrl . "/js/presentationCycle.js");

?>


<div class="contant">
    <div class="window_general">
        <img class="window_img" src="/images/window.png">
        <img class="krepezh_img" src="/images/krepesh.png">

        <div class="kranshteyn"></div>

        <div class="girl_image">

            <div id="presentation_container" class="pc_container">
                <div class="pc_item">
                    <div class="desc">
                        <h3>SPACEWARSGAME</h3>
                        Инвестиционная онлайн игра с потрясающей графикой и интересным сюжетом!
                    </div>
                    <img src="/images/slider/slide1.jpg" alt="slide1" />
                </div>
                <div class="pc_item">
                    <div class="desc" style="left: 0px;">
                        <h3> Корабли </h3>
                        Множество модификаций <br> кораблей. Более 5000 <br> различных вариантов! <br> Не заскучаешь!
                    </div>
                    <img src="/images/slider/slide2.jpg" alt="slide2" />
                </div>
                <div class="pc_item">
                    <div class="desc" style="left: 0px;">
                        <h3>Удобство</h3>
                        Удобный игровой интерфейс, мы следим за качеством графики и юзабилити!
                    </div>
                    <img src="/images/slider/slide3.jpg" alt="slide3" />
                </div>
                <div class="pc_item">
                    <div class="desc" >
                        <br>

                        <h3>Интересные игры</h3>
                        Дополнительные игры на игровую валюту, очень мотивируют на новые подвиги!
                    </div>
                    <img src="/images/slider/slide4.jpg" alt="slide4" />
                </div>
                <div class="pc_item">
                    <div class="desc">
                        <h3>Статистика</h3>
                        Статистика ваших рефералов, побед, история пополнений и выводов. Все как на ладони!
                    </div>
                    <img src="/images/slider/slide5.jpg" alt="slide5" />
                </div>
                <div class="pc_item">
                    <div class="desc" style="left: 0px;">
                        <h3>Арена</h3>
                        Придумайте свою боевую стратегию, против которой не устоит не один соперник!
                    </div>
                    <img src="/images/slider/slide6.jpg" alt="slide6" />
                </div>
            </div>

            <script type="text/javascript">
                presentationCycle.init();
            </script>

        </div>

    </div>

    <div class="text_general">
        <p style="margin-top:10px;">

            <h3>Доход до 47% в месяц!</h3>

        <b>SpaceWarsGame</b> - это инвестиционная онлайн-игра, где вам нужно купить кораблик и просто каждый день собирать
        прибыль с него. Мы платим от 25% до 47% всем. Выводим на онлайн кошельки, payeer или
        мобильный телефон!
        Кораблик является пассивным доходом и <span class="bold_red">не требует</span> обязательных вложений. Он
        стабильно <span class="bold_red">приносит доход</span> на протяжении всего времени.
        Вы можете улучшать корабль, а можете не улучшать и просто <span
            class="bold_red">выводить деньги каждый день</span>
        </p>
    </div>
    <div class="kranshteyn_hr_100"></div>
    <div><p class="text_general_100">
            Принимай участие в битвах! Создавай битвы сам! Развивайся! Прокачивай свой кораблик и получай дополнительную
            прибыль!
        </p>

        <div class="kranshteyn_hr_100"></div>

        <p class="text_general_100">
            Теперь давайте вкратце пройдемся по всем основным направлениям в игре!
        </p>


        <h3 class="red"><img src="/images/worker.png" width="45"> Добытчик </h3>

        <div class="seller_div">
            <a onclick="startWork()" id="btn_worker" class="btn_demo"></a>
            <iframe id="worker" scrolling="no" width="428" height="280" src="/iframes/worker/index.php"
                    style="border:none;"></iframe>
        </div>

        <div class="right_block_seller text_general_100" style="float: right; width:440px;">

            Добытчик это первый начинающий персонаж в игре, кому интересно попробовать, поучаствовать в битвах,
            убедиться, что деньги платятся, смело выбирайте этого персонажа!
           <br>
           <table class="table table-bordered" style="margin-top: 10px;">
               <tr>
                   <td>Стоимость</td>
                   <td><span class="bold_red">45 руб.</span></td>
               </tr>
               <tr>
                   <td>Начальный доход</td>
                   <td><span class="bold_red">25%</span> от <span class="bold_red">11.5 руб./мес.</span></td>
               </tr>
               <tr>
                   <td>Можно улучшить</td>
                   <td> до <span class="bold_red">37.5%</span> и до <span class="bold_red">743 руб./мес.</span></td>
               </tr>
           </table>

        </div>

        <div style="clear: both; height: 10px;"></div>

        <div class="kranshteyn_hr_100"></div>

        <h3 class="red"> <img src="/images/seller.png" width="45"> Торговец</h3>

        <div class="seller_div">
            <a onclick="startSeller()" id="btn_seller" class="btn_demo"></a>
            <iframe id="seller" scrolling="no" width="428" height="280" src="/iframes/torgovec/index.php"
                    style="border:none;"></iframe>
        </div>

        <div class="right_block_seller text_general_100" style="float: right; width:440px;">

            Продвинутый персонаж. Кто ищет стабильный небольшой доход! Хорошо прокачивается! Использует не все типы
            вооружений. Не использует броню и артефакты!
            <br>
            <table class="table table-bordered" style="margin-top: 10px;">
                <tr>
                    <td>Стоимость</td>
                    <td><span class="bold_red">490 руб.</span></td>
                </tr>
                <tr>
                    <td>Начальный доход</td>
                    <td><span class="bold_red">30%</span> от <span class="bold_red">147 руб./мес.</span></td>
                </tr>
                <tr>
                    <td>Можно улучшить</td>
                    <td> до <span class="bold_red">40%</span> и до <span class="bold_red">2088 руб./мес.</span></td>
                </tr>
            </table>

        </div>

        <div style="clear: both; height: 10px;"></div>

        <div class="kranshteyn_hr_100"></div>

        <h3 class="red"><img src="/images/killer.png" width="45"> Воин</h3>

        <div class="seller_div">
            <a onclick="startBattle()" id="btn_fighter" class="btn_demo"></a>
            <iframe id="fighter" scrolling="no" width="428" height="280" src="/iframes/voin/index.php"
                    style="border:none;"></iframe>
        </div>

        <div class="right_block_seller text_general_100" style="float: right; width:440px;">

            Воин более продвинутый персонаж, которому доступна масса улучшений! Воину доступны все виды двигателей,
            оружия, защиты. Войну не доступны артефакты!

            <br>
            <table class="table table-bordered" style="margin-top: 10px;">
                <tr>
                    <td>Стоимость</td>
                    <td><span class="bold_red">990 руб.</span></td>
                </tr>
                <tr>
                    <td>Начальный доход</td>
                    <td><span class="bold_red">32%</span> от <span class="bold_red">360 руб./мес.</span></td>
                </tr>
                <tr>
                    <td>Можно улучшить</td>
                    <td> до <span class="bold_red">42%</span> и до <span class="bold_red">7000 руб./мес.</span></td>
                </tr>
            </table>

        </div>

        <div style="clear: both; height: 10px;"></div>

        <div class="kranshteyn_hr_100"></div>

        <h3 class="red"><img src="/images/pirat.png" width="45"> Пират</h3>

        <div class="seller_div">
            <a onclick="startReket()" id="btn_pirat" class="btn_demo"></a>
            <iframe id="pirat" scrolling="no" width="428" height="280" src="/iframes/pirat/index.php"
                    style="border:none;"></iframe>
        </div>

        <div class="right_block_seller text_general_100" style="float: right; width:440px;">

            Пираты живут по принципу все или ничего! Добро пожаловать в стаю самых отъявленных пиратов! Пиратам доступны
            все улучшения!

            <br>
            <table class="table table-bordered" style="margin-top: 10px;">
                <tr>
                    <td>Стоимость</td>
                    <td><span class="bold_red">2990 руб.</span></td>
                </tr>
                <tr>
                    <td>Начальный доход</td>
                    <td><span class="bold_red">34%</span> от <span class="bold_red">1016 руб./мес.</span></td>
                </tr>
                <tr>
                    <td>Можно улучшить</td>
                    <td> до <span class="bold_red">47%</span> и до <span class="bold_red">70256 руб./мес.</span></td>
                </tr>
            </table>

        </div>

        <div style="clear: both; height: 10px;"></div>

        <div class="kranshteyn_hr_100"></div>

        </div>

        <p class="text_general_100">
        Все суммы в игре реальны. Вы можете выводить из игры доход или улучшать корабль, который даст вам еще больше
        прибыли!
        </p>

</div>

<script>

    var isRegSell = false;
    var isRegKill = false;
    var isRegPir = false;
    var isRegWor = false;

    function startSeller() {

        if (isRegSell == true) {
            window.location.replace("<?= $this->createUrl( 'player/create2' ); ?>");
        }
        else {
            isRegSell = true;
        document.getElementById("seller").contentWindow.startPlay();
        $('#btn_seller').css( "background", 'url("../images/btns/reg.jpg")' );
    }
    }

    function startBattle() {

        if (isRegKill == true) {
            window.location.replace("<?= $this->createUrl( 'player/create2' ); ?>");
        }
        else {
            isRegKill = true;
        document.getElementById("fighter").contentWindow.addDialog();
        $('#btn_fighter').css( "background", 'url("../images/btns/reg.jpg")' );
    }
    }

    function startReket() {

        if (isRegPir == true) {
            window.location.replace("<?= $this->createUrl( 'player/create2' ); ?>");
        }
        else {
            isRegPir = true;
        document.getElementById("pirat").contentWindow.startReket();
        $('#btn_pirat').css( "background", 'url("../images/btns/reg.jpg")' );
    }
    }

    function startWork() {
        if (isRegWor == true) {
            window.location.replace("<?= $this->createUrl( 'player/create2' ); ?>");
        }
        else {
            isRegWor = true;
        document.getElementById("worker").contentWindow.startWork();
        $('#btn_worker').css( "background", 'url("../images/btns/reg.jpg")' );
    }
    }
</script>