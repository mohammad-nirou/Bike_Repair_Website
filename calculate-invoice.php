<?php
//discount can be chosen from the list[0,1,2]
function addNumbers(int $price, int $number, int $discount=0) {

if ($discount==1) {
  $sum=$price * $number;
    $tax=0.1 * $sum;
    $total=0.85 * ($sum + $tax);
    echo "you got 15% discount, thank you for the subscription\r\n";
    echo "<br>";
    echo "your tatal invoice is:";
    
  return $total;
  
} elseif ($discount==2) {
  $sum=$price * $number;
    $tax=0.1 * $sum;
    $total= 0.9 * ($sum + $tax);
    echo "you got 15% discount, thank you for the subscription\r\n";
    echo "<br>";
    echo "your tatal invoice is:";
    
    
  return $total;
} else {
  $sum=$price * $number;
    $tax=0.1 * $sum;
    $total=$sum + $tax;
    echo "your tatal invoice is:";
  return $total;
}
	
    
  return $total;
}
echo addNumbers(50, 10, 1); 
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
?>