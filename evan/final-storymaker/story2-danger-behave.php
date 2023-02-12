<?php /*
--COMMENTS--
TODO: Isolate decision-making code into a function. Need to be able to reuse story content without rewriting for different decisions.

*/ ?>

Steve decides to behave himself.
<br><br>
With Steve in his place and the class under control, Bob decides to organize a class drama on the importance of obedience.
<br><br>
To prepare for the presentation, Bob hands out preparation materials to the class, and gives extra to Steve.
<br><br>
Steve, what will you do?

<br><br>
<?php
echo genericButton("4", "btn-outline-danger", "Forsake Bob") . " ";
echo genericButton("9", "btn-outline-success", "Do the homework");
?>