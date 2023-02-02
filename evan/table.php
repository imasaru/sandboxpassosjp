<html>
<h1>Table.php</h1>

<?php
// output print, function include
echo "<strong>Output:</strong><br>";
print_r($_POST);
include "functions.php";
?>

<!-- 
php
// check if row and col are set
if (isset($_POST["row"])) {
    $row = $_POST["row"];
} else {
    // Default value
    $row = 3;
}

if (isset($_POST["col"])) {
    $col = $_POST["col"];
} else {
    // Default value
    $col = 3;
}

-->
<hr>
<form method="post">

    <?php
    makeNumDropdown("Rows", "row", 3, 10, "");
    echo "<br>";
    makeNumDropdown("Colms", "col", 3, 10, "");
    ?>
    <br>

    <!-- 
<label>Columns:
<select name="col">
<?php
//  echo "<option value='$col'>$col</option>";
?>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
</select>
</label>
-->
    <input type=submit>
    <input type=reset>
</form>
<br>
<br>
<?php
// call makeTable from functions.php
makeTable($row, $col);
?>

</html>