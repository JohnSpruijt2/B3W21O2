<?php
$message = "";
if(isset($_POST['SubmitButton'])){ 
  $number = $_POST['number'];
  $choiceA = $_POST['optionA'];
  $choiceB = $_POST['optionB'];
  $choiceC = $_POST['optionC'];
  
  if($choiceB == "ja") {
      if($number > 15 && $number < 30) {
          $yathzeeTxt = "Je wilt Yathzee spelen want je hebt tussen de 15 en 30 minuten tijd";
      }
      elseif($number <15 && $number >30) {
          $yathzeeTxt = "Je wilt Yathzee spelen want dat vindt je gewoon leuk";
      }
      else {
         $yathzeeTxt = "Je wilt Yathzee spelen";
      }
  }
  elseif($choiceB == "nee") {
      if($number > 100) {
          $yathzeeTxt = "Je wilt geen Yathzee spelen want je wilt meer dan 100x met een dobbel steen gooien";
      }
      elseif($number <=100) {
          $yathzeeTxt = "Je wilt geen Yathzee spelen want je wilt minder dan 100 punten halen";
      }
      else {
         $yathzeeTxt = "Je wilt geen Yathzee spelen";
      }
  }

  if ($choiceA == "ja") {
   if ($number == 60) {
      $monopolyTxt = "Je wilt Monopoly spelen want je hebt aan 1 spelletje genoeg";
   }
   elseif ($number >60) {
      $monopolyTxt = "Je wilt Monopoly spelen want je houd ervan om iedereen blutte maken";
   }
   else {
      $monopolyTxt = "Je wilt monopoly spelen maar hebt niet genoeg tijd";
   }
  }
  elseif($choiceA == "nee") {
   if ($number >= 120) {
      $monopolyTxt = "Je wilt Monopoly niet spelen want je hebt geen zin in een spel van 2 uur";
   }
   else {
      $monopolyTxt = "Je wilt Monopoly niet spelen want je houd niet van hotels";
   }
  }
  if ($choiceC == "ja") {
     if ($number == 2) {
        $schakenTxt = "Je wilt Schaken want je vindt zwart en wit leuk";
     }
     elseif ($number <> 2) {
        $schakenTxt = "Je wilt Schaken want je denkt slimmer dan mij te zijn";
     }
  }
  elseif ($choiceC == "nee") {
     if ($number == -1) {
        $schakenTxt = "Je wilt echt niet Schaken";
     }
     else {
        $schakenTxt = "Je wilt gewoon niet Schaken";
     }
  }
  echo $yathzeeTxt."<br>";
  echo $monopolyTxt."<br>";
  echo $schakenTxt."<br>";
}    
?>





   <form action="" method="POST">
   <div>
   <a>Monopoly</a> <br>
    <input type="radio" name="optionA" value="ja" id="option1"> <label for="option1">Ja</label>
    <input type="radio" name="optionA" value="nee" id="option2" checked="checked"> <label for="option2">Nee</label>
   </div>
   <div>
   <a>Yathzee</a> <br>
    <input type="radio" name="optionB" value="ja" id="option3"> <label for="option3">Ja</label>
    <input type="radio" name="optionB" value="nee" id="option4" checked="checked"> <label for="option4">Nee</label>
   </div>
   <div>
   <a>Schaken</a> <br>
    <input type="radio" name="optionC" value="ja" id="option5"> <label for="option3">Ja</label>
    <input type="radio" name="optionC" value="nee" id="option6" checked="checked"> <label for="option4">Nee</label>
   </div> <br>
    <label for="number">Hoe veel minuten kan je spelen?</label> <br>
    <input type="number" name="number" id="number" max="400" value="0">
    <input type="submit" value="submit" name="SubmitButton">
   </form>