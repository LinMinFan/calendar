<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上月曆</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/star.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/constellation.css">
    <link rel="stylesheet" href="./css/specialday2022.css">
    <link rel="stylesheet" href="./css/specialday2023.css">
    <link rel="stylesheet" href="./css/holiday.css">
    <link rel="stylesheet" href="./css/message.css">
</head>

<body onload="current_time()">
    <?php
    date_default_timezone_set('Asia/Taipei'); //宣告時區
    ?>
    <div class="wrapper">
        <div class="star">
            <div class="st1">
                <div class="line"></div>
            </div>
            <div class="st2">
                <div class="line"></div>
            </div>
            <div class="st3">
                <div class="line"></div>
            </div>
            <div class="st4">
                <div class="line"></div>
            </div>
            <div class="st5">
                <div class="line"></div>
            </div>
            <div class="st6">
                <div class="light">
                    <div class="straight1"></div>
                    <div class="straight2"></div>
                    <div class="straight3"></div>
                    <div class="straight4"></div>
                </div>

            </div>
            <div class="st7">
                <div class="light">
                    <div class="straight1"></div>
                    <div class="straight2"></div>
                    <div class="straight3"></div>
                    <div class="straight4"></div>
                </div>

            </div>
            <div class="st8">
                <div class="light">
                    <div class="straight1"></div>
                    <div class="straight2"></div>
                    <div class="straight3"></div>
                    <div class="straight4"></div>
                </div>

            </div>
            <div class="st9">
                <div class="light">
                    <div class="straight1"></div>
                    <div class="straight2"></div>
                    <div class="straight3"></div>
                    <div class="straight4"></div>
                </div>

            </div>
            <div class="st10">
                <div class="light">
                    <div class="straight1"></div>
                    <div class="straight2"></div>
                    <div class="straight3"></div>
                    <div class="straight4"></div>
                </div>

            </div>
            <div class="st11">
                <div class="light">
                    <div class="straight1"></div>
                    <div class="straight2"></div>
                    <div class="straight3"></div>
                    <div class="straight4"></div>
                </div>

            </div>
            <div class="st12">
                <div class="light">
                    <div class="straight1"></div>
                    <div class="straight2"></div>
                    <div class="straight3"></div>
                    <div class="straight4"></div>
                </div>

            </div>
            <div class="message">
                <div class="poetry">
                    <?php
                    switch (rand(1, 20)) {
                        case 1:
                            echo
                            "三日入廚下，<br>
                     洗手作羹湯。<br>
                     未諳姑食性，<br>
                     先遣小姑嘗。<br>";
                            break;
                        case 2:
                            echo
                            "空山不見人，<br>
                     但聞人語響。<br>
                     返景入深林，<br>
                     復照青苔上。<br>";
                            break;
                        case 3:
                            echo
                            "獨坐幽篁裡，<br>
                     彈琴復長嘯。<br>
                     深林人不知，<br>
                     明月來相照。<br>";
                            break;
                        case 4:
                            echo
                            "山中相送罷，<br>
                     日暮掩柴扉。<br>
                     春草明年綠，<br>
                     王孫歸不歸。<br>";
                            break;
                        case 5:
                            echo
                            "紅豆生南國，<br>
                     春來發幾枝？<br>
                     願君多采擷，<br>
                     此物最相思。<br>";
                            break;
                        case 6:
                            echo
                            "君自故鄉來，<br>
                     應知故鄉事。<br>
                     來日綺窗前，<br>
                     寒梅著花未？<br>";
                            break;
                        case 7:
                            echo
                            "綠螘新醅酒，<br>
                     紅泥小火爐。<br>
                     晚來天欲雪，<br>
                     能飲一杯無？<br>";
                            break;
                        case 8:
                            echo
                            "北斗七星高，<br>
                     哥舒夜帶刀。<br>
                     至今窺牧馬，<br>
                     不敢過臨洮。<br>";
                            break;
                        case 9:
                            echo
                            "美人捲珠簾，<br>
                     深坐顰蛾眉。<br>
                     但見淚痕濕，<br>
                     不知心恨誰。<br>";
                            break;
                        case 10:
                            echo
                            "向晚意不適，<br>
                     驅車登古原。<br>
                     夕陽無限好，<br>
                     只是近黃昏。<br>";
                            break;
                        case 11:
                            echo
                            "鳴箏金粟柱，<br>
                     素手玉房前。<br>
                     欲得周郎顧，<br>
                     時時誤拂絃。<br>";
                            break;
                        case 12:
                            echo
                            "嶺外音書絕，<br>
                     經冬復歷春。<br>
                     近鄉情更怯，<br>
                     不敢問來人。<br>";
                            break;
                        case 13:
                            echo
                            "功蓋三分國，<br>
                     名成八陣圖。<br>
                     江流石不轉，<br>
                     遺恨失吞吳。<br>";
                            break;
                        case 14:
                            echo
                            "移舟泊煙渚，<br>
                     日暮客愁新。<br>
                     野曠天低樹，<br>
                     江清月近人。<br>";
                            break;
                        case 15:
                            echo
                            "春眠不覺曉，<br>
                     處處聞啼鳥。<br>
                     夜來風雨聲，<br>
                     花落知多少。<br>";
                            break;
                        case 16:
                            echo
                            "打起黃鶯兒，<br>
                     莫教枝上啼。<br>
                     啼時驚妾夢，<br>
                     不得到遼西。<br>";
                            break;
                        case 17:
                            echo
                            "千山鳥飛絕，<br>
                     萬徑人蹤滅。<br>
                     孤舟蓑笠翁，<br>
                     獨釣寒江雪。<br>";
                            break;
                        case 18:
                            echo
                            "懷君屬秋夜，<br>
                     散步詠涼天。<br>
                     空山松子落，<br>
                     幽人應未眠。<br>";
                            break;
                        case 19:
                            echo
                            "終南陰嶺秀，<br>
                     積雪浮雲端。<br>
                     林表明霽色，<br>
                     城中增暮寒。<br>";
                            break;
                        case 20:
                            echo
                            "故國三千里，<br>
                     深宮二十年。<br>
                     一聲何滿子，<br>
                     雙淚落君前。<br>";
                            break;

                        default:

                            break;
                    }
                    ?>
                </div>
                <div class="triangle"></div>
            </div>
            <!-- <audio  autoplay loop>
  <source src="./mp3/[BTCLOD.COM] MusicbyAden - Alive (Vlog No Copyright Music)-64k.MP3" >
    </audio>
    <div class="wrapper"> -->


            <?php

            if (isset($_GET['year'])) {
                $month = $_GET['month'];
                $year = $_GET['year'];
            } else {
                $month = date('n');
                $year = date("Y");
            }
            $last = $year - 1;
            $next = $year + 1;

            if (isset($_GET['month'])) {
                $month = $_GET['month'];
                //            $year = $_GET['year'];
            } else {
                $month = date('n');
                //           $year = date("Y");
            }
            switch ($month) {
                case 1:
                    $prevMonth = 12;
                    $prevYear = $year - 1;
                    $nextMonth = $month + 1;
                    $nextYear = $year;
                    break;
                case 12:
                    $prevMonth = $month - 1;
                    $prevYear = $year;
                    $nextMonth = 1;
                    $nextYear = $year + 1;
                    break;
                default:
                    $prevMonth = $month - 1;
                    $prevYear = $year;
                    $nextMonth = $month + 1;
                    $nextYear = $year;
            }
            ?>

            <div class='nav'>
                <div class="constellation c<?= $month ?>">
                    <?php
                    switch ($month) {
                        case 1:
                            echo
                            "<div class='capricorn'>
                         <div class='capricorn1'></div>
                         <div class='capricorn2'></div>
                         <div class='capricorn3'></div>
                         <div class='capricorn4'></div>
                         <div class='capricorn5'></div>
                         <div class='capricorn6'></div>
                         <div class='capricorn7'></div>
                        <div class='capricorn8'></div>
                         <div class='capricorn9'></div>
                        </div>";

                            break;
                        case 2:
                            echo
                            "<div class='aqurius'>
                         <div class='aqurius1'></div>
                         <div class='aqurius2'></div>
                         <div class='aqurius3'></div>
                         <div class='aqurius4'></div>
                         <div class='aqurius5'></div>
                         <div class='aqurius6'></div>
                         <div class='aqurius7'></div>
                         <div class='aqurius8'></div>
                         <div class='aqurius9'></div>
                         <div class='aqurius10'></div>
                     </div>";

                            break;
                        case 3:
                            echo
                            "<div class='pisces'>
                        <div class='pisces1'></div>
                        <div class='pisces2'></div>
                        <div class='pisces3'></div>
                        <div class='pisces4'></div>
                        <div class='pisces5'></div>
                        <div class='pisces6'></div>
                        <div class='pisces7'></div>
                        <div class='pisces8'></div>
                        <div class='pisces9'></div>
                        <div class='pisces10'></div>
                        <div class='pisces11'></div>
                        <div class='pisces12'></div>
                        <div class='pisces13'></div>
                        <div class='pisces14'></div>
                        <div class='pisces15'></div>
                    </div>";

                            break;
                        case 4:
                            echo
                            "<div class='aries'>
                         <div class='aries1'></div>
                         <div class='aries2'></div>
                         <div class='aries3'></div>
                         <div class='aries4'></div>
                         <div class='aries5'></div>
                         <div class='aries6'></div>
                         <div class='aries7'></div>
                     </div>";

                            break;
                        case 5:
                            echo
                            "<div class='taurus'>
                        <div class='taurus1'></div>
                        <div class='taurus2'></div>
                        <div class='taurus3'></div>
                        <div class='taurus4'></div>
                        <div class='taurus5'></div>
                        <div class='taurus6'></div>
                        <div class='taurus7'></div>
                        <div class='taurus8'></div>
                        <div class='taurus9'></div>
                        <div class='taurus10'></div>
                    </div>";

                            break;
                        case 6:
                            echo
                            "<div class='gemini'>
                        <div class='gemini1'></div>
                        <div class='gemini2'></div>
                        <div class='gemini3'></div>
                        <div class='gemini4'></div>
                        <div class='gemini5'></div>
                        <div class='gemini6'></div>
                        <div class='gemini7'></div>
                        <div class='gemini8'></div>
                        <div class='gemini9'></div>
                        <div class='gemini10'></div>
                        <div class='gemini11'></div>
                        <div class='gemini12'></div>
                        <div class='gemini13'></div>
                        <div class='gemini14'></div>
                        <div class='gemini15'></div>
                    </div>";

                            break;
                        case 7:
                            echo
                            "<div class='cancer'>
                        <div class='cancer1'></div>
                        <div class='cancer2'></div>
                        <div class='cancer3'></div>
                        <div class='cancer4'></div>
                        <div class='cancer5'></div>
                    </div>";

                            break;
                        case 8:
                            echo
                            "<div class='leo'>
                        <div class='leo1'></div>
                        <div class='leo2'></div>
                        <div class='leo3'></div>
                        <div class='leo4'></div>
                        <div class='leo5'></div>
                        <div class='leo6'></div>
                        <div class='leo7'></div>
                        <div class='leo8'></div>
                        <div class='leo9'></div>
                    </div>";

                            break;
                        case 9:
                            echo
                            "<div class='virgo'>
                        <div class='virgo1'></div>
                        <div class='virgo2'></div>
                        <div class='virgo3'></div>
                        <div class='virgo4'></div>
                        <div class='virgo5'></div>
                        <div class='virgo6'></div>
                        <div class='virgo7'></div>
                        <div class='virgo8'></div>
                    </div>";

                            break;
                        case 10:
                            echo
                            "<div class='libra'>
                        <div class='libra1'></div>
                        <div class='libra2'></div>
                        <div class='libra3'></div>
                        <div class='libra4'></div>
                        <div class='libra5'></div>
                        <div class='libra6'></div>
                    </div>";

                            break;
                        case 11:
                            echo
                            "<div class='scorpio'>
                        <div class='scorpio1'></div>
                        <div class='scorpio2'></div>
                        <div class='scorpio3'></div>
                        <div class='scorpio4'></div>
                        <div class='scorpio5'></div>
                        <div class='scorpio6'></div>
                        <div class='scorpio7'></div>
                        <div class='scorpio8'></div>
                        <div class='scorpio9'></div>
                        <div class='scorpio10'></div>
                        <div class='scorpio11'></div>
                        <div class='scorpio12'></div>
                        <div class='scorpio13'></div>
                        <div class='scorpio14'></div>
                    </div>";

                            break;
                        case 12:
                            echo
                            "<div class='sagittarius'>
                        <div class='sagittarius1'></div>
                        <div class='sagittarius2'></div>
                        <div class='sagittarius3'></div>
                        <div class='sagittarius4'></div>
                        <div class='sagittarius5'></div>
                        <div class='sagittarius6'></div>
                        <div class='sagittarius7'></div>
                        <div class='sagittarius8'></div>
                        <div class='sagittarius9'></div>
                        <div class='sagittarius10'></div>
                        <div class='sagittarius11'></div>
                        <div class='sagittarius12'></div>
                        <div class='sagittarius13'></div>
                        <div class='sagittarius14'></div>
                        <div class='sagittarius15'></div>
                        <div class='sagittarius16'></div>
                        <div class='sagittarius17'></div>
                    </div>";

                            break;

                        default:
                            break;
                    }
                    ?>
                </div>
                <div class="constellation cb<?= $month ?>">
                </div>
                <a href='index.php?year=<?= $last; ?>&month=<?= $month; ?>'>
                    <div class="preyear"><i class="fa-solid fa-angles-left"></i></div>
                </a>
                <div class="titleyear">
                    <?= $year . '年'; ?>
                </div>
                <a href='index.php?year=<?= $next; ?>&month=<?= $month; ?>'>
                    <div class="nextyear"><i class="fa-solid fa-angles-right"></i></div>
                </a>
                <div class="titlemonth">
                    <?= $month . '月'; ?>
                </div>
                <?php
                switch ($year % 12) {
                    case 1:
                        echo "<div class='zodiac'>雞年</div>";
                        break;
                    case 2:
                        echo "<div class='zodiac'>狗年</div>";
                        break;
                    case 3:
                        echo "<div class='zodiac'>豬年</div>";
                        break;
                    case 4:
                        echo "<div class='zodiac'>鼠年</div>";
                        break;
                    case 5:
                        echo "<div class='zodiac'>牛年</div>";
                        break;
                    case 6:
                        echo "<div class='zodiac'>虎年</div>";
                        break;
                    case 7:
                        echo "<div class='zodiac'>兔年</div>";
                        break;
                    case 8:
                        echo "<div class='zodiac'>龍年</div>";
                        break;
                    case 9:
                        echo "<div class='zodiac'>蛇年</div>";
                        break;
                    case 10:
                        echo "<div class='zodiac'>馬年</div>";
                        break;
                    case 11:
                        echo "<div class='zodiac'>羊年</div>";
                        break;
                    case 0:
                        echo "<div class='zodiac'>猴年</div>";
                        break;
                }
                ?>

                <span class="time" id="current"></span>

                <?php

                $py1 = $year - 1;
                $py2 = $year - 2;
                $py3 = $year - 3;
                $py4 = $year - 4;
                $py5 = $year - 5;
                $ny1 = $year + 1;
                $ny2 = $year + 2;
                $ny3 = $year + 3;
                $ny4 = $year + 4;
                $ny5 = $year + 5;

                ?>
                <form class="select" action="index.php" method="get">
                    <div class="button">
                        <select id="" name="year">
                            <option value="<?= $year; ?>">--選擇--</option>
                            <option value="<?= $ny5; ?>"><?= $ny5; ?></option>
                            <option value="<?= $ny4; ?>"><?= $ny4; ?></option>
                            <option value="<?= $ny3; ?>"><?= $ny3; ?></option>
                            <option value="<?= $ny2; ?>"><?= $ny2; ?></option>
                            <option value="<?= $ny1; ?>"><?= $ny1; ?></option>
                            <option value="<?= $py1; ?>"><?= $py1; ?></option>
                            <option value="<?= $py2; ?>"><?= $py2; ?></option>
                            <option value="<?= $py3; ?>"><?= $py3; ?></option>
                            <option value="<?= $py4; ?>"><?= $py4; ?></option>
                            <option value="<?= $py5; ?>"><?= $py5; ?></option>
                        </select>
                        <label for="">年</label>
                        <select id="" name="month">
                            <option value="<?= $month; ?>">--選擇--</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                        <label for="">月</label>
                        <input type="submit" value="前往">

                    </div>
                </form>
                <a class="home" href="index.php">
                    <div>
                        <i class="fa-solid fa-house"></i>
                    </div>
                </a>
            </div>
            <?php

            $firstDay = $year . "-" . $month . "-1";    //定義每月一日
            $firstWeekday = date("w", strtotime($firstDay));    //算出每月1日為星期幾開始
            $monthDays = date("t", strtotime($firstDay));   //算出每月天數
            $lastDay = $year . "-" . $month . "-" . $monthDays; //以算出的每月天數作為當月最後一天
            $today = date("Y-m-d"); //定義今天的日期
            $lastWeekday = date("w", strtotime($lastDay));  //算出每月最後一天在星期幾結束

            //定義空陣列，並將日期寫入

            $dateHouse = [];

            //當月第一週1日開始前填入空陣列

            for ($i = 0; $i < $firstWeekday; $i++) {
                $dateHouse[] = "";
            }

            //填入當月1日至最後一日

            for ($i = 0; $i < $monthDays; $i++) {
                $date = date("Ymd", strtotime("+$i days", strtotime($firstDay)));
                $dateHouse[] = $date;
            }

            //當月最後一週最後一日結束後填入空陣列

            for ($i = 0; $i < (6 - $lastWeekday); $i++) {
                $dateHouse[] = "";
            }
            ?>

            <div class="table">
                <div class="monthbutton left">
                    <a href='index.php?year=<?= $prevYear; ?>&month=<?= $prevMonth; ?>'><i class="fa-solid fa-angle-left"></i></a>
                </div>
                <div class="content">

                    <div class='header'>日</div>
                    <div class='header'>一</div>
                    <div class='header'>二</div>
                    <div class='header'>三</div>
                    <div class='header'>四</div>
                    <div class='header'>五</div>
                    <div class='header'>六</div>
                    <?php


                    foreach ($dateHouse as $k => $day) {
                        $hol = ($k % 7 == 0 || $k % 7 == 6) ? "weekend" : "workday";
                        $specialday = date("md", strtotime($day));

                        if (!empty($day)) {

                            $dayFormat = date("j", strtotime($day));
                            if (strtotime($day) == strtotime(date("Ymd"))) {
                                echo     "<div class='{$hol} font'>{$dayFormat}<div class='note dtoday d{$day} d{$specialday}'>今天</div></div>";
                            } else {
                                echo "<div class='{$hol} font'>{$dayFormat}<div class='note d{$day} d{$specialday}'></div></div>";
                            }
                        } else {
                            echo "<div class='{$hol} font'><div class='note'><i class='fa-solid fa-cat'></i></div></div>";
                        }
                    }

                    ?>
                </div>
                <div class="monthbutton right">
                    <a href='index.php?year=<?= $nextYear; ?>&month=<?= $nextMonth; ?>'><i class="fa-solid fa-angle-right"></i></a>
                </div>
            </div>


        </div>
    </div>
    <script src="./js/main.js"></script>
</body>

</html>