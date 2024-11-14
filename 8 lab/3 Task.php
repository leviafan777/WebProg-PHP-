function enough($cap, $on, $wait) {
   return ($on + $wait <= $cap) ? 0 : (($wait < 0) ? 0 : ($on + $wait - $cap));
}