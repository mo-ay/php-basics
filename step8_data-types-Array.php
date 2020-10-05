<?php

$grocery = ["Eggs", "Milk", "Cheese", "Water" ,
"Pack", "Tissues", "Watermelon"];
echo "Hello Sir, do you have $grocery[0], $grocery[1], 
and $grocery[2]? Also if you sell fruits can I find a $grocery[6]?";

$multidimensionalArray = [
    "egss"=>["balade","mazere3"],
    "milk"=>["fresh","Taanayel"],
    "water-pack"=>["Tanoureen","Reem"]
];
echo "Hey Sir, Please I need 1 pack of "
 .$multidimensionalArray["egss"][0]
 ." eggs and 3 " .$multidimensionalArray["water-pack"][1]
 ." Water Pack";

?>