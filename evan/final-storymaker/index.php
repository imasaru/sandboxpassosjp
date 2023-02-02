<!doctype html>
<html lang="en">
<!-- Passos: DO NOT FORGET - HTML file must include proper formatting doctype, head, title, (+meta), body -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Choose Your Own Story</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<body>
    <div class="container">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

    <?php
    include "functions.php";
    include "story.php";

    if (isset($_POST["storynum"])) {
        $storynum = $_POST["storynum"];
    } else {
        $storynum = 0;
    }

    ?>

    <h1>Choose Your Own Story</h1>
    <h5>The thing that Passos was talking about.</h5>

    <?php if ($storynum == 0) { ?>
        <form method="post">
            <label>Story:
                <select name="storynum">
                    <option value="0">Choose a story</option>
                    <option value="1">Story 1</option>
                    <option value="2">Story 2</option>
                    <option value="3">Story 3</option>
                </select>
            </label>
            <br>
            <input type=submit>
            <input type=reset>

        </form>
    <?php } else {
    }
    ?>

    <?php
    insertStory($storynum, $story0);
    ?>
    </div>
</body>

</html>