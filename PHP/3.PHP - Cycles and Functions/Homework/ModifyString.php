<?php

function isPalindrome($input)
{
    $len = strlen($input);

    $isPalindrome = true;


// only have to iterate through half the length of the string
	for($j = 0; $j<$len/2; $j++)
	{
        if($input[$j] != $input[$len - 1 -$j])
		{
            $isPalindrome = false;
            break;
        }
	}

	return $isPalindrome;
}

function SplitString($input){
    $arr = array();
    $arr = explode(' ', $input);
    $output = "";
    foreach ($arr as $word) {

        for($i = 0; $i < strlen($word); $i++){
            $output.=$word[$i];
            $output.=" ";
        }
    }

    return $output;
}

?>
<html>
<head>
    <title> Modify String </title>
</head>
<body>
<form method="post">
    <input type="text" name="text">
    <input type="radio" name="palindrome">
    <label> Check Palindrome </label>
    <input type="radio" name="reverse">
    <label> Reverse String </label>
    <input type="radio" name="split">
    <label> Split </label>
    <input type="radio" name="hash">
    <label> Hash String </label>
    <input type="radio" name="shuffle">
    <label> Shuffle string </label>
    <input type="submit" name="submit">
</form>
    <?php
    if(isset($_POST['submit'])){
    ?>


        <?php
        //Palindrome
        if(isset($_POST['palindrome'])){
            $palindrome = $_POST['text'];
        ?>
        <p><?php
            if(isPalindrome($palindrome)){
                echo $palindrome." is palindrome";
            }
            else{
                echo $palindrome." is not palindrome";
            }
            ?>
        </p>
        <?php
        }
        ?>

        <?php
        //Reverse
        if(isset($_POST['reverse'])){
            $reverse = $_POST['text'];
            ?>
            <p><?php
                    echo strrev($reverse) ;
                ?>
            </p>
        <?php
        }
        ?>

        <?php
        //Split
        if(isset($_POST['split'])){
            $split = $_POST['text'];
            ?>
            <p><?php
                echo SplitString($split);
                ?>
            </p>
        <?php
        }
        ?>

        <?php
        //Hash
        if(isset($_POST['hash'])){
            $hash = $_POST['text'];
            ?>
            <p><?php
                echo md5($hash);
                ?>
            </p>
        <?php
        }
        ?>

        <?php
        //Shuffle
        if(isset($_POST['shuffle'])){
            $shuffle = $_POST['text'];
            ?>
            <p><?php
                echo str_shuffle($shuffle);
                ?>
            </p>
        <?php
        }
        ?>

    <?php
    }
    ?>

</body>
</html>