<?php

// Loads story from text file
function loadStory($story)
{
}


// Displays story text from text file
function displayStorySimple($story, $storynum)
{
    $story = file_get_contents("story$storynum.txt");
    echo $story;
}

// Keep this for now, but it's not really necessary
function displayStoryOptions


// Displays story text from text file by number, arc, and section
// This feels too specific for now. Just make one story.
function displayStorySection($story, $storynum, $arc, $section)
{

}





?>