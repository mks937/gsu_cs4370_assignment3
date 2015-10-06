<?php 
$restaurants = array(
    0 => array(
        "Chama Gaucha",
        "40.50"
        
    ),
    1 => array(
        'Aviva by Kameel',
        "15.00"
        
    ),
    2 => array(
        "Bone's Restaurant",
        '65.00'
        
    ),
    3 => array(
        'Umi Sushi Buckhead',
        '40.50'
        
    ),
    4 => array(
        'Fandangles',
        '30.00'
        
    ),
    5 => array(
        'Capital Grille',
        '60.50'
        
    ),
    6 => array(
        'Canoe',
        '35.50'
        
    ),
    7 => array(
        'One Flew South',
        '21.00'
        
    ),
    8 => array(
        'Fox Bros. BBQ',
        '15.00'
        
    ),
    9 => array(
        'South City Kitchen Midtown',
        '29.00'
        
    )
);



/*for ($row = 0; $row <  10; $row++) {
   
   for ($col = 0; $col <  2; $col++) {
     echo $restaurants[$row][$col]."   ";
   }
   echo "<br>";
}*/

echo "<table border=1>
    <tr>
      <th>Restaurant</th><th>Average Cost of Meal</th>
    </tr>
";
for ($row = 0; $row <  10; $row++) {
   
   echo "<tr>";
   for ($col = 0; $col <  2; $col++) {
     echo "<td>".$restaurants[$row][$col]."</td>";
   }
   echo "</tr>";
}

echo "<br>";
echo "<br>";

function cmp_names($a, $b)
{
    return strcmp($a[0], $b[0]);
}

usort($restaurants, "cmp_names");


echo "<table border=1>
    <tr>    

      <th>Restaurant</th><th>Average Cost of Meal</th>
    </tr>
";
for ($row = 0; $row <  10; $row++) {
   
   echo "<tr>";
   for ($col = 0; $col <  2; $col++) {
     echo "<td>".$restaurants[$row][$col]."</td>";
   }
   echo "</tr>";
}



function cmp_prices($a, $b)
{
    return strcmp($a[1], $b[1]);
}

usort($restaurants, "cmp_prices");


echo "<br>";
echo "<br>";

echo "<table border=1>
    <tr>    

      <th>Restaurant</th><th>Average Cost of Meal</th>
    </tr>
";


for ($row = 0; $row <  10; $row++) {
   
   echo "<tr>";
   for ($col = 0; $col <  2; $col++) {
     echo "<td>".$restaurants[$row][$col]."</td>";
   }
   echo "</tr>";
}

?>