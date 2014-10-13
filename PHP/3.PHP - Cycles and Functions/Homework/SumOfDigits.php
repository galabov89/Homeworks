<?php
function GetArray($input){
    $arr = array();
    $arr = explode(', ', $input);
    return $arr;
}
?>
<html>
<head>
    <title> Sum Of Digits </title>
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
    <?php
    if(isset($_POST['submit'])){
        $values = $_POST['text'];
        foreach (GetArray($values) as $value) {
            $sum = 0;
            for($i = 0; $i<strlen($value);$i++){
                $sum+=$value[$i];
            }
            ?>
            <tr>
                <td><?php echo $value; ?></td>
                <td><?php
                    if(is_numeric($value)){
                        echo $sum;
                    }
                    else{
                        echo 'I can not sum that';
                    }
                    ?>
                </td>
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