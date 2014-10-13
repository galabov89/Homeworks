<!doctype html>
<html lang="en">
<head>
    <title>Calendar</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
    <body>
    <?php
        $month = 1;
    ?>
        <table cellspacing="100">
            <tr>
                <td colspan="7" class="calTitle">
                    <h1>2014</h1>
                </td>
            </tr>
            <?php for( $a=0; $a< 3; $a++){?>
                <tr>
                <?php for( $b=0; $b< 4; $b++){?>
                    <td>
                        <table>
                            <?php
                            //Days in the month
                            $num_of_days = cal_days_in_month(CAL_GREGORIAN, $month, 2014);

                            // Today day beginning
                            $today = date('Y-n-', strtotime("2014-".$month));

                            $dates = array();
                            $row = 0;
                            $col = 0;
                            $counter = 1;

                            //Initial fill of the array
                            for( $i=0; $i< 6; $i++){
                                for( $j=0; $j< 7; $j++){
                                    $dates[$i][$j] = ' ';
                                }
                            }

                            for( $i=1; $i<= $num_of_days; $i++){
                                $today = $today.(string)$i;
                                $day = date('l', strtotime( $today));
                                // echo $day."\n";

                                //Get day position
                                switch($day){
                                    case 'Monday':$col = 0;break;
                                    case 'Tuesday':$col = 1;break;
                                    case 'Wednesday':$col = 2;break;
                                    case 'Thursday':$col = 3;break;
                                    case 'Friday':$col = 4;break;
                                    case 'Saturday':$col = 5;break;
                                    case 'Sunday':$col = 6;break;
                                }

                                //Fill date
                                $dates[$row][$col]=$counter;
                                $counter++;
                                if($day == 'Sunday'){
                                    $row++;
                                }

                                $today = date('Y-n-', strtotime("2014-".$month));
                            }

                            ?>
                            <tr>
                                <td colspan="7" class="month"><?php echo date('F', mktime(0, 0, 0, $month, 10)); $month++; ?></td>
                            </tr>
                            <tr>
                                <td class="day">
                                    Mon
                                </td>
                                <td class="day">
                                    Tue
                                </td>
                                <td class="day">
                                    Wed
                                </td>
                                <td class="day">
                                    Thur
                                </td>
                                <td class="day">
                                    Fri
                                </td>
                                <td class="day">
                                    Sat
                                </td>
                                <td class="sunday">
                                    Sun
                                </td>
                            </tr>
                            <?php for( $i=0; $i< 6; $i++){  ?>
                                <tr>
                                    <?php for( $j=0; $j< 7; $j++){  ?>
                                        <td><?php echo $dates[$i][$j]?></td>
                                    <?php }?>
                                </tr>
                            <?php } ?>
                        </table>
                    </td>
                <?php }?>
                </tr>
            <?php }?>
        </table>
    </body>
</html>



