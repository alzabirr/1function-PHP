<?php
// function sum ( int |float |string  $age){
//     echo $age;

// }
// sum("22.5");

function sum(?int $age){
    echo $age;
}
sum(22);
sum(null);