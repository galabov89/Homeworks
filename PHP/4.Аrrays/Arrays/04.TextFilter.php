<?php

function StrintToStars($word){

    $output = "";
    for($i = 0; $i< strlen($word); $i++){
        $output.="*";
    }

    return $output;
}
?>

<html>
<head>
    <title> Text Filter </title>
</head>
<body>
<form method = "post">
    <textarea name="textarea" rows="10" cols="70"></textarea><br>
    <input type="text" name="banlist" width="200"><br>
    <input type="submit" name="submit" value="Count words">
</form>
<?php
if(isset($_POST['submit'])){
    $text = $_POST['textarea'];
    $list = explode(', ',$_POST['banlist']);

    foreach ($list as $key => $value) {
        $text = str_replace($value,StrintToStars($value),$text);
    }

    echo "<p>.$text.</p>";
}
?>

</body>
</html>