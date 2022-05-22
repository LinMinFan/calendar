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
                    ?>
                    <div class="capricorn">
                         <div class="capricorn1"></div>
                         <div class="capricorn2"></div>
                         <div class="capricorn3"></div>
                         <div class="capricorn4"></div>
                         <div class="capricorn5"></div>
                         <div class="capricorn6"></div>
                         <div class="capricorn7"></div>
                        <div class="capricorn8"></div>
                         <div class="capricorn9"></div>
                    </div>
                    <?php ;

                    break;
                case 2:
                    ?>
                     <div class="aqurius">
                         <div class="aqurius1"></div>
                         <div class="aqurius2"></div>
                         <div class="aqurius3"></div>
                         <div class="aqurius4"></div>
                         <div class="aqurius5"></div>
                         <div class="aqurius6"></div>
                         <div class="aqurius7"></div>
                         <div class="aqurius8"></div>
                         <div class="aqurius9"></div>
                         <div class="aqurius10"></div>
                     </div>
                    <?php ;

                    break;
                case 3:
                    ?>
                    <div class="pisces">
                        <div class="pisces1"></div>
                        <div class="pisces2"></div>
                        <div class="pisces3"></div>
                        <div class="pisces4"></div>
                        <div class="pisces5"></div>
                        <div class="pisces6"></div>
                        <div class="pisces7"></div>
                        <div class="pisces8"></div>
                        <div class="pisces9"></div>
                        <div class="pisces10"></div>
                        <div class="pisces11"></div>
                        <div class="pisces12"></div>
                        <div class="pisces13"></div>
                        <div class="pisces14"></div>
                        <div class="pisces15"></div>
                    </div>
                    <?php ;

                    break;
                case 4:
                    ?>
                     <div class="aries">
                         <div class="aries1"></div>
                         <div class="aries2"></div>
                         <div class="aries3"></div>
                         <div class="aries4"></div>
                         <div class="aries5"></div>
                         <div class="aries6"></div>
                         <div class="aries7"></div>
                     </div>
                    <?php ;

                    break;
                case 5:
                    ?>
                    <div class="taurus">
                        <div class="taurus1"></div>
                        <div class="taurus2"></div>
                        <div class="taurus3"></div>
                        <div class="taurus4"></div>
                        <div class="taurus5"></div>
                        <div class="taurus6"></div>
                        <div class="taurus7"></div>
                        <div class="taurus8"></div>
                        <div class="taurus9"></div>
                        <div class="taurus10"></div>
                    </div>
                    <?php ;

                    break;
                case 6:
                    ?>
                    <div class="gemini">
                        <div class="gemini1"></div>
                        <div class="gemini2"></div>
                        <div class="gemini3"></div>
                        <div class="gemini4"></div>
                        <div class="gemini5"></div>
                        <div class="gemini6"></div>
                        <div class="gemini7"></div>
                        <div class="gemini8"></div>
                        <div class="gemini9"></div>
                        <div class="gemini10"></div>
                        <div class="gemini11"></div>
                        <div class="gemini12"></div>
                        <div class="gemini13"></div>
                        <div class="gemini14"></div>
                        <div class="gemini15"></div>
                    </div>
                    <?php ;

                    break;
                case 7:
                    ?>
                    <div class="cancer">
                        <div class="cancer1"></div>
                        <div class="cancer2"></div>
                        <div class="cancer3"></div>
                        <div class="cancer4"></div>
                        <div class="cancer5"></div>
                    </div>
                    <?php ;

                    break;
                case 8:
                    ?>
                    <div class="leo">
                        <div class="leo1"></div>
                        <div class="leo2"></div>
                        <div class="leo3"></div>
                        <div class="leo4"></div>
                        <div class="leo5"></div>
                        <div class="leo6"></div>
                        <div class="leo7"></div>
                        <div class="leo8"></div>
                        <div class="leo9"></div>
                    </div>
                    <?php ;

                    break;
                case 9:
                    ?>
                    <div class="virgo">
                        <div class="virgo1"></div>
                        <div class="virgo2"></div>
                        <div class="virgo3"></div>
                        <div class="virgo4"></div>
                        <div class="virgo5"></div>
                        <div class="virgo6"></div>
                        <div class="virgo7"></div>
                        <div class="virgo8"></div>
                    </div>
                    <?php ;

                    break;
                case 10:
                    ?>
                    <div class="libra">
                        <div class="libra1"></div>
                        <div class="libra2"></div>
                        <div class="libra3"></div>
                        <div class="libra4"></div>
                        <div class="libra5"></div>
                        <div class="libra6"></div>
                    </div>
                    <?php ;

                    break;
                case 11:
                    ?>
                    <div class="scorpio">
                        <div class="scorpio1"></div>
                        <div class="scorpio2"></div>
                        <div class="scorpio3"></div>
                        <div class="scorpio4"></div>
                        <div class="scorpio5"></div>
                        <div class="scorpio6"></div>
                        <div class="scorpio7"></div>
                        <div class="scorpio8"></div>
                        <div class="scorpio9"></div>
                        <div class="scorpio10"></div>
                        <div class="scorpio11"></div>
                        <div class="scorpio12"></div>
                        <div class="scorpio13"></div>
                        <div class="scorpio14"></div>
                    </div>
                    <?php ;

                    break;
                case 12:
                    ?>
                    <div class="sagittarius">
                        <div class="sagittarius1"></div>
                        <div class="sagittarius2"></div>
                        <div class="sagittarius3"></div>
                        <div class="sagittarius4"></div>
                        <div class="sagittarius5"></div>
                        <div class="sagittarius6"></div>
                        <div class="sagittarius7"></div>
                        <div class="sagittarius8"></div>
                        <div class="sagittarius9"></div>
                        <div class="sagittarius10"></div>
                        <div class="sagittarius11"></div>
                        <div class="sagittarius12"></div>
                        <div class="sagittarius13"></div>
                        <div class="sagittarius14"></div>
                        <div class="sagittarius15"></div>
                        <div class="sagittarius16"></div>
                        <div class="sagittarius17"></div>
                    </div>
                    <?php ;

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
                case 1: ?>
                    <div class="zodiac">雞年</div><?php ;
                    break;
                case 2: ?>
                    <div class="zodiac">狗年</div><?php ;
                    break;
                case 3: ?>
                    <div class="zodiac">豬年</div><?php ;
                    break;
                case 4: ?>
                    <div class="zodiac">鼠年</div><?php ;
                    break;
                case 5: ?>
                    <div class="zodiac">牛年</div><?php ;
                    break;
                 case 6: ?>
                    <div class="zodiac">虎年</div><?php ;
                    break;
                case 7: ?>
                    <div class="zodiac">兔年</div><?php ;
                    break;
                case 8: ?>
                    <div class="zodiac">龍年</div><?php ;
                    break;
                case 9: ?>
                    <div class="zodiac">蛇年</div><?php ;
                    break;
                case 10: ?>
                    <div class="zodiac">馬年</div><?php ;
                    break;
                case 11: ?>
                    <div class="zodiac">羊年</div><?php ;
                    break;
                case 0: ?>
                    <div class="zodiac">猴年</div><?php ;
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