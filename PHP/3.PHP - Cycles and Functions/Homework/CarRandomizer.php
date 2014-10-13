<?php
function CarRandomizer($input){
    $cars = array();
    $cars = explode(', ', $input);
    return $cars;
}

function GenerateColor(){

   $color = rand ( 0 , 5 );
    if($color == 0){
        return 'green';
    }
    if($color == 1){
        return 'blue';
    }
    if($color == 2){
        return 'white';
    }
    if($color == 3){
        return 'purple';
    }
    if($color == 4){
        return 'black';
    }
    if($color == 5){
        return 'orange';
    }
}

function GenerateNumber(){

    return rand(0,5);
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
    <label>Enter Cars</label>
    <input type="text" name="text">
    <input type="submit" name="submit">
</form>
<table>
    <tbody>
    <tr>
        <td><b>Car</b></td>
        <td><b>Color</b></td>
        <td><b>Count</b></td>
    </tr>
    <?php
    if(isset($_POST['submit'])){
        $cars = $_POST['text'];
        foreach (CarRandomizer($cars) as $car) {
        ?>
            <tr>
                <td><?php echo $car; ?></td>
                <td><?php echo GenerateColor(); ?></td>
                <td><?php echo GenerateNumber(); ?></td>
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