<html>
<head>
    <title> Word Count </title>
    <style>
       .red{
           color: red;
       }
        .blue{
            color: blue;
        }
    </style>
</head>
<body>
<form method = "post">
    <textarea name="textarea" rows="10" cols="70"></textarea><br>
    <input type="submit" name="submit" value="Count words">
</form>
<?php
if(isset($_POST['submit'])){
    $text = $_POST['textarea'];
    $allWords = explode(' ',$text);
    echo"<p>";

    foreach ($allWords as $key=>$value) {
        //print_r($value);
        for($i = 0; $i < strlen($value); $i++){
            $char = $value[$i];
            if(ord($char)%2 == 0){
                echo "<span class=\"red\">$char</span>";
                echo "<span> </span>";
            }
            else{
                echo "<span class=\"blue\">$char</span>";
                echo "<span> </span>";
            }
        }
    }

    echo"</p>";
}
?>

</body>
</html>