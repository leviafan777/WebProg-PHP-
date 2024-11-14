<?php
function disemvowel($string) {
  $str=array('a','e','i','o','u','O','A','E','I','U');
  $string=str_replace($str,'',$string);
  return $string;
}