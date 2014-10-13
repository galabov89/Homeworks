<html>
    <head>
        <title>Table</title>
    </head>
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        table,tr,td{
            border: 1px solid black;
            border-collapse: collapse;
        }
        td{
            width: 125px;
            margin-right: -5px;
            font-family: Arial;
            padding: 5px;
        }
        .left{
            background-color: orange;
            font-weight: bold;
        }
        .right{
            text-align: right;
        }
    </style>
<body>
    <?php
    $name = "Gosho";
    $phoneNumber = "0882-321-423";
    $age = 25;
    $address = "Hadji Dimityr";
    ?>
    <table>
        <tbody>
            <tr>
                <td class="left">Name</td>
                <td class="right"><?php echo $name ?></td>
            </tr>
            <tr>
                <td class="left">Phone number</td>
                <td class="right"><?php echo $phoneNumber ?></td>
            </tr>
            <tr>
                <td class="left">Age</td>
                <td class="right"><?php echo $age ?></td>
            </tr>
            <tr>
                <td class="left">Address</td>
                <td class="right"><?php echo $address ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>