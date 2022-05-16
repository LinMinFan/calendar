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

<body>
    <div class="wrapper">
    <div class="star">
        <div class="st1"></div>
        <div class="st2"></div>
        <div class="st3"></div>
        <div class="st4"></div>
        <div class="st5"></div>
        <div class="st6"></div>
        <div class="st7"></div>
        <div class="st8"></div>
        <div class="st9"></div>
        <div class="st10"></div>
        <div class="st11"></div>
        <div class="st12"></div>
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
                        <option value="">--選擇--</option>
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
                    <option value="">--選擇--</option>
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
                        echo "<div class='{$hol} font'><div class='note d{$day}'><i class='fa-solid fa-cat'></i></div></div>";
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
</body>

</html>