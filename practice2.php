<?php 
declare(strict_types=1);
//1. functon parametars 
// function jog ($x,$y){
//     $num1 = $x;
//     $num2 = $y;
//     echo ($num1+$num2);
// }
// jog(4,5);

// 2. function defalt /or oparetor 
// function jog ($x,$y= 6){
//     $num1 = $x;
//     $num2 = $y;
//     echo ($num1+$num2);
// }
// jog(4);

// 3. function parameter type hinting 
// function jog (int $x, int $y){
//     $num1 = $x;
//     $num2 = $y;
//     echo ($num1+$num2);
// }
// jog(2,3);


// 4. function parameter multiple (type hinting)
// function myAge (int|float|string $age){
//     echo $age;
// }
// myAge("22");


// 5. null type hinting 
// function myAge (? int $age){
//     echo $age;


// }
// myAge(22, "\n");
// myAge(null);

// 6. variadic function 
function countryName (... $country){
    // echo $country;
    print_r($country);
}
countryName("Bangladesh","India","Dub");


// 7. anonymous function 

// (function  (){
//     echo "hello Anonymous function";
// }
// )();


// 8. function return 
// function sum (){
//     return 20;

// }
// echo sum()+10;

//9. function return type 
// function num():int{
//     return 10;

// }
// echo num()+2;

// 10. function multiple return type 
// function num():int|float|bool|string{
//     return 10;

// }
// echo num()+5;


// 11. f0r loop 
// for($i=1; $i<=10; $i++){
//     // echo $i. "<button>hi php</button> <br/>";
//     // printf($i."<br/>");
//     echo $i;
// }

// 12.while loop 
// $i=0;
// while($i<=100){
//     echo $i;
//     $i++;
// }

// 13. do while loop 
// $i = 0;
// do{
//     echo $i;
//     $i = $i+1;
// }while($i<=12);

// break loop 
// for($i=1; $i<=15; $i++){
//     if($i==10){
//         break;
//     }
//     echo $i;
// }
 for($i=1; $i<=15; $i++){
        if($i%2==0){
            continue;
        }
        echo $i;
    }
    
