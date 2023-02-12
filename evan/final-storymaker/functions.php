<?php

// Displays story text from text file
function displayStory($story)
{
  $filename = "story" . $story;
  // Prefer PHP files over TXT files, so check for PHP file first
  if (file_exists($filename . ".php")) {

    // TODO: Dynamically retrieve story title and display it
    include $filename . ".php";

    // Strip HTML and PHP tags to prepare for Typed.js
    // $file_data = file_get_contents($filename . ".php");

    // Strip HTML and PHP tags
    // $file_data = strip_tags($file_data);

    // Display the content on the page using Typed.js
    // echo '<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12></script>';
    // echo '<script>';
    // echo '  var typed = new Typed("#typed", { strings: [';
    // echo '    `' . $file_data . '`';
    // echo '  ], stringsElement: null, typeSpeed: 20, startDelay: 1500});';
    // echo '</script>';
    // echo '<div id="typed"></div>';

    // TODO: Consider using fileinfo function to determine file type instead of checking for .txt and .php extensions
  } elseif (file_exists($filename . ".txt")) {
    echo file_get_contents($filename . ".txt");
  } else {
    echo "Oops! Story not found.";
    echo "<br><br>";
    echo createBackButton();
  }
}

// TODO: function displayStoryHeader

// TODO: function displayStoryDecision
// Considerations: should make option to display different text post-decision ("full version") than text displayed on button pre-decision ("short version").

// TODO: function displayStoryDecisionButton

// Creates Bootstrap outline button with link to story
function outlineButton($storynum, $type, $label)
{
  // TODO: Read story options from story file
  // Example: "1 (danger): Go to the bathroom, 2 (success): Go to the office"
  return "<a href='?story=$storynum' type='submit' class='btn btn-outline-$type'>$label</a>";
}

// Creates generic Bootstrap button with link to story
function genericButton($storynum, $type, $label)
{
  return "<a href='?story=$storynum' type='submit' class='btn $type'>$label</a>";
}

// Button creator function made by AI.
// Notable features: uses variable names matching original HTML tag attributes, in order of appearance.
// TODO: Combine with outlineButton and genericButton
function createStoryButton($href, $class, $label)
{
  if (str_contains($class, "bi-")) {
    $label = " " . $label;
  }
  return "<a href='?story=$href' class='btn $class'>$label</a>";
}

function createBackButton (){
return "<a href='javascript:void(0)' onclick='history.back()' class='btn btn-primary bi bi-arrow-left-square-fill'> Go Back</a>";
}

?>