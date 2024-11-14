function removeEveryOther($array) {
   foreach($array as $key=>$value){
     if($key%2==0){
     unset($array[$key+1]);
       }
   }
  return $array;
}