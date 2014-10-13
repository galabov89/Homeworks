<?php
function SquareRoot($num){
    return number_format((float)sqrt($num), 2, '.', '');
}
?>
<html>
<head>
    <title> Square Root Sum</title>
    <style>
        table,td,tr{
            border: 1px solid black;
        }
    </style>
</head>
<body>
<table>
    <tbody>
    <?php
    $sum = 0;
    for($i=0 ; $i<=100; $i++){
    ?>
    <tr>
        <?php
        if($i % 2 == 0){
        ?>
            <td><?php echo $i; ?></td>
            <td><?php
                $sum+=SquareRoot($i);
                echo SquareRoot($i);
                ?>
            </td>
        <?php
        }
        ?>
    </tr>
    <?php
    }
    ?>
    <tr>
        <td>Sum</td>
        <td><?php echo $sum; ?></td>
    </tr>
    </tbody>
</table>
</body>
</html>