<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do I Wanna Know - PHP Program</title>
    <style>
        body {
            text-align: center; 
            font-family: Arial, sans-serif;
        }
        h1, h2, h3 {
            margin-bottom: 10px;
        }
        p {
            margin: 3px 0;
        }
    </style>
</head>

<body>

<?php

$title  = "'Do I Wanna Know?'";
$artist = "Arctic Monkeys";

echo "<hr>";

// NUMERIC VARIABLES
$repeatChorus = 2;
$verseCount   = 2;

// ARRAYS OF WORD TYPES
$nouns       = ["cheeks", "secrets", "tune", "heart", "nights"];
$verbs       = ["shift", "dream", "fall", "crawl", "wonder"];
$adjectives  = ["deep", "slow", "restless"];


// VERSE 1
$verse1 = [
    "Have you got colour in your cheeks?",
    "Do you ever get that fear that you can't shift the type
That sticks around like summat in your teeth?",
    "Are there some aces up your sleeve?
Have you no idea that you're in deep?",
    "I've dreamt about you nearly every night this week
How many secrets can you keep?",
    "'Cause there's this tune I found
That makes me think of you somehow an' I play it on repeat",
    "Until I fall asleep, spillin' drinks on my settee",
    ];

// PRE-CHORUS 

$prechorus1 = [
    "(Do I wanna know?) If this feelin' flows both ways?",
    "(Sad to see you go) Was sorta hopin' that you'd stay",
    "(Baby, we both know) That the nights were mainly made",
    "For sayin' things that you can't say tomorrow day",
    ];

// CHORUS 
$chorus1 = [
    "Crawlin' back to you",
    "Ever thought of callin' when
You've had a few?",
    "'Cause I always do",
    "Maybe I'm too",
    "Busy bein' yours",
    "To fall for somebody new",
    "Now, I've thought it through",
    "Crawlin' back to you",
    ];


// VERSE 2
$verse2 = [
    "So have you got the guts?",
    "Been wonderin' if your heart's still open",
    "And if so, I wanna know what time it shuts",
    "Simmer down an' pucker up, I'm sorry to interrupt",
    "It's just I'm constantly on the cusp of tryin' to kiss you",
    "But I don't know if you feel the same as I do",
    "But we could be together if you wanted to"
];


// PRE-CHORUS
$prechorus2 = [
    "(Do I wanna know?) If this feelin' flows both ways?",
    "(Sad to see you go) Was sorta hopin' that you'd stay",
    "(Baby, we both know) That the nights were mainly made",
    "For sayin' things that you can't say tomorrow day"
    ];

// CHORUS 
$chorus2 = [
    "Crawlin' back to you (Crawlin' back to you)",
    "Ever thought of callin' when",
    "You've had a few? (You've had a few)",
    "'Cause I always do ('Cause I always do)",
    "Maybe I'm too (Maybe I'm too busy)",
    "Busy bein' yours (Bein' yours)",
    "To fall for somebody new",
    "Now, I've thought it through",
    "Crawlin' back to you"
];

// OUTRO
$outro = [
    "(Do I wanna know?) If this feelin' flows both ways?",
    "(Sad to see you go) Was sorta hopin' that you'd stay",
    "(Baby, we both know) That the nights were mainly made",
    "For sayin' things that you can't say tomorrow day",
    "(Do I wanna know?) Too busy bein' yours to fall",
    "(Sad to see you go) Ever thought of callin', darlin'?",
    "(Do I wanna know?) Do you want me crawlin' back to you?"
];

// DISPLAY FUNCTION
function showPart($label, $array) {
    echo "<h3>$label</h3>";
    foreach ($array as $line){
        echo "<p>$line</p>";
    }
}

// OUTPUT
echo "<h1>$title</h1>";
echo "<h2>By $artist</h2>";
echo "<hr>";

showPart("Verse 1", $verse1);
showPart("Pre-Chorus 1", $prechorus1);
showPart("Chorus 1", $chorus1);

showPart("Verse 2", $verse2);
showPart("Pre-Chorus 2", $prechorus2);
showPart("Chorus 2", $chorus2);

showPart("Outro", $outro);

echo "<hr>";

// TYPE JUGGLING
echo "<p>The chorus repeats " . $repeatChorus . " times.</p>";
echo "<p>Total verses: " . $verseCount . "</p>";

// OPERATOR EXAMPLE
$line = "Your " . $nouns[0] . " makes me " . $verbs[4] . ".";

echo "<hr>";
echo "<p>Capulong, Jeanne Macy E.</p>";
echo "<p>WD - 201</p>";

?>

</body>
</html>
