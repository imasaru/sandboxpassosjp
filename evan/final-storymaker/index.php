<?php
// Passos: Separate code from markup
include "functions.php";

if (isset($_GET["story"])) {
    $story = $_GET["story"];
} else {
    $story = "0";
}
?>

<!doctype html>
<html lang="en">
<!-- Passos: DO NOT FORGET - HTML file must include proper formatting doctype, head, title, (+meta), body -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- TODO: Deliver story title and header via function -->
    <title>
        <?php /*="(story$story)"; */?> The Bald Teacher and the Troublemaker | Choose Your Own Story
    </title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    <div class="container">
        <!-- Err... center tag is just too convenient. -->
        <center>
            <h1>Choose Your Own Story</h1>
            <strong>
                <p>(the thing that Passos was talking about)</p>
            </strong>
        </center>
        <br>
        <h2>The Bald Teacher and the Troublemaker</h2>

        <?php echo displayStory($story); ?>
        <br><br>
        <?php echo createStoryButton("0", "btn-secondary bi bi-arrow-counterclockwise", "Start Over"); ?>
    </div>
</body>

</html>