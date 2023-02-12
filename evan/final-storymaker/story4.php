<?php /*
--COMMENTS--
TODO: Make choices adaptable to story content
from 2, extra homework doesn't exist yet, but does from 1.
meh, still kinda makes sense.
*/ ?>
Steve decides to slack off on his homework.
<br><br>
Steve grew less interested in his studies and more disruptive in class.
<br><br>
Bob, what will you do?

<br><br>
<?php
echo outlineButton("1", "success", "Invest in Steve") . " ";
echo outlineButton("6", "warning", "Go abuela-mode") . " ";
echo outlineButton("2", "danger", "Ignore Steve");
?>