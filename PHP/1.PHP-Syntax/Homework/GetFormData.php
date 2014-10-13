<html>
<head>
    <title>Get Form Data</title>
</head>
<body>
<form  method="post">
    <input type="text" name="Name" ><br>
    <input type="text" name="age" ><br>
    <input type="checkbox" name="Male" value="male" id="box">Male<br>
    <input type="checkbox" name="Female" value="female" id="box">Female<br>
    <button id="log">Send</button>
</form>
My name is <?php echo $_POST["Name"].". "; ?>
I am <?php echo $_POST["age"]; ?> years old.
I am <?php
if(isset($_POST['Male']) == 1){
    echo 'male';
}
if(isset($_POST['Female']) == 1){
    echo 'female';
}

//    $male= $__POST["Male"];
//    $female = $__POST["Female"];
//    if($male == "male"){
//       echo Male ;
//    }
//    if($female == 'female'){
//        echo Female;
//    }
?>.


</body>
</html>
