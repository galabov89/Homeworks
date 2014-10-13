<?php
function isPrime($num) {
    //1 is not prime. See: http://en.wikipedia.org/wiki/Prime_number#Primality_of_one
    if($num == 1)
        return false;

    //2 is prime (the only even number that is prime)
    if($num == 2)
        return true;

    /**
     * if the number is divisible by two, then it's not prime and it's no longer
     * needed to check other even numbers
     */
    if($num % 2 == 0) {
        return false;
    }

    /**
     * Checks the odd numbers. If any of them is a factor, then it returns false.
     * The sqrt can be an aproximation, hence just for the sake of
     * security, one rounds it to the next highest integer value.
     */
    for($i = 3; $i <= ceil(sqrt($num)); $i = $i + 2) {
        if($num % $i == 0)
            return false;
    }

    return true;
}
?>
<html>
<head>
    <title> Prime Numbers </title>
</head>
    <body>
        <form method="post">
            <label>Starting Index:</label>
            <input type="text" name="start">
            <label>End:</label>
            <input type="text" name="end">
            <input type="submit" name="submit" >
        </form>
        <?php
            if(isset($_POST['submit'])){
           $start = $_POST['start'];
           $end = $_POST['end'];
            $append = ", ";
        ?>
        <p>

            <?php
            for($i=$start; $i<=$end; $i++){
            ?>
            <?php
            if($i == $end){
                $append = "";
            }?>

                <?php
                if(isPrime($i)){
                    ?>
                    <b><?php echo $i; ?></b><?php echo $append; ?>
                <?php
                }
                ?>

                <?php
                if(!isPrime($i)){
                    ?>
                    <?php echo $i; ?><?php echo $append; ?>
                <?php
                }
                ?>

            <?php
            }
            ?>

        </p>
        <?php
        }
        ?>
    </body>
</html>