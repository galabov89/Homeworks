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
    <input type="text" name="word" width="200"><br>
    <input type="submit" name="submit" value="Count words">
</form>
<?php
if(isset($_POST['submit'])){
    $text = $_POST['textarea'];
    $word = $_POST['word'];

    $sentences = preg_split("/(?<=[.?!])\s*/", $text, -1, PREG_SPLIT_NO_EMPTY);

    foreach ($sentences as $sentence) {
        if (preg_match("/\s+$word\s+.*[.?!]+$/", $sentence)) {
            echo "<p>$sentence</p>";
        }
    }

}
?>

</body>
</html>