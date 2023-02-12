<?php /*
 --COMMENTS--
 TODO: Split file to reuse story content
 TODO: consider specifying font for emoji in styles (Windows, which doesn't have colored flag emoji by default)
 */?>

Bob decides to speak Spanish.
<br><br>
Fortunately, Bob had studied Spanish diligently in his high school years, so he picks up the ol' lengua in no time 🇪🇸
<br><br>
Steve, snapping out of his hallucination (but still speaking Spanish), realizes that his secret plan to assemble amigos
and foment revolution would easily be discovered by Bob, and is stuck on the next step...
<br><br>
Steve, what will you do?
<br><br>

<?php
echo outlineButton("14", "warning", "Ponder an alternative") . " ";
echo outlineButton("2-danger-behave", "success", "Reconcile con Bob");
?>