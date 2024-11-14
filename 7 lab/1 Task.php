function multiples(int $m, float $n): array {
  $array=[];
  for($i=0;$i<$m;$i++){
    $array[]=$n*($i+1);
  }
  return $array;
}