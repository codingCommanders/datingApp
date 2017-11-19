<?php  
 // Declare variables
 $q1 = $_POST ["q1"]; 
 $q2 = $_POST ["q2"];
 $q3 = $_POST ["q3"];
 $q4 = $_POST ["q4"];
 $q5 = $_POST ["q5"];
 $q6 = $_POST ["q6"];
 $q7 = $_POST ["q7"];
 $q8 = $_POST ["q8"];
 $name = $_POST["first"] . " " . $_POST["last"];
 $email = $_POST["email"];
 $score = 0;
 $toReturn = "";

 // q1
 if ($q1 == 1) {
   $score += 1000;
   $toReturn .= "Your programming skills gave you a huge advantage. ";
 }
 elseif ($q1 == 2) {
   $score += 500;
   $toReturn .= "It's great that you can program!  You may want to study a little harder;) ";
 }
 elseif ($q1==3) {
   $score +=  -500;
   $toReturn .= "Your lack of programming skill gave you a huge disadvantage. ";
 }
 else $score += -1000;
 //q2
 switch ($q2) {
   case "1":
     $score += -250;
     $toReturn .= "A coffee shop is a pretty bad first date. ";
     break;
   case "2":
     $score += 1000;
     $toReturn .= "I love to eat and computer program! ";
     break;
   case "3":
     $score += -1000;
     $toReturn .= "You sound like a pig. ";
     break;
   case "4":
     $score += 500;
     break;
   case "5":
     $score += 1000;
     $toReturn .= "You're so metal! ";
     break;
   default:
     $score += -1000;
 }

 //q3 
 if ($q3 == 1) {
   $score += -300; 
 }
 elseif ($q3 == 2) {
   $score += 250;
 }
 elseif ($q3 == 3) {
   $score += 350;
 }
 else $score += -1000;

 //q4 
 if ($q4 == 1) {
   $score += -500; 
 }
 elseif ($q3 == 2) {
   $score += 500;
 }
 elseif ($q3 == 3) {
   $score += -200;
 }
 else $score += -1000;
 // q5
 if ($q5 == 1) {
   $score += 500;
   $toReturn .= "I love sci-fi! ";
 }
 elseif ($q5 == 2) {
   $score += -1000;
   $toReturn .= "You may want to try out some new sci-fi shows. ";
 }
 else $score += -1000;
 
 // q6
 if ($q6 == 1) {
   if ($q2 == 2) {
     $score += 500;
    }
   else $score += 250;

   $toReturn .= "I am interested in learning more about embedded systems! ";
 }
 elseif ($q6 == 2) {
   $score += 0;
 }
 else $score -1000;
 //q7 
 if ($q7 == 1) {
   $score += 300; 
 }
 elseif ($q7 == 2) {
   $score += -3000;
 }
 elseif ($q7 == 3) {
   $score += 500;
 }
 elseif ($q7 == 4) {
   $score += -500;
 }
 else $score += -1000; 
 // q8
 if ($q8 == 1) {
   $score += 500;
   $toReturn .= "I like to stay active. ";
 }
 elseif ($q8 == 2) {
   $score += -500;
 }
 else $score += -1000;

 // Pass or Fail?
 $pass = "";
 if ($score < 1000) {
   $pass = false;
   $toReturn .= "YOU DID NOT PASS!!!";
 }
 elseif ($score >= 1000) {
  $pass = true;
  $toReturn .= "YOU PASS!!! ";
 }
 else echo "Error!!! ";
 // High scorers
   if ($score >= 2000) {
     $toReturn .= "You scored really high!  When would you like to take me out?:)";
   }
 // Return message
  echo $toReturn . " You scored: " . $score;
?>
