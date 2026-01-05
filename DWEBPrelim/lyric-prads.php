<?php
$title = "Forevermore";
$artist = "Side A";
$mood = "Emotional";

$verseCount = 2;
$repeatChorus = 3;

$majorSections = $verseCount + $repeatChorus;

$nouns = ["face", "stars", "night", "embrace", "dream", "arms", "years", "love", "world", "changes", "time"];
$verbs = ["look", "feel", "believe", "compare", "need", "hold", "dream", "watch", "wish", "stay", "be"];

$verse1 = [
    "There are " . $nouns[10],
    "When I just want to " . $verbs[0] . " at your " . $nouns[0],
    "With the " . $nouns[1] . " in the " . $nouns[2],
    "There are " . $nouns[10],
    "When I just want to " . $verbs[1] . " your " . $nouns[3],
    "In the cold " . $nouns[2]
];

$preChorus1 = "I just can't " . $verbs[2] . " that you are mine now";

$chorus1 = [
    "You were just a " . $nouns[4] . " that I once knew",
    "I never thought I would " . $verbs[10] . " right for you",
    "I just can't " . $verbs[3] . " you with anything in this " . $nouns[8],
    "You're all I " . $verbs[4] . " to " . $verbs[10] . " with forevermore"
];

$verse2 = [
    "All those " . $nouns[6],
    "I've longed to " . $verbs[5] . " you in my " . $nouns[5],
    "I've been " . $verbs[6] . " of you every " . $nouns[2],
    "I've been " . $verbs[7] . " all the " . $nouns[1] . " that fall down",
    $verbs[8] . "ing you will " . $verbs[10] . " mine"
];

$pre_chorus2 = "I just can't" . $verbs[2] . "that you are mine now";

$chorus2 = [
    "You were just a" . $nouns[4] . "that I once knew",
    "I never thought I would" . $verbs[10] . "right for you",
    "I just can't" . $verbs[3] . "you with",
    "Anything in this" . $nouns[8],
    "You're all I need to" . $verbs[10] . "with forevermore"
];

$bridge = [
    "Time and again",
    "There are these " . $nouns[9] . " that we cannot end",
    "As sure as " . $nouns[10] . " keeps " . $verbs[7] . " on and on",
    "My " . $nouns[7] . " for you will " . $verbs[10] . " forevermore"
];

$pre_chorus3 = "I just can't" . $verbs[2] . "that you are mine now";

$chorus3 = [
    "You were just a" . $nouns[4] . "that I once knew",
    "I never thought I would" . $verbs[10] . "right for you",
    "I just can't" . $verbs[3] . "you with",
    "Anything in this" . $nouns[8],
    "As endless as forever",
    "Our " . $nouns[7] . "will " . $verbs[9] . "together",
    "You're all I need to" . $verbs[10] . "with forevermore"
];

$outro = [
    "(As endless as forever) Ohh-oh",
    "(Our " . $nouns[7] . " will " . $verbs[9] . " together)",
    "You're all I " . $verbs[4] . " to " . $verbs[10] . " with forevermore"
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Lyric Remix Yeah</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
            text-align: center;
        }
        .chorus {
            font-style: italic;
            color: #555;
        }
    </style>
</head>
<body>
    <h1><strong><?= $title ?></strong></h1>
    <h2>by: <strong><?= $artist ?></strong></h2>
    <p><strong>Mood:</strong> <?= $mood ?></p>
    <p><strong>This Song has <?= $majorSections ?> sections.</strong></p>

    <h2>Verse 1</h2>
    <?php foreach ($verse1 as $line) echo "<p>$line</p>"; ?>

    <h2>Pre-Chorus</h2>
    <p><?= $preChorus1 ?></p>

    <h2 class="chorus">Chorus</h2>
    <?php foreach ($chorus1 as $line) echo "<p class='chorus'>$line</p>"; ?>

    <h2>Verse 2</h2>
    <?php foreach ($verse2 as $line) echo "<p>$line</p>"; ?>

    <h2>Pre-Chorus</h2>
    <p><?= $pre_chorus2 ?></p>

    <h2 class="chorus">Chorus</h2>
    <?php foreach ($chorus2 as $line) echo "<p class='chorus'>$line</p>"; ?>

    <h2>Bridge</h2>
    <?php foreach ($bridge as $line) echo "<p>$line</p>"; ?>

    <h2>Pre-Chorus</h2>
    <p><?= $pre_chorus3 ?></p>

    <h2 class="chorus">Final Chorus</h2>
    <?php foreach ($chorus3 as $line) echo "<p class='chorus'>$line</p>"; ?>

    <h2>Outro</h2>
    <?php foreach ($outro as $line) echo "<p>$line</p>"; ?>
</body>
</html>
