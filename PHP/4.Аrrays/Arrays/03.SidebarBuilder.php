<html>
<head>
    <title> Sidebar Builder </title>
    <style>
        .outer{
            border: 1px solid black;
            width: 150px;
            border-radius: 10px;
            margin-bottom: 15px;
            background: #d0e6f4; /* Old browsers */
            background: -moz-linear-gradient(top, #d0e6f4 2%, #d0e6f4 2%, #d0e6f4 22%, #2989d8 50%, #5a97c9 99%); /* FF3.6+ */
            background: -webkit-gradient(linear, left top, left bottom, color-stop(2%,#d0e6f4), color-stop(2%,#d0e6f4), color-stop(22%,#d0e6f4), color-stop(50%,#2989d8), color-stop(99%,#5a97c9)); /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(top, #d0e6f4 2%,#d0e6f4 2%,#d0e6f4 22%,#2989d8 50%,#5a97c9 99%); /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(top, #d0e6f4 2%,#d0e6f4 2%,#d0e6f4 22%,#2989d8 50%,#5a97c9 99%); /* Opera 11.10+ */
            background: -ms-linear-gradient(top, #d0e6f4 2%,#d0e6f4 2%,#d0e6f4 22%,#2989d8 50%,#5a97c9 99%); /* IE10+ */
            background: linear-gradient(to bottom, #d0e6f4 2%,#d0e6f4 2%,#d0e6f4 22%,#2989d8 50%,#5a97c9 99%); /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d0e6f4', endColorstr='#5a97c9',GradientType=0 ); /* IE6-9 */
        }

        ul{
            list-style: circle;
        }

        h1{
            display: block;
            font-size: 15px;
            font-family: Verdana;
            border-bottom: 1px solid black;
            margin-left: 10px;
        }

    </style>
</head>
<body>
<form method = "post">
    <label>Categories</label>
    <input type="text" name="categories"><br>
    <label>Tags</label>
    <input type="text" name="tags"><br>
    <label>Months</label>
    <input type="text" name="months"><br>
    <input type="submit" name="submit" value="Generate">
</form>
<?php
if(isset($_POST['submit'])){
    $categoris = explode(', ',$_POST['categories']);
    $tags =  explode(', ',$_POST['tags']);
    $months =  explode(', ',$_POST['months']);

    echo "<div class='outer'>";
    echo "<h1> Categories</h1>";
    echo"<ul>";
    foreach ($categoris as $key => $value) {
        echo "<li><a href=''>$value</a></li>";
    }
    echo"</ul>";
    echo"</div>";

    echo "<div class='outer'>";
    echo "<h1> Tags </h1>";
    echo"<ul>";
    foreach ($tags as $key => $value) {
        echo "<li><a href=''>$value</a></li>";
    }
    echo"</ul>";
    echo"</div>";

    echo "<div class='outer'>";
    echo "<h1> Months </h1>";
    echo"<ul>";
    foreach ($months as $key => $value) {
        echo "<li><a href=''>$value</a></li>";
    }
    echo"</ul>";
    echo"</div>";
}
?>

</body>
</html>