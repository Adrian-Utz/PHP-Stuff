<?php

echo "Hello World This is a Test!";

function Test(){
    $a = 0;
    $output = "";
    while($a <= 15){
        $output .= $a . "<br>";
        $a++;
    }
    return $output;
}

echo Test();
function DiceRoll(){
    $Dice = array(1, 2, 3, 4, 5, 6);
    $count = 0;
    while ($count <= 20){
        $roll = $Dice[rand(0, 5)];
        echo $roll . "<br>";
        if($roll == 6){
            echo "You rolled a Six! Lucky you! <br>";
        }elseif($roll == 1){
            echo "Unlucky!<br>";
        }
        $count++;
    }
}

echo DiceRoll();

$displayV = 9.824563;
echo "Unformatted text";

echo "<pre>\n";
echo "Formatted Text\r\n";
echo "$displayV = $displayV\r\n";
echo "<pre>\n";

$books = array("Huckleberry Finn", "Nineteen Eight-Four", "The Cat in the Hat");
$authors = array("Mark Twain", "George Orwell", "Dr. Seuss");

for($i = 0; $i < count($books); $i++){
    echo "The writer of ". $books[$i] . " is " . $authors[$i] . "!<br>";
}

$expString = "metalworking project";

echo substr($expString, 5) . "<br>";
echo substr($expString, 5, 7) . "<br>";
echo substr($expString, 0, 9) . "<br>";
echo substr($expString, -7) . "<br>";


?>