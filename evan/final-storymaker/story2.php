<?php /*
--COMMENTS--
TODO: Gotta make so that by the third time of ignoring Bob, Steve automatically takes things up a level (the option to continue the same way is removed)

*/ ?>
Bob decides to ignore Steve.
<br><br>
Steve grew less interested in his studies and became more disruptive in class.
<br><br>
Steve, what will you do?

<br><br>
<?php
echo outlineButton("2-2", "danger", "Turn things up a level") . " ";
echo outlineButton("4", "success", "Continue slacking off");
?>