<?php
session_start();
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
} else {
    $_SESSION['count']++;
    echo $_SESSION['count'];
}

?>
<html>
<head>

</head>
<body>
    <form>
        <input type="submit" name="submit">
    </form>
    <?php
    if(isset($_POST["submit"])){
        echo "<p>".$_SESSION['count']."</p>";
    }
    ?>

</body>
</html>