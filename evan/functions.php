<html>

<head>
    <title id="title">functions.php</title>
</head>
<h1>Functions.php</h1>

<!--
[2023-01-12] Added hardcoded 10-input function
[2023-01-12] Moved functions + variables to functions.php
[2023-01-12] Moved variables number1~10 to average_autogenerate.php
[2023-01-19] Added functions generateOptionForm and generateSelectorForm
-->

<?php

function my_sum($a, $b)
{

    return ($a + $b);
}

function my_average($a, $b)
{

    return ($a + $b) / 2;

}

function average_ten($a, $b, $c, $d, $e, $f, $g, $h, $i, $j)
{

    return ($a + $b + $c + $d + $e + $f + $g + $h + $i + $j) / 10;

}


function sum_ten($a, $b, $c, $d, $e, $f, $g, $h, $i, $j)
{

    return ($a + $b + $c + $d + $e + $f + $g + $h + $i + $j);

}

function makeNumDropdown($number, $count)
{
    echo "Number $number: ";
    echo "<select name=\"number$number\" id=\"number$number\">";

    for ($n_option = 0; $n_option <= $count; $n_option++) {
        echo "<option value=$n_option>$n_option</option>";
    }
    echo "</select>";
}

function makeTable($row, $col)
{
    echo "Rows: $row";
    echo "<br>";
    echo "Columns: $col";
    echo "<br><br>";

    echo "<table border=2 width='100%'>";
    while ($row > 0) {
        echo "<tr>";

        while ($col > 0) {
            echo "
                    <td>
                    </td>   
                ";

            $col = $col - 1;
        }

        echo "</tr>";

        // With this, no need to initialize extra variable to track
        $row = $row - 1;

        /*    
        for ($i, $i < $row, $i++){
        if ($col>0){
        echo "<tr>";
        echo "<td>";
        echo "</td>";
        echo "</tr>";
        }
        }
        */
    }
    echo "</table>";
}

function makeNumDropdownForm($label, $name, $selectcount, $optionmax)
{
    // Check if number vars are set in POST
    for ($i = 1; $i <= $selectcount; $i++) {
        // I know, I know... string concatenation not ideal. I wanna sleep.
        if (isset($_POST["number$i"])) {
            //  echo "SET";
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

    // Deleting average, sum, submit button generation; reverting to generic number selector
    /*
    // Do average, sum operation
    if (isset($_POST["number1"])) {
        // TODO: Dynamically echo number vars instead of hardcoding.
        echo "<br>";
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

    if (isset($_POST["number1"])) {
    // WIP: Dynamically add number variables to echo instead of hardcoding.
    echo "<br>";
    echo "Numbers received: $numberlist";
    echo "<br>";
    switch ($_POST["do"]) {
    case "doaverage":
    echo "Average: " . average_ten($numberlist);
    break;
    case "dosum":
    echo "Sum: " . sum_ten($numberlist);
    break;
    case "doaveragesum":
    echo "Average: " . average_ten($numberlist);
    echo "<br>";
    echo "Sum: " . sum_ten($numberlist);
    }
    } 
    echo '<br><br>';
    echo '<button type=submit name="do" value="doaverage">Average</button>';
    echo '<button type=submit name="do" value="dosum">Sum</button>';
    echo '<br>';
    echo '<button type=submit name="do" value="doaveragesum">Average & Sum</button>';
    echo '<br>';
    

    echo '<br>';
    // TODO: Make reset button clear input from dropdowns, changing to zero.
    echo '<input type=submit>';
    echo '<input type=reset>';
    echo '</form>';
    */
}


function generateInputForm($label, $name, $count)
{
    echo '<form method="post">';


}

function passosLoop($x)
{

    /* Idea for total-agnostic consistent faculty image break on webpage
    Initialize + check for URL vars in consistent counting format
    Dynamically change image to print
    */

    $passosImgCount = 0;
    // need to initialize in advance
    $passosImgURL = "NA";
    $imgBreakCount = 0;

    $passosImg0 = 'https://drive.google.com/uc?id=1FOVeVh4XWPRQfCM7FtZfgBjDeS-63cNw';
    $passosImg1 = 'https://drive.google.com/uc?id=12e4BvybTECtPpna-qiDLwH44xRiImUQJ';
    $passosImg2 = 'https://www.mic.ac.jp/files/blog/22/blog_posts/2018/01/00000006_eye_catch.jpg?1357309428';

    // changed print count from 0 to 1 to make remainder division work/avoid div by zero
    // "printing for first time"
    for ($printCount = 1; $printCount < $x; $printCount++) {
        // check for passos images
        if (isset(${'passosImg' . $passosImgCount})) {

            // combine name template with img count
            $passosImgURL = ${'passosImg' . $passosImgCount};
            $passosImgID = 'passosImg' . $passosImgCount;

        } else {

            // any shorter way to reset to zero?
            $passosImgCount = 0;
            $passosImgURL = ${'passosImg' . $passosImgCount};

        }
        echo '<img src="' . $passosImgURL . '" alt="' . $passosImgID . '">';
        $passosImgCount++;
        if ($printCount % 4) {
            echo '<br>';
            $imgBreakCount++;
        }
    }
}

?>

</html>