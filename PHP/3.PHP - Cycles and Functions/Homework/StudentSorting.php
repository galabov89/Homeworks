<?php

class Student{
    var $firstname;
    var $lastname;
    var $email;
    var $score;

    public function __construct($firstname,$lastname,$email,$score)
    {
        $this->firstname =$firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->score = $score;
    }
}

$students = array();
$finalScore = 0;

?>
<html>
<head>
    <title> Student Sorting</title>
    <style>
        table,tr,td{
            border: 1px solid black;
        }
        td{
            text-align: center;
            padding-right: 5px;
            padding-left: 5px;
        }
        #avg{
            text-align: left;
        }
    </style>

</head>
<body>
<form method="post" id="formId">

    <div id="wrapper">
        <!--Here will appear the new fields-->
    </div>

    <button type="button" id="addFieldButton">+</button>
    <label> Sort by: </label>
    <select name="info[]">
        <option value="firstname"> First Name </option>
        <option value="secondname"> Last Name </option>
        <option value="email"> Email </option>
        <option value="score"> Exam Score </option>
    </select>
    <label> Order by: </label>
    <select name="order[]">
        <option value="up"> Ascending </option>
        <option value="down"> Descending </option>
    </select>
    <input type="submit" name="submit">

</form>
<table>
    <thead>
    <tr>
        <td> First Name </td>
        <td> Last Name </td>
        <td> Email </td>
        <td> Exam Score </td>
    </tr>
    </thead>
    <tbody>
    <?php
    if(isset($_POST['submit'])){
        ?>
        <?php
        if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['score'])){
            ?>

            <?php
            for($i = 0; $i<count($_POST['first_name']); $i++){
                $student = new Student($_POST['first_name'][$i], $_POST['last_name'][$i], $_POST['email'][$i], $_POST['score'][$i]);
                array_push($students,$student);
            }
            // print_r($students);
            ?>

            <?php
            //Sort by First name
            if($_POST['info'][0] == 'firstname' && $_POST['order'][0]=='up'){
                usort($students, function($a, $b) {
                    return strcasecmp($a->firstname,$b->firstname);
                });
            }

            if($_POST['info'][0] == 'firstname' && $_POST['order'][0]=='down'){
                usort($students, function($a, $b) {
                    return strcasecmp($b->firstname,$a->firstname);
                });

            }

            //Sort by Last name
            if($_POST['info'][0] == 'lastname' && $_POST['order'][0]=='up'){
                usort($students, function($a, $b) {
                    return strcasecmp($a->lasttname,$b->lasttname);
                });
            }

            if($_POST['info'][0] == 'lastname' && $_POST['order'][0]=='down'){
                usort($students, function($a, $b) {
                    return strcasecmp($b->lasttname,$a->lasttname);
                });

            }

            //Sort by Email
            if($_POST['info'][0] == 'email' && $_POST['order'][0]=='up'){
                usort($students, function($a, $b) {
                    return strcasecmp($a->email,$b->email);
                });
            }

            if($_POST['info'][0] == 'email' && $_POST['order'][0]=='down'){
                usort($students, function($a, $b) {
                    return strcasecmp($b->email,$a->email);
                });

            }

            //Sort by Score
            if($_POST['info'][0] == 'score' && $_POST['order'][0]=='up'){
                usort($students, function($a, $b) {
                    return $a->score - $b->score ;
                });
            }

            if($_POST['info'][0] == 'score' && $_POST['order'][0]=='down'){
                usort($students, function($a, $b) {
                    return $b->score - $a->score ;
                });
            }

            ?>

            <?php
            foreach ($students as $student) {
            ?>
                <tr>
                    <td><?php echo $student->firstname; ?></td>
                    <td><?php echo $student->lastname; ?></td>
                    <td><?php echo $student->email; ?></td>
                    <td>
                        <?php
                        $finalScore+=$student->score;
                        echo $student->score;
                        ?>
                    </td>
                </tr>
            <?php
            }
            ?>
        <?php
        }
        ?>
    <?php
    }
    ?>
    <tr>
        <td colspan="3" id="avg">
            Average score
        </td>
        <td>
            <?php echo $finalScore; ?>
        </td>
    </tr>
    </tbody>
</table>

<script >
    var wrapper = document.getElementById('wrapper');
    wrapper.addEventListener('click', function(e){
        if(e.target.getAttribute('class')== 'removeButton'){
            var  parent = e.target.parentNode;
            wrapper.removeChild(parent);
        }
        e.preventDefault();
        return false;
    })

    var addButton = document.getElementById('addFieldButton');
    addButton.addEventListener('click', function(e){
        addField();
        e.preventDefault();
        return false;
    })

    function addField(){
        var inputHtml = '<input type="text" name="first_name[]"/>' + '<input type="text" name="last_name[]"/>' + '<input type="text" name="email[]"/>' + '<input type="text" name="score[]"/>' + '<button type="button" class="removeButton"/>-</button>'
        var div = document.createElement('div');
        div.innerHTML = inputHtml;
        wrapper.appendChild(div);

    }
</script>
</body>
</html>