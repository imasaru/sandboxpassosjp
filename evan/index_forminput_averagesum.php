<html>

<head>
    <title id="title">index_forminput_averagesum.php</title>
</head>

<!--
[2023-01-12] Removed Moodle login inputs.
[2023-01-12] Removed hardcoded option boxes from form, leaving only auto-generated ones (func autoLoop).
[2023-01-12] Moved function optionLoop to functions.php
[2023-01-12] Moved variables number1~10 from functions.php
-->

<br>

<?php
include "functions.php";

if (!empty($_POST)) {
    echo "<strong>POST Contents:</strong><br>";
    print_r($_POST);
}
?>

<hr>

<h1>Ten Numbers' Average and Sum Generator</h1>

<?php

if (isset($_POST["number1"])) {
    //  echo "SET";
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];
    $number3 = $_POST["number3"];
    $number4 = $_POST["number4"];
    $number5 = $_POST["number5"];
    $number6 = $_POST["number6"];
    $number7 = $_POST["number7"];
    $number8 = $_POST["number8"];
    $number9 = $_POST["number9"];
    $number10 = $_POST["number10"];
} else {
    //  echo "NOTSET";
    $number1 = 0;
    $number2 = 0;
    $number3 = 0;
    $number4 = 0;
    $number5 = 0;
    $number6 = 0;
    $number7 = 0;
    $number8 = 0;
    $number9 = 0;
    $number10 = 0;
}

?>


<body>

    <form method="post">

        <?php

        for ($i = 1; $i <= 10; $i++) {
            makeNumDropdown("$i", 100);
            echo "<br>";
        }
        ?>

        <br>

        <?php
        if (isset($_POST["number1"])) {

            echo "Numbers received: $number1, $number2, $number3, $number4, $number5, $number6, $number7, $number8, $number9, $number10";
            echo "<br>";
            switch ($_POST["do"]) {
                case "doaverage":
                    echo "Average: " . average_ten($number1, $number2, $number3, $number4, $number5, $number6, $number7, $number8, $number9, $number10);
                    break;
                case "dosum":
                    echo "Sum: " . sum_ten($number1, $number2, $number3, $number4, $number5, $number6, $number7, $number8, $number9, $number10);
                    break;
                case "doaveragesum":
                    echo "Average: " . average_ten($number1, $number2, $number3, $number4, $number5, $number6, $number7, $number8, $number9, $number10);
                    echo "<br>";
                    echo "Sum: " . sum_ten($number1, $number2, $number3, $number4, $number5, $number6, $number7, $number8, $number9, $number10);
            }
        }

        ?>
        <br>
        <button type=submit name="do" value="doaverage">Average</button>
        <button type=submit name="do" value="dosum">Sum</button>
        <br>
        <button type=submit name="do" value="doaveragesum">Average & Sum</button>
        <br>
        <br>
        <input type=reset>
    </form>

</body>

</html>