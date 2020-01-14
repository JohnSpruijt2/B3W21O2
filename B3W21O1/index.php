<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet"> 
</head>
<body>
        

<div id="bigDiv">
<?php
        date_default_timezone_set("Europe/Amsterdam");
        $time = date("H:i");
    if (date("H") > 18) {
        $background = "evening";
        print "<a> Goedeavond!<br>";
    }
    elseif (date("H") > 12) {
        $background = "afternoon";
        print "<a> Goedemiddag!<br>";
    }
    elseif (date("H") > 6) {
        $background = "morning";
        print "<a> Goedemorgen!<br>";
    }
    elseif (date("H") >-1) {
        $background = "night";
        print "<a> Goedenacht!<br>";
    }
    print "Het is nu ".$time."</a>";
    print "<style> #bigDiv {background-image:url('B3W21O1/images/$background.png');} </style>";

    ?>
</div>
</body>
</html>