<?php

function isBitten($probability) {
    if(rand(1,100)  < $probability) {
        echo "Charlie ate my lunch!";
    } else {
         echo "Charlie did not eat my lunch!";
    }
}
   
isBitten(50);

?>