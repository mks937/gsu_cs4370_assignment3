<?php


echo "<br>";
echo "<br>";

$months = array('January', 'February', 'March', 'April',
 'May', 'June', 'July', 'August',
 'September', 'October', 'November', 'December'); 

for($i=0; $i<count($months); $i++) {
   echo $months[$i]." <br>";
} 

echo "<br>";
echo "<br>";

$monthsArrayObject = new ArrayObject($months);
$sorted_months = $monthsArrayObject->getArrayCopy();

sort($sorted_months);

for($i=0; $i<count($sorted_months); $i++) {
   echo $sorted_months[$i]." <br>";
} 

echo "<br>";
echo "<br>";

foreach ($months as $key => $value){
    echo $value."<br>";
}

echo "<br>";
echo "<br>";

foreach ($sorted_months as $key => $value){
    echo $value."<br>";
}


?>