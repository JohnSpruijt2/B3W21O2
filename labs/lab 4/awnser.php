
<?php 

$number = $_POST['number'];
$choiceA = $_POST['optionA'];
$choiceB = $_POST['optionB'];
$choiceC = $_POST['optionC'];

if($choiceB == "YathzeeJa") {
    if($number > 15 && $number < 30) {
        $monopolyTxt = "Je wilt Yathzee spelen want je hebt tussen de 15 en 30 minuten tijd";
    }
    elseif($number <15 && $number >30) {
        $monopolyTxt = "Je wilt Yathzee spelen want dat vindt je gewoon leuk";
    }
}
elseif($choiceB == "YathzeeNee") {
    if($number > 100) {
        $monopolyTxt = "Je wilt geen Yathzee spelen want je wilt meer dan 100x met een dobbel steen gooien";
    }
    elseif($number <=100) {
        $monopolyTxt = "Je wilt geen Yathzee spelen want je wilt minder dan 100 punten halen";
    }
}
?>
