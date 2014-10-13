<form method="post">
    Enter amount <input type="text" name="amount"><br>
    <input type="radio" name="usd">USD <input type="radio" name="eur">EUR <input type="radio" name="bgn">BGN<br>
    Compound Interest Amount <input type="text" name="interest"><br>
    <select name="time[]">
        <option value="6">6 Months</option>
        <option value="12">1 Year</option>
        <option value="24">2 Years</option>
        <option value="60">5 Years</option>
    </select>
    <input type="submit" name="submit">
</form>
<?php

if(isset($_POST["submit"])){
    if(isset($_POST["amount"])){

        if (!is_numeric($_POST["amount"])) {
            echo $_POST["amount"]." is not an integer number";
            die;
        }
    }

    if(isset($_POST["interest"])){

        if (!is_numeric($_POST["interest"])) {
            echo $_POST["interest"]." is not an integer number";
            die;
        }
    }
    $amount = $_POST["amount"];
    $interest = $_POST["interest"]/12;
    $sum = 0;
    for($i = 0; i< $_POST["time"];$i++){
        $sum+=$amount*(100+$interest);
    }


    if(isset($_POST["usd"])){
        echo "$".number_format((float)$sum, 2, '.', '');
    }
    if(isset($_POST["eur"])){
        echo "Eu".number_format((float)$sum, 2, '.', '');
    }
    if(isset($_POST["bgn"])){
        echo "bg".number_format((float)$sum, 2, '.', '');
    }
}
?>

