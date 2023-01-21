<html>

<head>
    <title id="title">index_forminput_averagesum-generatedform.php</title>
</head>

<!--
[2023-01-12] Removed Moodle login inputs.
[2023-01-12] Removed hardcoded option boxes from form, leaving only auto-generated ones (func autoLoop).
[2023-01-12] Moved function optionLoop to functions.php
[2023-01-12] Moved variables number1~10 from functions.php
-->

<br>
<?php
if (!empty($_POST)) {
    echo "<strong>POST Contents:</strong><br>";
    print_r($_POST);
}

function makeNumDropdownForm($label, $name, $selectcount, $optionmax)
{
    // Loop number var check
    for ($i = 1; $i <= $selectcount; $i++) {
        // Check if number vars are set in POST, and if so, set them as variables.
        if (isset($_POST["number$i"])) {
            //  echo "SET";
            // I know, I know... string concatenation not ideal. I wanna sleep.
            ${"number" . $i} = $_POST["number$i"];
        } else {
            //  echo "NOTSET";
            ${"number" . $i} = 0;
        }
    }

    // Create form and options
    echo "<form method='post'>";
    // TODO: Make existing option values remain selected in dropdown if already set from POST.
    for ($selectvalue = 1; $selectvalue <= $selectcount; $selectvalue++) {
        echo "$label $selectvalue: ";
        echo "<select name='$name$selectvalue' id='$name$selectvalue'>";
        for ($optionvalue = 0; $optionvalue <= $optionmax; $optionvalue++) {
            echo "<option value=$optionvalue>$optionvalue</option>";
            echo "<br>";
        }
        echo '</select>';
        echo '<br>';
    }
    echo '</form>';

    // Echo number vars received from POST
    echo "<br>";
    echo "Numbers received: ";
    for ($i = 1; $i <= $selectcount; $i++) {
        echo ${"number" . $i} . ", ";
    }

    /*  
    // Echo number vars received from POST if set
    if (isset($_POST["number1"])) {
    echo "<br>";
    echo "Numbers received: $number1, $number2, $number3, $number4, $number5, $number6, $number7, $number8, $number9, $number10";
    echo "<br>";
    }
    */
}

?>
<hr>

<h1>Ten Numbers' Average and Sum Generator</h1>

<body>
    <!-- Buttons for selecting average, sum, or both -->
    <select name="do" id="do">
        <option value="doaverage">Average</option>
        <option value="dosum">Sum</option>
        <option value="doaveragesum">Average & Sum</option>
    </select>
    <br><br>
    <?php

    makeNumDropdownForm("Number", "number", 10, 100);

    // Echo average, sum, or both depending on button selected
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

    ?>

    <input type="submit" value="Submit">
    <input type="reset" value="Reset">

</body>

</html>