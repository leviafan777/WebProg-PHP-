<?php
function square_sum($numbers) : int {
  $sum=0;
 foreach($numbers as $value){
   $sum+=$value*$value;
 }
  return $sum;
}