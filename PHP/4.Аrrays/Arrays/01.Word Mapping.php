<html>
<head>
    <title> Word Count </title>
    <style>
        table,td,tr{
            border: 1px solid black;
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
    $allWords = [];
    //str_word_count($str, 1)
    $allWords = preg_split("/\W+/", strtolower($text),-1, PREG_SPLIT_NO_EMPTY);
    $counts = array_count_values($allWords);
    arsort($counts);
}
?>
<table>
    <?php foreach ($counts as $word => $count) : ?>
        <tr>
            <td><?=$word?></td>
            <td><?=$count?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>