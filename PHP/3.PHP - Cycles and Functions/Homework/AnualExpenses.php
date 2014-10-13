<?php
function GetCurrentYear(){
    return date("Y");
}

function GenerateNumber(){

    return rand(0,1000);
}

?>
<html>
<head>
    <title> Square Root Sum</title>
    <style>
        table,td,tr{
            border: 1px solid black;

        }
        td{
            text-align: center;
            padding-left: 5px;
            padding-right: 5px;
        }
    </style>
</head>
<body>
<form method="post">
    <label>Enter Number of Years</label>
    <input type="text" name="text">
    <input type="submit" name="submit" value="Show Cost">
</form>
<table>
    <tbody>
    <tr>
        <td><b>Year</b></td>
        <td><b>January</b></td>
        <td><b>February</b></td>
        <td><b>March</b></td>
        <td><b>April</b></td>
        <td><b>May</b></td>
        <td><b>June</b></td>
        <td><b>July</b></td>
        <td><b>August</b></td>
        <td><b>September</b></td>
        <td><b>October</b></td>
        <td><b>November</b></td>
        <td><b>December</b></td>
        <td><b>Total:</b></td>
    </tr>
    <?php
    if(isset($_POST['submit'])){
        $year = GetCurrentYear();
        $num_years = $_POST['text'];
        //All years
        for ($y=0; $y< $num_years; $y++) {
            ?>
            <tr>
                <?php
                //Every year
                $total = 0;
                for($j=0; $j<14; $j++){
                ?>
                    <?php
                    if($j==0){
                    ?>
                        <td><?php echo $year; $year = $year-1; ?></td>
                    <?php
                    }
                    ?>

                    <?php
                    if($j>0 && $j<13){
                        ?>
                        <td><?php
                            $number = GenerateNumber();
                            $total+=$number;
                            echo $number;
                            ?>
                        </td>
                    <?php
                    }
                    ?>

                    <?php
                    if($j==13){
                        ?>
                        <td><?php echo $total; ?></td>
                    <?php
                    }
                    ?>

                <?php
                }
                ?>
            </tr>
        <?php
        }
        ?>
    <?php
    }
    ?>
    </tbody>
</table>
</body>
</html>